
 <?php
 
    $conn = mysqli_connect('localhost','root','','employeemanagement');

    $empname1 = $_POST['empname2'];
    $empid1 = $_POST['empid2'];
    $email1 = $_POST['email2'];
    $designation1 = $_POST['designation2'];
    $mobile1 = $_POST['mobile2'];
    $alternatenumber1 = $_POST['alternatenumber2'];
    $doj1 = $_POST['doj2'];
    $dob1 = $_POST['dob2'];
    $qualification1 = $_POST['qualification2']
    $gender1 = $_POST['gender2'];
    $presentaddress1 = $_POST['presentaddress2'];
    $permanentaddress1 = $_POST['permanentaddress2'];
    $maritalstatus1 = $_POST['maritalstatus2'];
    $nationality1 = "indian";
    $department1 = $_POST['department2'];
    $adminprivileges1 = $_POST['adminprivileges2'];

    $query = "INSERT INTO employeemaster1 (`empname`, `empid`, `email`,`designation`,`mobile`, `alternatenumber`, `doj`,`dob`,'qualification,`gender`,
     `presentaddress`, `permanentaddress`,`maritalstatus`, `nationality`, `department`,`adminprivileges`)
         VALUES ('$empname1','$empid1','$email1','$designation1','$mobile1','$alternatenumber1','$doj1','$dob1','$qualification1',
         '$gender1','$presentaddress1','$permanentaddress1','$maritalstatus1','$nationality1','$department1','$adminprivileges1')";
     
     if(mysqli_query($conn,$query))
     {
         
         echo "Profile Created Successfully";
     }
     else
     {
     
         echo "Profile Not Created"; 
     } 
       
?>