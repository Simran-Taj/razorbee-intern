<!DOCTYPE html>
<html>
    <head>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <meta charset="utf-8">
            <meta name="viewport" content="width=device-width, initial-scale=1">  
            <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
            
        <title>loginpage</title>
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

                .modal {
                    display: none;
                    position: fixed;
                    z-index: 1; 
                    padding-top: 100px; 
                    padding-left: 400px;
                    top: 0; 
                    width: 1200px; 
                    height:  100%sssss;
                    overflow: auto; 
                   
                }

                   
                .modal-content {
                    background-color: #fefefe;
                    margin: auto;
                    padding: 20px;
                    border: 1px solid #888;
                    width: 80%;
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
        </style>
    </head>
    <body>
        <div>
                <a href="http://localhost/intern/logo.php"><img src="http://razorbee.com/wp-content/uploads/2017/08/razorbee_logo.png" alt="RazorBee" class="img-logo-w2" style="width: 250px;  padding-top: 18px; padding-left:50px"></a>
            <div class="logindesign">
                <!-- <a href="http://localhost/intern/logo.php" style="padding-right:50px"><img src="http://icons.iconarchive.com/icons/graphicloads/100-flat/256/home-icon.png" style="width:26px; margin-top:4px"><span style="margin-left:30px; padding-top:20px">Home</span></a> 
                <a href="http://localhost/intern/signup.php"><img src="https://img.icons8.com/nolan/64/000000/add-user-male.png"  style="width:29px; margin-top:5px"><span style="margin-left:30px;">SignUp</span></a> -->
            </div>
        </div><br> 
        <div>
             <img src="https://i.ytimg.com/vi/-MKapbz0GIo/maxresdefault.jpg" style="width:1778px; height:769px">   
                <div  class="container" style="background-color:white">
                    <div class="design"><br>
                            <span style="margin-left: 150px; font-size:35px">Login</span><br><br>
                            <p>Please fill in your credentials to login.</p>
                        <form id="formdata" class="form-inline" action="loginvalidation.php" method="POST">
                            <label>Email</label><span style="color:red" >*</span><br> <input style="width:400px" id="username" class="form-control" placeholder="Enter your email" type="text" name="email" required>
                                <br/><br>
                                <p id="email" ></p>
                            <label>Password</label><span style="color:red" >*</span><br> <input id="password1" style="width:400px" class="form-control" type="password" name="password" placeholder="Enter password" required>
                                <br/><br>
                                <p id="password" ></p>
                            <span></span>
                            <a href="http://localhost/intern/employeedetails.php"><button style="width:100px" class="btn btn-success">Login</button></a><br><br>
                            <p>Already have an account? <button id="myBtn" style="background-color:white; color:purple">SignUp!</button><br><br>
                        </form>
                    </div>
                </div>
        </div>
        <!-- signup -->
        <div id="myModal" class="modal" style="margin-top:-11px; margin-left:90px">
            <div class="modal-content">
                <span class="close">&times;</span>
                    <div  class="container" style="background-color:white; border:1px solid white">
                        <div class="design" style="margin-top:-50px"><br>
                            <span style="margin-left: 120px; font-size:35px">Sign Up</span><br><br>
                                <p>Please fill this form to create an account.</p>
                                    <form id="formdata" class="form-inline" action="signupvalidation.php" method="POST">
                                        <label>Email</label><span style="color:red" >*</span><br> <input style="width:400px" id="username" class="form-control" placeholder="Enter your email"  name="email" required>
                                            <br/><br>
                                            <p id="email" ></p>
                                            <label>Password</label><span style="color:red" >*</span><br> <input id="password1" style="width:400px" class="form-control" type="password" name="password" placeholder="Enter password" required>
                                                <br/><br>
                                                <p id="password" ></p>
                                            <label>Comfirm Password</label><span style="color:red";>*</span><br><input style="width:400px" class="form-control" onkeyup ="matchpass()" placeholder="Confirm password" id="password2"  type="password" name="confirm-Password"  required><br>
                                                <br><p style="color:red" id="confirm-password1" ></P>
                                            <a href="http://localhost/intern/employeelogin.php"><button style="width:100px" class="btn btn-primary">Submit</button></a><br><br>
                                            <!-- <button style="width:100px" class="btn">Reset</button><br><br> -->
                                            <p>Alredy have an account? <span style="color:blue"><a href="http://localhost/intern/employeelogin.php">Login here.</a></span></p><br>
                                    </form>
                        </div>
                    </div>
            </div>
        </div>
        <!-- javascript -->
        <script>
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
        </script>
    </body>
</html>