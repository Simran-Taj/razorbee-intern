<?php
    
    $conn = mysqli_connect('localhost','root','','internproject');
    $empid = 2;
    $type = 'login';

    $date = date('Y-m-d ');
    $date1 = date('h:m:s');
    $query = "INSERT INTO tblattendance (empid,date,time,type) VALUES ('$empid','$date',now(),'$type')";
    if(mysqli_query($conn,$query)){
        echo "inserted";
    }else{
        echo "not inserted"; 
    }
       
?>