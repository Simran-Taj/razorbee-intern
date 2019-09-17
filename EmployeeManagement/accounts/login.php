<?php
    session_start();
    include_once '../class.user.php';
    $user = new User();

    if (isset($_REQUEST['submit'])) {
        extract($_REQUEST);
        $login = $user->check_login($emailusername, $password);
        echo "$login";
        $IsAdmin= $user->IsAdmin($emailusername,$password);

        if ($IsAdmin) {
        //    ($user['status'] == '0');// check the value of the 'status' in the db
                //go to admin area
                header("Location: ../admin/admin.php");
        }
        else {
            if($login){
                header("Location: ../home.php");
            }
            else{
                // Registration Failed
                // echo "<span id = 'loginerrormessage'>Invalid username or password</span>";
                echo '<i style="margin-top:160px;">Invalid username or password</i>';
               // echo 'Wrong username or password';
            }

        }
    }

    
?>

<!DOCTYPE html>
<html>
    <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <meta charset="utf-8">
            <meta name="viewport" content ="width=device-width,initial-scale=1,user-scalable=yes" /> 
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            
            
        <title>loginpage</title>
        <script type="text/javascript" language="javascript">

            function submitlogin() {
                
                var form = document.login;
                if(form.username.value == ""){

                    alert( "Enter email or username." );
                    return false;
                }
                else if(form.password.value == ""){
                    alert( "Enter password." );
                    return false;
                }
                return true;
            }

            // function sign(){
                // $(document).ready(
                //     function(){
                        
                //         $("#submitbutton").click(function(e){
                //            c = $("#emailidsignup").val();
                //             alert(c);
                //             //$(".modal").modal('hide');
                //             $.ajax({type: "POST",url: "../accounts/signup.php",data: "email="+c,cache: false,
                //              success: function(result){
                //              //alert(result);
                //              }
                //             });
                //             }
                //         );
                    
                //     }
                // );
            // }
                //  var form = document.signup;
                // if(form.emailidsignup.value == ""){
                //     alert( "Enter name." );
                //     return false;
                // }
                // else if(form.passwordsignup.value == ""){
                //     alert( "Enter username." );
                //     return false;
                // }
                // else if(form.confirmpasswordsignup.value == ""){
                //     alert( "Enter password." );
                //     return false;
                // }
                
            



    </script>
        <style>
                .container {
                    border:1px solid black;
                    width:480px;  
                    margin-top:70px;
                    font-size:15px;
                    /* background-color:rgb(215, 215, 215); */
                }
                .design{
                    margin-left:25px;
                    
                }
                
                img {
                    position: absolute;
                    z-index: -2;
                }

                .logindesign{
                    float: right;
                    color: white;
                    font-size: 25px;
                    position: relative;
                    padding-right: 50px;
                    padding-top:40px;
                    }

                .modal-content {
                    background-color: #fefefe;
                    margin: auto;
                    padding: 20px;
                    border: 1px solid #888;
                    width: 80%;
                    margin-top:90px;
                }

                    
                .close {
                    color: #aaaaaa;
                    float: right;
                    font-size: 28px;
                    font-weight: bold;
                }

                .close:hover,
                .close:focus{
                    color: #000;
                    text-decoration: none;
                    cursor: pointer;
                }
                i{
                    margin-left:680px!important;
                 
                }
        </style>
    </head>
    <body>
        <div>
                <img src="http://razorbee.com/wp-content/uploads/2017/08/razorbee_logo.png" alt="RazorBee" class="img-logo-w2" style="width: 250px;  padding-top: 18px; padding-left:50px"></a>
            
        </div><br> 
        <div>
       
            <img src="https://i.ytimg.com/vi/-MKapbz0GIo/maxresdefault.jpg" style="width:1778px; height:769px">   
               
            <form action="" method="post" name="login">
                <div  class="container" style="background-color:white">
                    <div class="design"><br>
                            <span style="margin-left: 150px; font-size:35px">Login</span><br><br>
                            <form id="formdata" class="form-inline" action="home.php" method="POST">
                                <span id='loginerrormessage'></span>
                                <label>Email</label><span style="color:red" >*</span><br> <input style="width:400px" name="emailusername" class="form-control" placeholder="Enter your email" type="text" required>
                                    <br/><br>
                                    <p id="email" ></p>
                                <label>Password</label><span style="color:red" >*</span><br> <input  style="width:400px" name="password" class="form-control" type="password" placeholder="Enter password" required>
                                    <br/><br>
                                <input onclick="return(submitlogin());" style="width:100px" class="btn btn-success" name="submit" type="submit" value="Login"><br><br>
                                
                                <p>Don't have an account? <button  data-target="#signUpModal" id="myBtn" type="button" class="btn btn-primary" data-toggle="modal" >SignUp!</button><br><br>
                            </form> 
                    </div>
                </div>
            </form>
        </div>
        <!-- signup -->
        <div class="modal" id="signUpModal" name="signUpModal">
            <div class="modal-dialog">
                <div class="modal-content">
                    <form action="signup.php" method="post" name="signup">
                      <!-- Modal Header -->
                      <div class="modal-header">
                        <h4 class="modal-title">SignUp</h4>
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                      </div>
                      
                      <!-- Modal body -->
                      <div class="modal-body">
                            <input id = "emailidsignup" type="text" class="form-control" name="emailidsignup"  placeholder="Enter Email ID"><br>
                            <input id = "passwordsignup" type="password" class="form-control" name="passwordsignup"  placeholder="Enter password"><br>
                            <input  type="password" class="form-control" name="confirmpasswordsignup"  placeholder="Re-enter password"><br>
                      </div>
                      
                      <!-- Modal footer -->
                      <div class="modal-footer">
                            <button   class="btn btn-primary" id="submitbutton">Submit</button>
                            <button type="button" class="btn btn-danger" data-dismiss="modal" id="closebutton">Close</button>
                      </div>
                    </form>
                </div>
            </div>
        </div>
                
        <!-- javascript -->
        <!-- <script>
                // Get the modal
                var modal = document.getElementById("myModal");

                // Get the button that opens the modal
                var btn = document.getElementById("myBtn");

                // Get the <span> element that closes the modal
                var span = document.getElementsByClassName("close")[0];

                // When the user clicks the button, open the modal 
                btn.onclick = function() {
                modal.style.display = "block";
                }

                // When the user clicks on <span> (x), close the modal
                span.onclick = function() {
                modal.style.display = "none";
                }

                // When the user clicks anywhere outside of the modal, close it
                window.onclick = function(event) {
                if (event.target == modal) {
                    modal.style.display = "none";
                }
                }
        </script> -->
    </body>
</html>