CREATE TABLE IF NOT EXISTS test_table
(
  `id`     int(11)     NOT NULL AUTO_INCREMENT PRIMARY KEY,
  `field1` varchar(25) NOT NULL,
  `field2` varchar(25) NOT NULL,
  `field3` varchar(25) NOT NULL,
  `field4` varchar(25) NOT NULL
);

INSERT INTO test_table (field1, field2, field3, field4)
VALUES ('a', 'b', 'c', 'd'),
       ('1', '2', '3', '4');

