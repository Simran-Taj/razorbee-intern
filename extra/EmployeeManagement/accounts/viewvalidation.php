<?php
     $conn = mysqli_connect('localhost','root','','employeemanagement');
// $sql="SELECT empname,empid FROM employeemaster1 order by name"; 
if($stmt = $conn->query("SELECT * from employeemaster1")){
$name='select';
    echo "<select>";
    while ($row = $stmt->fetch_assoc()) {
     
    echo "<option>$row[empname]</option>";
    }
    echo "</select>";
    }else{
    echo $conn->error;
    }
    ?>
    