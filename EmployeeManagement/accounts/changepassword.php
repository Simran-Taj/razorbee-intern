
 <?php
  session_start();
 $conn = mysqli_connect('localhost','root','','employeemanagement');
//  $uid = $_SESSION['uid'];
 
 $current = $_POST['currentpass2'];
 $newpass = $_POST['newpass2'];
 $confirm = $_POST['confirmpass2'];
 $query = 'SELECT empid FROM signup WHERE empid= "' . $_SESSION['uid'] . '"';

 $result = mysqli_query($conn,$query);
 $user_data = mysqli_fetch_array($result);
 $count_row = $result->num_rows;
//  echo('$count_row');
 if($count_row==1)
 {
     if( $newpass == $confirm )
         {
            echo "password created successfully";
     }else{
     
     echo "password must be same ";
     }
}else
    {
    
        echo "incorrect password"; 
    } 
   
?>