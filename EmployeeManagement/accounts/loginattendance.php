
 <?php
  session_start();
    include_once '../class.user.php';
    $conn = mysqli_connect('localhost','root','','employeemanagement');
    $uid = $_SESSION['uid'];
    $type = 'login';
    // $var2="";
    $date = date('Y-m-d ');
    // $date1 = date('h:m:s');
    // $query1 = 'SELECT * FROM tblattendance WHERE empid= "' . $_SESSION['uid'] . '"';
    $query = "INSERT INTO tblattendance (empid,date,time,type) VALUES ('$uid','$date',now(),'$type')";
    if(mysqli_query($conn,$query))
    {
        
        // print "login successfull";
    }
    else
    {
     
        // echo "error while login"; 
    }
       
?>