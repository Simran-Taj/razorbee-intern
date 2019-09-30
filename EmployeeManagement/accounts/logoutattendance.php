
 <?php
  session_start();
    // include_once '../class.user.php';
    include_once '..//config.php';
    $conn = mysqli_connect('localhost','root','','employeemanagement');
    $uid = $_SESSION['uid'];
    $type = 'logout';
    // $var2="";
    $date = date('Y-m-d ');
    // $date1 = date('h:m:s');
    //  $query1 = 'SELECT * FROM tblattendance WHERE empid= "' . $_SESSION['uid'] . '" and  date(now()) and type="logout"'; //date and type should be
    $query1 = 'SELECT * FROM tblattendance WHERE DATE(date)=CURDATE() and empid= "' . $_SESSION['uid'] . '" and type="login"';
     $result = mysqli_query($conn,$query1);
     $user_data = mysqli_fetch_array($result);
     $count_row = $result->num_rows;
        if($count_row == 1){
            $query2 = 'SELECT * FROM tblattendance WHERE DATE(date)=CURDATE() and empid= "' . $_SESSION['uid'] . '" and type="logout"';
            $result2 = mysqli_query($conn,$query2);
            $user_data2 = mysqli_fetch_array($result2);
            $count_row2 = $result2->num_rows;
                if($count_row2 == 0){
                    $query = "INSERT INTO tblattendance (empid,date,time,type) VALUES ('$uid','$date',now(),'$type')";
                        if(mysqli_query($conn,$query))
                        {
                            
                            echo "logout successfull";
                        }
                        else
                        {
                        
                            echo "error while logout"; 
                        }
                }else{
                    echo"already logged out";
                }
        }else{
             echo "login to logout" ;      
        }


    
       
?>