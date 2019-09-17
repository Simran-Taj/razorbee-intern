<?php
    
    $conn = mysqli_connect('localhost','root','','internproject');
    $empid = $_COOKIE['empid'];
    $type = 'logout';

    $date = date('Y-m-d ');
    $date1 = date('h:m:s');
    $query = "INSERT INTO tblattendance (empid,date,time,type) VALUES ('$empid','$date',now(),'$type')";
    if(mysqli_query($conn,$query))
    {
        echo 'Logout succesfull';
    }
    else
    {
        echo "error while logout"; 
    }
       
?>