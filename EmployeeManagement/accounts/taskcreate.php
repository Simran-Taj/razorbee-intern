<?php
     $conn = mysqli_connect('localhost','root','','employeemanagement');
     $assignee= $_POST['assignee'];
     $description= $_POST['description'];
     $status_id="open";
     echo $status_id;

     $query = "INSERT INTO newtask (assignee,description,status_id) VALUES ('$assignee','$description','open')";
     if(mysqli_query($conn,$query))
        {
            echo "inserted";
        }
        else
        {
            echo "not inserted";  
        }
?>