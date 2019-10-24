<?php
    session_start();
    include_once '..//config.php';
    $conn = mysqli_connect('localhost','root','','employeemanagement');
    $uid = $_SESSION['uid'];
 
    $data = array();
    $query = "SELECT * FROM employeemaster1 WHERE empid='$uid'";
    
    $query1 = mysqli_query($conn,$query);
    while ($row = mysqli_fetch_array($query1)) {
    echo "{$row['empname']}";
    echo "{$row['empid']}";
    $data = array("id"=>$rs["empid"]);
    // echo "{$row['email']}";
    // echo "{$row['designation']}";
    // echo "{$row['mobile']}";
    // echo "{$row['alternatenumber']}";
    // echo "{$row['doj']}";
    // echo "{$row['dob']}";
    // echo "{$row['gender']}";
    // echo "{$row['presentaddress']}";
    // echo "<b><a href='home1.php?id={$row['permanentaddress1']}'>{$row['permanentaddress']}</a></b>,<br>";
    // echo "<b><a href='home1.php?id={$row['maritalstatus']}'>{$row['maritalstatus']}</a></b>,<br>";
    // echo "<b><a href='home1.php?id={$row['nationality']}'>{$row['nationality']}</a></b>,<br>";
    // echo "<b><a href='home1.php?id={$row['department']}'>{$row['department']}</a></b>,<br>";
    // echo "<b><a href='home1.php?id={$row['adminprivilege']}'>{$row['adminprivilege']}</a></b>,<br>";
     }
     echo json_encode($data);
     
    //  $query = "UPDATE employeemaster1  empname='$empname' , empid = '$empid'";

    //  $result = mysqli_query($query);
    //   if($result==false){
    //      die(mysqli_error());
    //  }
    //    header("Location: home1.php");
    //  return mysqli_affected_rows();

    //  //echo'<pre>';print_r($result);exit();
     
    //  exit();
?>