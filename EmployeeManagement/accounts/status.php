<?php
$connect = mysqli_connect("localhost", "root", "", "employeemanagement"); 
  $id=$_REQUEST['id'];
$status_id  = "In-Progress";


$upqrs = "UPDATE newtask set status_id ='".$status_id."' where id='".$id."'"; 
$strups = mysqli_query($connect,$upqrs);
  if($strups==true){
	$message = '<div class="alert alert-success" role="alert">Success</div>';
	header('Location:home1.php');
 	}else { echo "fail" ;}
 

 ?>