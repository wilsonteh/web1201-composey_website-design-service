<?php 
require_once "db_connection.php";


function insert_data($data, $connection) {
   $name = $data['name'];
   $salutation = $data['salutation'];
   $company = $data['company'];
   $email = $data['email'];
   $phonenum = $data['phoneNo'];
   $preferredContact = $data['preferredContact'];
   $message = $data['message'];


   $insertQuery = "INSERT INTO contact (contactname, salutation, company, email, phonenum, preferredcontact, messages)
                     VALUES ('$name', '$salutation', '$company', '$email', '$phonenum', '$preferredContact', '$message')";


   if (mysqli_query($connection, $insertQuery)) {
      echo 'Data has been saved into DB';
   } else {
      echo 'ERROR: ' . mysqli_error($connection);
   }

}


?>