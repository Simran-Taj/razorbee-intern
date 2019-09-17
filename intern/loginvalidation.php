<?php
    session_start();



   // unset($_COOKIE['empid']);
 //  echo "before".$_COOKIE['empid'];
   // echo "<br>";
        $con = mysqli_connect('localhost','root','','internproject');
        $email= $_POST['email'];
        $password = "test@123";//$_POST['password'];
        $isactive = 1;
        $query= "SELECT id, email FROM signup WHERE(email='$email')"    ;
        $res = mysqli_query($con,$query);
            if (mysqli_num_rows($res) == 0)
            {
                ///print emp id  ; $_COOKIE("id", id)
              //  echo "Does not exists";
            
            }else
            {

                $result = $con->query($query);
                $id =  $result->fetch_assoc()['id'];
               // echo "1";
               // echo "<br>";
                setcookie('empid',$id, time() + (86400 * 30), "/");
               echo $_COOKIE['empid'];
               // echo "<br>";
               // echo "2";
              //  echo "<br>";
               // echo "Login successfull";
                echo <<<HTML
                <a href="http://localhost/intern/employeedetails.php">Click here</a>
                HTML;
            }
?>