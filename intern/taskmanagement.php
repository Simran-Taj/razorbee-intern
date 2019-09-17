<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>

    <style>
    .container{
                        border:1px solid black;
                        width:280px;  
                        margin-top:70px;
                        font-size:15px;
                        height:769px;
                        background-color:black;
                        margin-left:-3px
                        
                    }
                    .container1{
                        border:1px solid black;
                        width:280px;  
                        margin-top:70px;
                        font-size:15px;
                        height:769px;
                        background-color:black;
                        margin-left:500px;
                        
                    }
                    img {
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
            /* border:5px solid black; */
            width:560px;
            height:350px;
           margin-left:-16px;
            margin-top:-73px;
            
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
            margin-top:90px;
        }
    </style>
</head>
<body>
        
            <div>
                    <a href="http://localhost/intern/logo.php"><img src="http://razorbee.com/wp-content/uploads/2017/08/razorbee_logo.png" alt="RazorBee" class="img-logo-w2" style="width: 250px;  padding-top: 18px; padding-left:50px"></a>
            </div><br> 
            <div>
                <img src="https://i.ytimg.com/vi/-MKapbz0GIo/maxresdefault.jpg" style="width:1778px; height:979px">   
                <div>
               
                    <div  class="container">
                        <h3><a href="http://localhost/intern/employeeattendance.php"><span style="color:white">Attendance</span></a><h3>
                        <h3><a href=""><span style="color:white">Task Management</span></a></h3>
                        <h3><a href=""><span style="color:white">Leave Management</span></a></h3>
 
    <div class="modal fade" id="myModal" role="dialog">
        <div class="modal-dialog modal-sm">
            <div class="modal-body" id="model">
                   
            <form action="taskvalidation.php" method="POST">
                            
                                <p style="font-size:20px; font-family:times new roman"><b>Task:</b></p>
                                <textarea rows="6" cols="60" name="task" id="task"></textarea><br><br>
                                <input style="margin-right:100px;" type="submit" value="Submit">
                                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                            </form>

                </div>
            </div>
        </div>
    </div>
   
    <div class="container" style="background-color:white;border:1px solid white;width:560px; margin-top:-769px; margin-left:660px; height:370px;">
<div class="design"><br>
<div class="modal-body" id="filedisplay">...</div>
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
                    while (strtotime($date) <= strtotime($end_date)) 
                    {
                        echo "<tr>" ."<td>" . "$date" ."</td>" ;
                        $date = date ("Y-m-d", strtotime("+1 day", strtotime($date))); 
                        echo "<td>"." "."</td>";
                        echo "<td>"."<button type=button class=btn btn-info btn-lg data-toggle=modal onclick=save() data-target=#myModal>add task</button>"."</td>"."</tr>"."</tr>";
                    }    
                ?>
             </tr>
         </table>
     </div>
     </div>
    </div>
    </div>
</body>
<script>
function save(){
    var forms = $("#forms");
           forms.on('submit',function (e) {
               var formData = new FormData(this);
               e.preventDefault();
               
               $.ajax({
           url:'taskvalidation.php',
           type:'POST',
           data:formData,
           contentType: false,
           cache: false,
           processData:false,
        
       });
   })
}
</script>
</html>

