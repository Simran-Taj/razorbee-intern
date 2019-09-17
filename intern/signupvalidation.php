<?php

    echo $_COOKIE['empid'];
   
    $con = mysqli_connect('localhost','root','','internproject');
    $email = $_POST['email'];
    $sql="select email from employeemaster where (email='$email')";
    $isactive = 1;
    $password = $_POST['password'];
    $res = mysqli_query($con,$sql);
        if (mysqli_num_rows($res) == 0)
        {
            echo "Email-id is not valid";
        }else
        {
           $query= "select email from signup where (email='$email')";
           if($query == 1)
           {
                echo "Account already exists";
           }else
           {
                $sql = "INSERT INTO signup (email,password,isactive) VALUES ('$email','$password','$isactive')";
                $query = mysqli_query($con,$sql);
                echo"Account created successfully";
                echo <<<HTML
                <a href="http://localhost/intern/employeelogin.php">Click here to login</a>
                HTML;
           }
        }
  
?>