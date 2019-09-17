<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style>

        .container
        {
            border:1px solid black;
            width:280px;  
            margin-top:70px;
            font-size:15px;
            height:769px;
            background-color:black;
            margin-left:-3px
        }
                    
        .container1
        {
            border:1px solid black;
            width:280px;  
            margin-top:70px;
            font-size:15px;
            height:769px;
            background-color:black;
            margin-left:500px;
        }

        img 
        {
            position: absolute;
            z-index: -2;
        }
        
        table, th, td 
        {
            border: 1px solid black;
            border-collapse: collapse;
        }
            
        th, td
        {
            padding: 10px;
        }
            
        .whole
        {
            width:560px;
            /* height:350px; */
            margin-left:-16px;
            margin-top:-20px; 
               }

        .a 
        {
            padding:30px; 
        }
            
        #model
        {
            background-color: white;
            width: 530px;
            margin-left:510px;
            /* margin-top:90px; */
        }
    </style>
</head>
<body>
    <div>
        <a href="http://localhost/intern/logo.php"><img src="http://razorbee.com/wp-content/uploads/2017/08/razorbee_logo.png" alt="RazorBee" class="img-logo-w2" style="width: 250px;  padding-top: 18px; padding-left:50px"></a>
    </div><br> 
        <div>
            <img src="https://i.ytimg.com/vi/-MKapbz0GIo/maxresdefault.jpg" style="width:1778px; height:979px">   
                <div  class="container">
                    <h3><a href="http://localhost/intern/employeeattendance.php"><span style="color:white">Attendance</span></a><h3>
                    <h3><a href=""><span style="color:white">Task Management</span></a></h3>
                    <h3><a href=""><span style="color:white">Leave Management</span></a></h3>
    
                     <!-- The Modal -->
                    <div class="modal" id="myModal">
                        <div class="modal-dialog">
                            <div class="modal-content">
                    
                                <!-- Modal Header -->
                                    <div class="modal-header">
                                        <h4 class="modal-title">Task</h4>
                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                    </div>
                        
                                <!-- Modal body -->
                                <div class="modal-body">
                                    <input type="text" class="form-control" id="taskdescription"  placeholder="Enter Task">
                                </div>
                        
                                <!-- Modal footer -->
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-primary" id="submitbutton">Submit</button>
                                    <button type="button" class="btn btn-danger" data-dismiss="modal" id="closebutton">Close</button>
                                </div>
                      
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <div class="container" style="background-color:white;border:1px solid white;width:560px; margin-top:-718px; margin-left:660px;">
            <div class="design"><br>
                <div class="model" id="filedisplay"> </div>
                    <div class="whole">
                        <table>
                            <tr>
                                <th style="width:20%">Date</th>
                                <th style="width:70%">Task</th>
                                <th>Add Task</th>
                            </tr>
                            <tr>
                                <?php
                                    $date = date("Y-m"). "-01";
                                    $end_date = date("Y-m-d");
                                    $task=0;
                                    while (strtotime($date) <= strtotime($end_date)) 
                                    {
                                        echo "<tr>" ."<td>" . "$date" ."</td>" ;
                                        $date = date ("Y-m-d", strtotime("+1 day", strtotime($date)));
                                        $task++; 
                                        echo "<td><input id=task$task>"."</td>";
                                        echo "<td>"."<button id=addtask$task type=button class=btn btn-primary btn-lg data-toggle=modal onclick=save('task$task') data-target=#myModal>Add task</button>"."</td>"."</tr>"."</tr>";
                                    }    
                                ?>
                            </tr>
                        </table>
                    </div>
            </div>
        </div>                                            
</body>
<script>
function save($taskid){
    // var text = $('#'+$taskid).attr("id");
    
    $(document).ready(
            function(){
                 $("#submitbutton").click(
                    function(a){
                       c = $("#taskdescription").val();
                       $(".modal").modal('hide');
                        $('#'+$taskid).val(c);
                        
                        a.stopImmediatePropagation();
                        $.ajax({type: "POST",
                        url: "taskvalidation.php",
                        data: "task="+c,
                        cache: false,
                             success: function(result){
                                //  console.log("hi");
                             //alert(result);
                             document.getElementById("taskdescription").value="";
                        }
                        });
                    }
                );
            }
        ) ;
}
</script>


</html>

