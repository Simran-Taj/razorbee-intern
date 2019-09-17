<?php
    $con = mysqli_connect('localhost','root','','internproject');
    $sql = "SELECT empid,date,type FROM tblattendance";
    $result = $con->query($sql);
    
    if ($result->num_rows > 0) {
        
        while($row = $result->fetch_assoc()) {
    
            // echo " date: ". $row["date"] ."     ,        "."Attendance: ".$row["type"];
            echo "<tr><td>". $row["empid"] ."</td><td>". $row["date"] ."</td><td>". $row["type"] ."</td></tr>";
            // echo "<br>";
        }echo "</table>";
    } else {
        echo "0 result";
    }
    $conn-> close();  
?>