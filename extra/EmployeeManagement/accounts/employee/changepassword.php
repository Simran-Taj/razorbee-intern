
 <?php
    session_start();
    $conn = mysqli_connect('localhost','root','','employeemanagement');
    $uid = $_SESSION['uid'];

    $current = $_POST["currentpass2"];
    $newpass = $_POST['newpass2'];
    $confirm = $_POST['confirmpass2'];
  
    $query = "SELECT pass FROM signup WHERE empid= '$uid'";

    $result = mysqli_query($conn,$query);
    
    $count_row = $result->num_rows;
    $message = "";
    //  echo('$count_row');
    if($count_row ==1)
    {
        $user_data = mysqli_fetch_array($result);
        if( $current ==$user_data['pass']){
            if($newpass ==$confirm){
                $query1 = "UPDATE `signup` SET `pass`='$newpass' WHERE empid= '$uid'";
                mysqli_query($conn,$query1);
                $message= "password updated successfully";
            }else{
                $message="new password and confirm password are not matching";
            }
        }else{
            $message ="current password doesn't match";
        }
        
    }else
    {
        $message ="error"; 
    } 
    echo "$message";
    
?>