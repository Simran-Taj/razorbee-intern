
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>RazorBee Online Solutions</title>

    <!-- Bootstrap CSS CDN -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="style.css">

    <!-- Font Awesome JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
</head>

<body>
    <div class="wrapper">
        <!-- Sidebar  -->
        <nav id="sidebar">
            
            <ul class="list-unstyled components">
                <div class="sidebar-header" style="margin-top:-20px">
                    <!-- <h3>RazorBee Online Solutions</h3> -->
                    <a href="http://localhost/intern/logo.php"><img src="http://razorbee.com/wp-content/uploads/2017/08/razorbee_logo.png" alt="RazorBee" class="img-logo-w2" style="width: 190px;  margin-top: -10px;font-color:white "></a>

                </div>
                <li class="active">
                    <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Attendance</a>
                    <ul class="collapse list-unstyled" id="homeSubmenu">
                        <li>
                            <a href="#">Login</a>
                        </li>
                        <li>
                            <a href="#">Logout</a>
                        </li>
                        <li>
                            <a href="#">View Attendance</a>

                            
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="#" id="timesheet">Timesheet</a>
                </li>
                <li>
                    <a href="#leaveSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Leave Management</a>
                    <ul class="collapse list-unstyled" id="leaveSubmenu">
                        <li>
                            <a href="#">Apply</a>
                        </li>
                        <li>
                            <a href="#">Status</a>
                        </li>   
                        <li>
                            <a href="#">View</a>
                        </li>
                    </ul>
                </li>

                <li>
                    <a href="#projectSubmenu" data-toggle="collapse" aria-expanded="false" class="dropdown-toggle">Project Management</a>
                    <ul class="collapse list-unstyled" id="projectSubmenu">
                        <li>
                            <a href="#" id="viewproject">View Project</a>
                        </li>
                        <li>
                            <a href="#" id="createproject">Create Project</a>
                        </li>   
                        
                    </ul>
                </li>
                
            </ul>

           
        </nav>

        <!-- Page Content  -->
        <div id="content">

            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid">

                    <!-- <button type="button" id="sidebarCollapse" class="btn btn-info">
                        <i class="fas fa-align-left"></i>
                        <span>Toggle Sidebar</span>
                    </button> -->
                    <button class="btn btn-dark d-inline-block d-lg-none ml-auto" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <i class="fas fa-align-justify"></i>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="nav navbar-nav ml-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">Hello</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Logout</a>
                            </li>
                            
                        </ul>
                    </div>
                </div>
            </nav>

            <div>
                
                <form class="form-horizontal" id="formCreate" method="POST" action="#" style="display: none;">
                <h2>Create New Project</h1> <br>   
                <b>Project Name:</b> <input class="form-control" type="text" name="ProjectName" id="ProjectName" placeholder ="Enter project name">
                    <br><br>
                    <b>Client Name    : </b><input class="form-control" type="text" name="ClientName" id = "ClientName" placeholder ="Enter client name">
                    <br><br>
                    <b>Description:</b>
                    <br>
                    <textarea class="form-control" name="description" id = "description" placeholder ="Enter Description"></textarea>
                    <br><br>
                    <button type="submit" class="btn btn-primary" type="button" id="submitProject">Submit</button>
                    <p id="tagcreate" ></p>
                </form>

            </div>
            <form  class="form-horizontal" id="ProjectDetails" style="display:none;">
                <h1 id="error"></h1>
                <h1 id="title"></h1><hr>
                <h2 id="client"></h2><hr>
                <h2 id="description"></h2><hr>
                <h2 id = "status"></h2><hr>
                <button id="backToProject" type=button class='btn btn-primary'>Back To View Projects</button>
                <hr><h3>Comments</h3> <button id="addComments" type=button class='btn btn-primary'>Add Comments</button><hr>
                <textarea id="commentarea" rows="2" cols="100" placeholder = "Enter comments"></textarea>
                <div id="Discussions">

                    <?php
                        // include("C:/xampp/htdocs/employee1/config.php");
                        $conn = mysqli_connect('localhost','root','','employeemanagement');
                        $result = mysqli_query($conn,"SELECT * FROM `projectcomments` WHERE projectid=1");
                        $detailsCnt = 0;
                        while($test = mysqli_fetch_array($result))
                        {
                            
                            echo"<p>".$test['projectid']."</p>";
                            echo"<p>".$test['empname']."</p>";
                            echo"<p>".$test['comment']."</p><hr>";
                            
                        }
                    ?>

                </div>
            </form>
            <div class="container" id="projecttable" style="display: none;">
 
                <table class="table table-striped table-bordered table-hover table-condensed">
                <thead style="background-color: #6d7fcc;">
                    <tr>
                        <th>ID</th>
                        <th>Project Name</th>
                        <th>Client</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                <tr>
                <?php
$conn = mysqli_connect('localhost','root','','employeemanagement');
                    $result = mysqli_query($conn,"SELECT * FROM projectmaster");
                    $detailsCnt = 0;
                    while($test = mysqli_fetch_array($result))
                    {
                        $id = $test['id']; 
                        echo"<td>".$test['id']."</td>";
                        echo"<td>".$test['projectname']."</td>";
                        echo"<td>".$test['clientname']."</td>";
                        echo"<td>".$test['description']."</td>"; 
                        echo"<td>".$test['projectstatus']."</td>"; 
                        $detailsCnt++;
                        echo "<td><button type=button class='btn btn-primary' id=details$detailsCnt onclick=showprojectdetails('details$detailsCnt')>Details</button></td>";
                        echo "</tr>";
                    }
                
                ?>
                </table>
            
            </div>

           


        </div>
    </div>

   <!-- Popper.JS -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/js/bootstrap.min.js" integrity="sha384-uefMccjFJAIv6A+rW+L4AHf99KvxDjWSu1z9VI8SKNVmz4sk7buKt/6v9KI65qnm" crossorigin="anonymous"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            

        });

        $(document).ready(
            function() {

                $('#sidebarCollapse').on('click', function () {
                $('#sidebar').toggleClass('active');
            });
            $('#viewproject').on('click',function(){
                $('#projecttable').show();
                $('#formCreate').hide();
                $('#ProjectDetails').hide();
            })
            $('#createproject').on('click',function(){
                $('#projecttable').hide();
                $('#formCreate').show();
                $('#ProjectDetails').hide();
            })
            $('#backToProject').on('click',function(){
                $('#ProjectDetails').hide();
                $('#viewproject').click();
            })
           

                        
           $("#submitProject").click(function(){

                
                var name = $("#ProjectName").val();
                var client = $("#ClientName").val();
                var description = $("#description").val();
                var func = "yes";
                // Returns successful data submission message when the entered information is stored in database.
                var dataString = 'name1='+ name + '&client1='+ client + '&description1='+ description+ '&Func_createProject='+ func;
                //alert(dataString);
                if(name=='')
                // if(name==''||email==''||password=='')
                {
                    alert("Please Fill All Fields");
                }
                else
                {
                    alert("hi");
                    // AJAX Code To Submit Form.
                    $.ajax({
                        type: "POST",
                        url:"http://localhost/employee1/project/projectview.php",
                        data: dataString,
                        cache: false,
                        success: function(result){
                            
                            if(result==1){
                                $("#tagcreate").text("Project created successfully").css("color","green");
                            }else{
                                $("#tagcreate").text("Failed to create project").css("color","red");
                            }
                        }
                    });
                    
                }
                return false;
            });
           
        }
        
        );

        function showprojectdetails($detailsid){
            var func = "yes";
            var dataString = 'id1='+ $detailsid.replace("details","")+ '&Func_projectview='+ func;
               
            $.ajax({
                type: "POST",
                url:"http://localhost/employee1/project/projectview.php",
                data: dataString,
                dataType:"JSON",    
                cache: false,
                success: function(result){
                   $('#ProjectDetails').toggle();
                    $('#projecttable').hide();
                    $('#title').text(result.projectname);
                    $('#client').text(result.clientname);
                    $('#description').text(result.description);
                    $('#status').text(result.status);
                   
                },
                error:function(){
                    $('#error').text("There was an error. Try again please!");
                }
            });
           
        }
    </script>
</body>

</html>