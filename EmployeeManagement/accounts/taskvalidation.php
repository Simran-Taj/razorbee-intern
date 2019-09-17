<?php
     session_start();
     include_once 'class.user.php';
     $conn = mysqli_connect('localhost','root','','employeemanagement');
     $uid = $_SESSION['uid'];
     $date = date('Y-m-d');
     $task= $_POST['task'];
     echo $task;

    //  $query = "INSERT INTO tasktable (date,task) VALUES (5,$_POST['task'])";

    $result = mysqli_query($conn,"insert into taskmanagement(empid,date,task) values ('$uid','$date','$task')");
    
?>