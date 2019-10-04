<?php
 session_start();
 // include_once '../class.user.php';
 include_once '..//config.php';
 $conn = mysqli_connect('localhost','root','','employeemanagement');
 
$uid = $_SESSION['uid'];

 $data = array();

$query1 = "SELECT * FROM employeemaster1 WHERE empid='$uid' ";
        $result = mysqli_query($conn,$query1);
        $rows = mysqli_num_rows($result);
      
        if ($rows==1){
          
           while($rs = mysqli_fetch_array($result)){ 

                $data = array("id"=>$rs["empid"],"empname"=>$rs["empname"],"email"=>$rs["email"],"designation"=>$rs["designation"],"mobile"=>$rs["mobile"],"alternatenumber"=>$rs["alternatenumber"],
                "doj"=>$rs["doj"],"dob"=>$rs["dob"],"qualification"=>$rs["qualification"],"gender"=>$rs["gender"],"presentaddress"=>$rs["presentaddress"],"permanentaddress"=>$rs["permanentaddress"],"maritalstatus"=>$rs["maritalstatus"],
                "department"=>$rs["department"],"adminprivileges"=>$rs["adminprivileges"]);
            }
        }
       echo json_encode($data);

    //   $query = "UPDATE employeemaster1  empname='$empname' , empid = '$empid'";

    //     $result = mysqli_query($query);
    //      if($result==false){
    //         die(mysql_error());
    //     }
    //       header("Location: home1.php");
    //     return mysql_affected_rows();

    //     //echo'<pre>';print_r($result);exit();
        
    //     exit();
    ?>