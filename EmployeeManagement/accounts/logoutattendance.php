<?php
    session_start();
    include_once '../class.user.php';
    $conn = mysqli_connect('localhost','root','','employeemanagement');
    $uid = $_SESSION['uid'];
    $type = 'logout';
    $date = date('Y-m-d ');
    // $date1 = date('h:m:s');
    $query = "INSERT INTO tblattendance (empid,date,time,type) VALUES ('$uid','$date',now(),'$type')";
    if(mysqli_query($conn,$query))
    {
        // echo 'Logout succesfull';
    }
    else
    {
        // echo "error while logout"; 
    }
       
?>