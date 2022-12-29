<?php 
session_start();
if(!isset($_SESSION['userdata'])){
    header("location:../");
}

$userdata = $_SESSION['userdata'];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styl.css">
    <link rel="stylesheet" href="../css/Addvoter.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Add Voter</title>

    <style>
        body{
            zoom: 80%;
        }
        #add{
            position: absolute;
            left: 70px;
            
        }
        #search{
            position: absolute;
            left: 900px;
        }
        #tab1{
            position: absolute;
            left: 900px;
        }
        #con{
            
            margin-left: 13%;
        }
        
    </style>
</head>
<body>
<nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="../upload/KRG.png" class="img">
            </div>

            <span class="logo_name">Dashboard</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="../Admin/Set up Election.php">
                    <i class="uil uil-plus-circle"></i>
                    <span class="link-name">Set Up Election</span>
                </a></li>
                <li><a href="../Admin/AddVoter.php">
                    <i class="uil uil-user-plus"></i>
                    <span class="link-name">Add Voter</span>
                </a></li>
                <li><a href="../Admin/Modify Voter.php">
                    <i class="uil uil-user-times"></i>
                    <span class="link-name">Modify Voter</span>

                    <li><a href="../Admin/Add News.php">
                    <i class="uil uil-file-plus-alt"></i>
                    <span class="link-name">Add News</span>
                </a></li>
                </a></li>
                
               
            </ul>
            
           
        </div>
    </nav>
    <div id = "con"class="container my-5">
                <h2>Add Voter</h2>
            </div>
    <form class="form"method="post" id="search">
<label class="form-label">Search</label>
<input class="form-control" type="text" name="search">
<br>
<input class="btn btn-primary"type="submit" name="submit">
	
</form>

    <form class ="form"action = "../Database/Set Voter.php" method="post" enctype="multipart/form-data" id="add">
    
    <label class= "form-label"for="">image</label>
    <input class="form-control"type="file" id="img" name = "VoterImage" requierd class = "form-control">
    <br><br>
    <label class= "label"for="">nationalid</label>
    <input class="form-control"type="text" name = "National_ID" requierd class = "form-control" required>
    <br><br>
    <label class = "label" for="">Fullname</label>
    <input class="form-control"type="text" name = "FullName" requierd class = "form-control">
    <br><br>
    <label class= "label"for="">title</label>
    <input class="form-control"type="text" name = "Title" requierd class = "form-control">
    <br><br>
    <label class= "label"for="">bloodtype</label>
    <input class="form-control"type="text" name = "BloodType" requierd class = "form-control">
    <br><br>
    <label class= "label"for="">placeofissue</label>
    <input class= "form-control"type="text" name = "PlaceOfIssue" requierd class = "form-control">
    <br><br>
    <label class= "label"for="">dateofissue</label>
    <input class="form-control"type="Date" name = "DateOfIssue" requierd class = "form-control">
    <br><br>
    <label class= "label"for="">dateofbirth</label>
    <input class="form-control"type="Date" name = "DateOfBirth" requierd class = "form-control">
    <br><br>
    <label class= "label"for="">placeofbirth</label>
    <input class="form-control" type="text" name = "PlaceOfBirth" requierd class = "form-control">
    <br><br>
    <label class= "label"for="">gender</label>
    <input class="form-control"type="text" name = "Gender" requierd class = "form-control">
    <br><br>
    <label class= "label"for="">expiredate</label>
    <input class="form-control"type="Date" name = "ExpireDate" requierd class = "form-control">
    <br><br>
    <div class="message">
        <?php
        if(isset($_session['status'])){
            echo $_session['status'];
            unset($_session['status']);
        }
        ?>
    </div>

    <div>
        <button type="submit" name="save_image" class="btn btn-primary"> SUBMIT - SAVE</button>
    </div>

</form>
    
</body>
</html>
<?php

$con = new PDO("mysql:host=localhost;dbname=Voting-System-DB",'root','');

if (isset($_POST["submit"])) {
	$str = $_POST["search"];
	$sth = $con->prepare("SELECT * FROM `Users` WHERE nationalid = '$str'");

	$sth->setFetchMode(PDO:: FETCH_OBJ);
	$sth -> execute();

	if($row = $sth->fetch())
	{
		?>
		<br><br><br>
		
        <table class="table" id="tab1">
            <thead>
               
            </thead>
            <tbody>
                
                <?php
                $servername = "localhost";
                $username = "root";
                $password = "";
                $database = "Voting-System-DB";

                $connection = new mysqli($servername,$username,$password, $database);
                if($connection -> connect_error){
                    die ("Connection Failed: " . $connection -> connect_error);
                }
                $sql = "SELECT * FROM Users";
                $result = $connection->query($sql);

                if(!$result){
                    die("Invalid query: " . $connection->error);
                }

                if($row = $result->fetch_assoc()){
                    
                    echo "
              
                <br><br><br><br><br><br><br><br>
                <p id =mes1>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; this National ID is already in the system</p>
              
                 
    ";
                }
            
    ?>
            </tbody>
        </table>

		
<?php 
	}
		
		
		else{
          
			echo "<br><br><br><br><br><br><br><br><p id=mes2>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; National ID Does not exist</p>";
		}


}

?>