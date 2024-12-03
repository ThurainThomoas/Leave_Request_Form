<?php
$severname = "localhost";
$username = "root";
$password = "";
$dbname = "Leave_Request_Database";

     $conn = new mysqli($severname, $username, $password, $dbname);

     if ($conn-> connect_error) {
        die ("Connection Failed: " . $conn->connect_error);
     }

   if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $employee_name = $_POST['employee_name'];
      $leave_types = $_POST['leave_types'];
      $start_date = $_POST['start_date'];
      $end_date = $_POST['end_date'];
      $reason = $_POST['reason'];
   

   $sql = "INSERT INTO Leave_Request_Tabel (employee_name,leave_types,start_date,end_date,reason) VALUES ('$employee_name', '$leave_types', '$start_date', '$end_date', '$reason')";

   if ($conn->query($sql) === TRUE) {
      echo "New record created successfully";
      }
      else {
      echo "Error: ". $sql. "<br>". $conn->error;
      }

      $conn->close();
   }

?>