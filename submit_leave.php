<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "Leave_Request_Database";

     $conn = new mysqli($severname, $username, $password, $dbname);

     if ($conn-> connect_error) {
        die ("Connection Failed: " . $conn->connect_error);
     }


?>