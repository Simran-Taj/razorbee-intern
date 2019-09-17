<?php
     $conn = mysqli_connect('localhost','root','','internproject');
     $date = date('Y-m-d');
     $task= $_POST['task'];
     echo $task;

     $query = "INSERT INTO taskmanagement (date,task) VALUES (now(),'$task')";
     if(mysqli_query($conn,$query))
        {
            echo "=inserted";
        }
        else
        {
            echo "not inserted";  
        }
?>