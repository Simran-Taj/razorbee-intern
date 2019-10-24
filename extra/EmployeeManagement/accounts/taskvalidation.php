<?php
session_start();
     $conn = mysqli_connect('localhost','root','','employeemanagement');
     $uid = $_SESSION['uid'];
     $date = date('Y-m-d');
     $task= $_POST['task'];
     echo $task;

    //  $query = "INSERT INTO tasktable (date,task) VALUES (5,$_POST['task'])";

    $result = "INSERT into taskmanagement(empid,date,task) values ('$uid','$date','$task')";
    if(mysqli_query($conn,$result))
        {
                            
            echo "successfull";
        }
    else
        {                        
                        
            echo "error"; 
        }
    ?>