
<!DOCTYPE html>
<html>
    <head>
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1,user-scalable=no">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta charset="utf-8">
        <!-- <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->

        <title>RazorBee Online Solutions</title>
<style>
#admin{
    border-radius:20px;
    border:1px solid black;
    width:750px;
    padding:20px 20px;
}

</style>
        <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
        <!-- <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous"> -->
        <!-- Our Custom CSS -->
        <link rel="stylesheet" href="/EmployeeManagement/accounts/styles.css">

        <!-- Font Awesome JS -->
        <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
        <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    </head>

    <body>
        <div id="admin" class="form-group">
            <form  class="form-inline">
                <label>Emp Name <span style="color:red">*</span>:</label>
                <input type="text" name="name" placeholder="Enter your name" class="form-control" style="margin-left:30px" required>

                <label>Emp Id <span style="color:red">*</span>:</label>
                <input type="text" name="name" placeholder="Enter your Id" class="form-control" style="margin-left:76px" required ><br><br>

                <label>Email<span style="color:red">*</span>:</label>
                <input type="text" name="name" placeholder="Enter your Email" class="form-control" style="margin-left:70px" required>

                <label>Designation <span style="color:red">*</span>:</label>
                <input type="text" name="name" placeholder="Enter your Designation" class="form-control" style="margin-left:36px" required><br><br>

                <label>Mobile No <span style="color:red">*</span>:</label>
                <input type="text" name="name" placeholder="Enter mobile number" class="form-control" style="margin-left:36px" required>

                <label>Alternate Mob No <span style="color:red">*</span>:</label>
                <input type="text" name="name" placeholder="Enter Alternate mob no" class="form-control"  required><br><br>

                <label>Date of Joining <span style="color:red">*</span>:</label>
                <input type="text" name="name" placeholder="Enter Date of Joining" class="form-control" required>

                <label>Date of Birth <span style="color:red">*</span>:</label>
                <input type="text" name="name" placeholder="Enter Date of Birth" class="form-control" style="margin-left:36px" required><br><br>

                <label>Gender <span style="color:red">*</span>:</label>
                <input type="radio" name="name" style="margin-left:50px">Male<input type="radio" name="name" style="margin-left:10px">Female<input type="radio" name="name" style="margin-left:10px">Other

                <label style="margin-left:20px">Marital Status <span style="color:red;">*</span>:</label>
                <input type="radio" name="name" style="margin-left:30px">Single<input type="radio" name="name" style="margin-left:20px">Married<br><br>
            </form>
                <div class="form-group">
                    <label>Qualification<span style="color:red">*</span>:</label>
                    <input type="text" name="name" placeholder="Enter Qualification" class="form-control" required>
                </div>
            <form class="form-inline">
                <label>Present Address <span style="color:red">*</span>:</label>
                <textarea type="text" name="name" placeholder="Enter Present Address" class="form-control" required rows="4" cols="95"></textarea>

                <label>Permanent Address <span style="color:red">*</span>:</label>
                <textarea type="text" name="name" placeholder="Permanent Address" class="form-control" required rows="4" cols="95"></textarea><br><br>
                
                <label>Nationality <span style="color:red"></span>:</label>
                <input type="text" name="name" placeholder="Indian" class="form-control" readonly>

                <label>Department <span style="color:red">*</span>:</label>
                <select>
                    <option>IT</option>
                    <option>WEb development</option>
                    <option>Java development</option>
                </select><br><br>
                <label>Admin Privileges <span style="color:red">*</span>:</label>
                <input type="checkbox" name="name"><br><br>
            </form>
        </div>

    </body>
</html>