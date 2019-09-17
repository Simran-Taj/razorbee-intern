
 <?php
  session_start();
    include_once 'class.user.php';
    $conn = mysqli_connect('localhost','root','','employeemanagement');
    $uid = $_SESSION['uid'];
    $type = 'login';
    $var2="";
    $date = date('Y-m-d ');
    $date1 = date('h:m:s');
    $query = "INSERT INTO tblattendance (empid,date,time,type) VALUES ('$uid','$date',now(),'$type')";
    if(mysqli_query($conn,$query))
    {
        var2 = "s";
        //print "login successfull";
    }
    else
    {
        var2 = "f";
        echo "error while login"; 
    }
       
?>