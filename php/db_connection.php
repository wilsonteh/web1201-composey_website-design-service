<?php 

if (!function_exists('createConnection')) {
   function createConnection() {
      $serverName = 'localhost';
      $username = 'root';
      $pw = 'Ilovephp!!99';
      $dbName = 'composey';
   
      $handler = mysqli_connect($serverName, $username, $pw, $dbName);
   
      return $handler;
   }
}

?>