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
        $id = $_POST['id'];
        $status = $_POST['status'];
        
        $sql = "UPDATE Leave_Request_Table SET status='$status' WHERE id='$id'";

        if ($conn->query($sql) === TRUE) {
            echo "Leave status updated successfully";
        } else 
        {
            echo "Error updating leave status: " . $conn->error;
        }
        
     }