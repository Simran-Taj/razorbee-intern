
<?php
     session_start();
     $conn = mysqli_connect('localhost','root','','employeemanagement');    
     $uid = $_SESSION['uid'];
     $data = array();
     $query1 = "SELECT * FROM employeemaster1 WHERE empid='$uid'";
          $result = mysqli_query($conn,$query1);
          $rows = mysqli_num_rows($result);         
          if ($rows==1){         
          while($rs = mysqli_fetch_array($result)){ 
               $data = array("id"=>$rs["empid"],"empname"=>$rs["empname"],"email"=>$rs["email"],
               "designation"=>$rs["designation"],"mobile"=>$rs["mobile"],"alternatenumber"=>$rs["alternatenumber"],
               "doj"=>$rs["doj"],"dob"=>$rs["dob"],"qualification"=>$rs["qualification"],
               "gender"=>$rs["gender"],"presentaddress"=>$rs["presentaddress"],"permanentaddress"=>$rs["permanentaddress"],
               "maritalstatus"=>$rs["maritalstatus"],"department"=>$rs["department"]);
          }   
     }
     // $result1 = mysqli_query($conn,$data);
          // if($rs){
          //      echo "created";
          // }
          // else{
          //      echo "not created";
          // }
?>