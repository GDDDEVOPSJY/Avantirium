<?php
$servername = "localhost";
$username = "codeaw5_codeatech";
$password = "";
$dbhost = 'localhost';
         $dbuser = 'codeat5_codeatech-user';
         $dbpass = 'c(#u{eb%?7$C';
         $dbname = 'codeat5_codeatechnologies_db01';
         $conn = mysqli_connect($dbhost, $dbuser, $dbpass,$dbname);
   
         if(! $conn ) {
            die('Could not connect: ' . mysqli_error());
         }
       //  echo 'Connected successfully<br>';
?>