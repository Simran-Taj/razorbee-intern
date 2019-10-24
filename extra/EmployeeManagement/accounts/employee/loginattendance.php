
 <?php
  session_start();
    // include_once '../class.user.php';
    include_once '..//config.php';
    $conn = mysqli_connect('localhost','root','','employeemanagement');
    $uid = $_SESSION['uid'];
    $type = 'login';
    // $var2="";
    $date = date('Y-m-d ');
    // $date1 = date('h:m:s');
     $query1 = 'SELECT * FROM tblattendance WHERE DATE(date)=CURDATE() and empid= "' . $_SESSION['uid'] . '" and type="login"';

     $result = mysqli_query($conn,$query1);
     $user_data = mysqli_fetch_array($result);
     $count_row = $result->num_rows;
        if($count_row == 0){
            $query = "INSERT INTO tblattendance (empid,date,time,type) VALUES ('$uid','$date',now(),'$type')";
                if(mysqli_query($conn,$query))
                {
                    
                    echo "login successfull";
                }
                else
                {
                
                    echo "error while login"; 
                }
        }else{
             echo "already logged in";      
        }


    
       
?>