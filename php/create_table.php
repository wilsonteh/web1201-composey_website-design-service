<?php 
include_once "db_connection.php";


function dropTable() {
   $dropQuery = "DROP TABLE Contact";
   
   mysqli_query(createConnection(), $dropQuery);
}

function createTable() {
   $createQuery = "CREATE TABLE Contact (
      id INT(10) UNSIGNED  AUTO_INCREMENT PRIMARY KEY,
      contactname VARCHAR(30) NOT NULL, 
      salutation CHAR(3) NOT NULL,
      company VARCHAR(30),
      email VARCHAR(50) NOT NULL,
      phonenum VARCHAR(12) NOT NULL, 
      preferredcontact CHAR(5) NOT NULL,
      messages VARCHAR(300) NOT NULL
   )";

   mysqli_query(createConnection(), $createQuery);

}

?>
