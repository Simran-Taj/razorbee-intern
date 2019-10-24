<?php
    include "../config.php";
    $result=0;
    $project = new project();
    
    if(isset($_POST['Func_createProject'])){
        $result= $project->createProject();
        echo $result;
    }
    if(isset($_POST['Func_projectview'])){
        //$result= $project->viewProject();
        echo $project->viewProject();
        //echo $result;
    }
    
    class project{

        public $db;

        public function __construct(){
            $this->db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);

            if(mysqli_connect_errno()) {
                echo "Error: Could not connect to database.";
                exit;
            }
        }

        public function createProject(){
           
            $name2=$_POST['name1'];
            $client2=$_POST['client1'];
            $description2=$_POST['description1'];
            //$db = new mysqli(DB_SERVER, DB_USERNAME, DB_PASSWORD, DB_NAME);
    
            // if(mysqli_connect_errno()) {
            //     echo "Error: Could not connect to database.";
            //     exit;
            // }
            $sql1 = "INSERT INTO projectmaster (`projectname`, `clientname`, `description`,`projectstatus`) VALUES ('$name2','$client2','$description2','New')";
            //$sql1 = "INSERT INTO signup (empid,emailid, pass) VALUES ('$empid','$email','$password')";
            $result = mysqli_query($this->db,$sql1) or die(mysqli_connect_errno()."Data cannot inserted");
            return "$result";
        }

        public function viewProject(){
            $id2 = $_POST['id1'];
            $sql2 = "SELECT * FROM `projectmaster` where id='$id2'";
            $result1 = mysqli_query($this->db,$sql2);
           // $user_data = mysqli_fetch_array($result1);


           // $response = array();
            while($row = mysqli_fetch_assoc($result1)){
                $response["id"] = $row["id"];
                $response["projectname"] = $row["projectname"];
                $response["clientname"] = $row["clientname"];
                $response["description"] = $row["description"];
                $response["status"] = $row["projectstatus"];
            } 

            // save the JSON encoded array
            $jsonData = json_encode($response); 
            return $jsonData;
            // echo "<form class='modal' id='projectmodal'>";
            // while($test = mysqli_fetch_array($result)){
                
            //     echo  "<h1>$user_data['projectname']</h1>";
            //     echo  "<h2>$user_data['clientname']</h2>";
                
            // }
            // echo "</form>";
                    

        }
    }
    
?>