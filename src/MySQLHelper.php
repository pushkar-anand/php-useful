<?php /** @noinspection SqlNoDataSourceInspection */

namespace PhpUseful;


use Exception;
use mysqli;
use mysqli_result;

class MySQLHelper
{
    private $conn;


    /**
     * MySQLHelper constructor.
     * @param string $db_server - The mysql database server name
     * @param string $db_user - The mysql database user
     * @param string $db_password - The mysql database password
     * @param string $db - The mysql database name
     * @throws Exception
     */
    public function __construct(string $db_server, string $db_user, string $db_password, string $db)
    {
        mysqli_report(MYSQLI_REPORT_ERROR | MYSQLI_REPORT_STRICT);
        $this->conn = new mysqli($db_server, $db_user, $db_password, $db);
        if ($this->conn->connect_error) {
            error_log("Error: " . $this->conn->connect_error);
            throw new Exception("Error connecting to database: " . $this->conn->connect_error);
        }
    }

    /**
     * Get the mysqli connection object
     * @return mysqli
     */
    public function getConn(): mysqli
    {
        return $this->conn;
    }


    /**
     * Insert data to mysql table
     * @param string $table - pass the table name to insert to
     * @param array $fields - the table fields
     * @param string $params
     * @param string ...$values
     * @throws Exception
     */
    public function insert(string $table, array $fields, string $params, string ...$values)
    {
        $fieldsSTR = implode(",", $fields);
        $c = str_repeat("?, ", count($fields));
        $placeholders = rtrim($c, ", ");
        $query = "INSERT INTO $table($fieldsSTR) VALUES($placeholders)";

        error_log("Generated INSERT query " . __FILE__ . ":" . __LINE__ . ": $query");

        $stmt = $this->conn->prepare($query);

        if ($stmt !== false) {
            if ($stmt->bind_param($params, ...$values)) {
                if (!$stmt->execute()) {
                    throw new Exception("Error in query execution at line " . 50 . " in " . __FILE__);
                }
            } else {
                throw new Exception("Error in binding params at line " . 49 . " in " . __FILE__);
            }
        } else {
            throw new Exception("Couldn't prepare the mysql query.");
        }
    }


    /**
     * @param string $table
     * @param string $field
     * @param string $newValue
     * @param string $where_field
     * @param string $match
     * @return bool
     */
    public function updateSingle(string $table, string $field, string $newValue, string $where_field, string $match): bool
    {
        $query = "UPDATE $table SET $field = ? WHERE $where_field = ?";
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('ss', $newValue, $match);
        return $stmt->execute();
    }

    /**
     * @param string $table
     * @param string $where_field
     * @param string $match
     * @return int
     */
    public function getResultCount(string $table, string $where_field, string $match)
    {
        $query = "SELECT * FROM $table WHERE $where_field = ? ";
        error_log("executing query: $query");
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $match);
        $stmt->execute();
        $stmt->store_result();
        $num_of_rows = $stmt->num_rows;
        $stmt->free_result();
        $stmt->close();
        return $num_of_rows;
    }

    /**
     * @param string $table
     * @param string $select_field
     * @param string $where_field
     * @param string $match
     * @return string
     */
    public function fetchSingleField(string $table, string $select_field, string $where_field, string $match): string
    {
        $query = "SELECT $select_field FROM $table WHERE $where_field = ? ";
        error_log("executing query: $query");
        $stmt = $this->conn->prepare($query);
        $stmt->bind_param('s', $match);
        $stmt->execute();
        $stmt->store_result();
        $stmt->bind_result($result);
        $stmt->fetch();
        $return = $result;
        $stmt->free_result();
        $stmt->close();
        return $return;
    }

    /**
     * @param string $table
     * @param string $where_field
     * @param string|int $match
     * @return array|null
     */
    public function fetchRow(string $table, string $where_field, $match)
    {
        $query = "SELECT * FROM $table WHERE $where_field = ?";
        $stmt = $this->conn->prepare($query);

        if (is_int($match)) {
            $stmt->bind_param("i", $match);
        } else {
            $stmt->bind_param("s", $match);
        }

        $stmt->execute();
        $res = $stmt->get_result();
        return $res->fetch_assoc();
    }

    /**
     * Fetches all the rows that matches form a table.
     * @param string $table
     * @param string $where_field
     * @param $match
     * @return array
     */
    public function fetchAllMatchingRows(string $table, string $where_field, $match): array
    {
        $all = array();

        $query = "SELECT * FROM $table WHERE $where_field = ?";
        $stmt = $this->conn->prepare($query);

        if (is_int($match)) {
            $stmt->bind_param("i", $match);
        } else {
            $stmt->bind_param("s", $match);
        }

        $stmt->execute();
        $res = $stmt->get_result();

        while ($row = $res->fetch_assoc()) {
            array_push($all, $row);
        }
        return $all;
    }

    /**
     * Fetches all the results in a table
     * @param string $table
     * @return bool|mysqli_result
     */
    public function fetchAll(string $table)
    {
        $query = "SELECT * FROM $table";
        return $this->conn->query($query);
    }

}