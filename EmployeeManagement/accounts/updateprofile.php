<?php
  session_start();
 $conn = mysqli_connect('localhost','root','','employeemanagement');

 $empname = "sim";
 $uid = $_SESSION['uid'];
//  $email = $_POST['email1'];
//  $designation = $_POST['designation2'];
//  $mobile = $_POST['mobile2'];
//  $alternatenumber = $_POST['alternatenumber1'];
//  $doj = $_POST['doj1'];
//  $dob = $_POST['dob1'];
//  $qualification = $_POST['qualification1']
//  $gender = $_POST['gender1'];
//  $presentaddress = $_POST['presentaddress1'];
//  $permanentaddress = $_POST['permanentaddress1'];
//  $maritalstatus = $_POST['maritalstatus1'];
//  $nationality = "indian";
//  $department = $_POST['department1'];
//  $adminprivileges = $_POST['adminprivileges1'];

 $query = "UPDATE 'employeemaster1' SET  `empname`='$empname' WHERE empid='$uid'";
// --  , `email`,`designation`,`mobile`, `alternatenumber`, `doj`,`dob`,'qualification,`gender`,
// --   `presentaddress`, `permanentaddress`,`maritalstatus`, `nationality`, `department`,`adminprivileges`
// --       ,,'$email1','$designation1','$mobile1','$alternatenumber1','$doj1','$dob1','$qualification1',
// --       '$gender1','$presentaddress1','$permanentaddress1','$maritalstatus1','$nationality1','$department1','$adminprivileges1')";
  
    if(mysqli_query($conn,$query))
    {
        echo "Profile updated Successfully";
    }
    else
    {
        echo "Profile Not updated"; 
    } 
        
?>