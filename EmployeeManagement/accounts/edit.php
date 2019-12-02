
<?php
//session_start();
//include_once '../class.user.php';
//$user = new User(); 
//$uid = $_SESSION['uid'];
//if (!$user->get_session()){
    //header("location:accounts/login.php");
//}
//if (isset($_GET['q'])){
  //  $user->user_logout();
  //  header("location:accounts/login.php");
//} 

// $user = new User(); 
// $uid = $_SESSION['uid'];
// if (!$user->get_session()){
// header("location:login.php");
// }
// if (isset($_GET['q'])){
// $user->user_logout();
// header("location:login.php");
// }
// ?>  
<?php
ob_start();
include_once 'home1.php';
$connect = mysqli_connect("localhost", "root", "", "employeemanagement"); 
$id = $_REQUEST['id']; // send from link so get variable by REQUEST method
//echo $eid;
$sel = "select * from newtask where id='".$id."'";
$qr = mysqli_query($connect,$sel);

$result1 = mysqli_query($connect, ("SELECT * FROM `statusmaster`"));
?>
<div id="formEdit" style="">
        <h2 style="color:rgb(153, 47, 153);margin-top:-130px;margin-left:450px;">Edit Task</h1> <br>  
        <div class="container"  style="border-radius: 25px;border:1px solid black;padding:30px 0 20px 20px;margin-bottom:30px;height:800px;">
        <form name="form1" method="post" enctype="multipart/form-data" autocomplete="off">
        
            <?php while($arr = mysqli_fetch_array($qr)) { ?>
        <input style="margin:0px 10px 20px 0px;display:none;" type="text" value="<?php echo  $arr[0]; ?>" readonly="readonly" name="id"/>
        <b>Name</b>: <span style="margin:0px 10px 20px 0px;"> <?php echo  $arr[1]; ?></span><br/><br/>
        <b>Task</b>: <span style="margin:0px 10px 20px 0px;"><?php echo  $arr[2]; ?></span><br/><br/>
        <b>Status</b>: <select name="status">
        <option value="" placeholder="<?php echo  $arr[3]; ?>" selected ><?php echo  $arr[3]; ?></option>
                <?php while($row = mysqli_fetch_array($result1)):;?>
                    <option name="status" value="<?php echo $row[1];?>"><?php echo $row[1];?></option>
                <?php endwhile;?>
        </select><br><br>
        <b>Comments:</b> <br/><br/>   
        <textarea rows="4" cols="150" value="<?php echo  $arr[4]; ?>"  name="comments" /></textarea><br><br>
        <input type="submit" class="btn btn-primary" value="Update" name="edit">
        <button type="reset" class="btn btn-danger waves-effect waves-light" onclick="window.history.back();">Cancel</button><br/>
        <div id="scroll" style="margin-top:10px;width:80%!important;height:200px;overflow:scroll;border:1px solid black;">
<?php }
$connect = mysqli_connect("localhost", "root", "", "employeemanagement"); 
$task_id=" ";
$comments  = " ";
$status  = " ";
if (isset($_POST['edit'])) {
    if (empty($_POST["status"]) && empty($_POST["comments"])) {
        echo "<p style=color:red>Please enter the values</p>";
    }
    elseif (!empty($_POST["status"]) && empty($_POST["comments"])){
        $status = $_POST['status'];
        $upqrs = "UPDATE newtask set status='".$status."' where id='".$id."'";
        $strups = mysqli_query($connect,$upqrs);
        
    }
     elseif (!empty($_POST["status"]) && !empty($_POST['comments'])){
            $task_id=$_POST['id'];
            $comments  = $_POST['comments'];
            $status  = $_POST['status'];
            // $date = date('m/d/Y h:i:s', time());
            $upqr = "INSERT INTO taskcomment (comments,task_id,status,date) VALUES ('$comments','$task_id','$status',now())";
            $strup = mysqli_query($connect,$upqr);
          
     }
     elseif (empty($_POST["status"]) && !empty($_POST['comments'])){
        $task_id=$_POST['id'];
        $comments  = $_POST['comments'];
 
        // $date = date('m/d/Y h:i:s', time());
        $upqer = "INSERT INTO taskcomment (comments,task_id,date) VALUES ('$comments','$task_id',now())";
        $struper = mysqli_query($connect,$upqer);
 }
 
} 

$task_id=$_GET['id'];
$res = mysqli_query($connect,"SELECT * FROM taskcomment where task_id='".$task_id."' ");
 

	while($row = mysqli_fetch_array($res)){
        ?> 
        <table style="overflow: scroll!important;">           
        <tr> 
              <td style="width:30%;"><?php echo substr($row["date"],0,19);?></td>  
              <td style="width:20%;"><?php echo $row["comments"];?></td>
              </tr>
              <tr style="background-color:#fafafa;">
              <td style="width:30%;"><?php echo $row["status"];?></td>  
             ------------------------------------------------------------------------------------------------------
            </tr> 
        </table>   
        <?php
    } ?>
  
    <?php
    $rest = mysqli_query($connect,"SELECT * FROM newtask where id='".$id."' ");

	while($rows = mysqli_fetch_array($rest)){
        ?> 
        <p style="color:black;">-----------------------------------------------------------------------------------------------<br>
        <?php echo  $user->get_fullname($uid); ?> changed the status to <?php echo $rows["3"];?></p>
    
 
        <?php
    } ?>
     
    </div>
    
</form>

</div>
</div>
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null);
    }
</script>
</body>
</html>