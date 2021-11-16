<?php 

if (!function_exists('createConnection')) {
   function createConnection() {
      $cleardb_url = parse_url(getenv("CLEARDB_DATABASE_URL"));
      $cleardb_server = $cleardb_url["host"];
      $cleardb_username = $cleardb_url["user"];
      $cleardb_password = $cleardb_url["pass"];
      $cleardb_db = substr($cleardb_url["path"],1);

      // $serverName = 'localhost';
      // $username = 'root';
      // $pw = 'Ilovephp!!99';
      // $dbName = 'composey';
   
      $handler = mysqli_connect($cleardb_server, $cleardb_username, $cleardb_password, $cleardb_db);
   
      return $handler;
   }
}

?>