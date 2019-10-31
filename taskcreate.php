<?php
     $conn = mysqli_connect('localhost','root','','employeemanagement');
     $assignee= $_POST['assignee'];
     $description= $_POST['description'];
     $status="open";
     echo $status;

     $query = "INSERT INTO newtask (assignee,description,status) VALUES ('$assignee','$description','open')";
     if(mysqli_query($conn,$query))
        {
            echo "inserted";
        }
        else
        {
            echo "not inserted";  
        }
?>