
 <?php
  session_start();
  // include_once '../class.user.php';
  include_once '..//config.php';
 $conn = mysqli_connect('localhost','root','','employeemanagement');
 $uid = $_SESSION['uid'];
 $client = $_POST['clientname1'];
 $mnumber = $_POST['mnumber1'];
 $descript = $_POST['descript1'];
 $query = "INSERT INTO salestracker (`name`, `mobile`, `description`,`status`,`followupby`)
     VALUES ('$client','$mnumber','$descript','new','$uid')";
 
 if(mysqli_query($conn,$query))
 {
     
    echo "profile created successfully";
 }
 else
 {
     echo "profile not created"; 
 } 
   
?>