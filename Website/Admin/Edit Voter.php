<?php
session_start();
if(!isset($_SESSION['userdata'])){
   
    header("location:../");
}
include("../Database/connect.php");
$conn = mysqli_connect("localhost","root","","Voting-System-DB");
$userdata = $_SESSION['userdata'];

$id = $_GET['id'];
$sql= "SELECT * from User where National_ID=$id";
$reslut = mysqli_query($conn,$sql);
$row = mysqli_fetch_assoc($reslut);
$FN = $row['FullName'];
$TIT = $row['Title'];
$BT = $row['BloodType'];
$POI = $row['PlaceOfIssue'];
$DOI = $row['DateOfIssue'];
$DOB = $row['DateOfBirth'];
$POB = $row['PlaceOfBirth'];
$GEN = $row['Gender'];
$EX = $row['ExpireDate'];
$vm = $row['VoterImage'];
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <link rel="stylesheet" href="../css/styl.css">
     <!-- CSS only -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
   
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Edit Voter</title> 
    <style>
        body{
            zoom: 80%;
        }
       #my3{
        margin-left: 14%;
       }
       
        </style>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="../upload/KRG.png" alt="">
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
                    <span class="link-name">Add voter</span>
                </a></li>
                <li><a href="../Admin/Modify Voter.php">
                    <i class="uil uil-user-times"></i>
                    <span class="link-name">Modify Voter</span>
                </a></li>
                <li><a href="../Admin/Add News.php">
                    <i class="uil uil-file-plus-alt"></i>
                    <span class="link-name">Add News</span>
                </a></li>
               
            </ul>
            
           
        </div>
    </nav>
    
        <div class="container my-3" id="my3" >
        <div class="container my-5">
                <h2>Edit Voter</h2>
            </div>
    <form action = "../Database/EditVoter.php" method="post" enctype="multipart/form-data">

    <div class="row mb-3">
    <label class="form-label">nationalid</label>
    <div class="col-sm-6">
    <input type="text" name = "National_ID" requierd class = "form-control" value=<?php echo $id; ?>>
    </div>
</div>
          <div class="row mb-3">
        <label class="form-label">image</label>
        <div class="col-sm-6">
        <input type="file" id="img" name = "VoterImage" requierd class = "form-control" >
        </div>
       </div>

       <div class="row mb-3">
       <label class="form-label">Fullname</label>
       <div class="col-sm-6">
       <input type="text" name = "FullName" requierd class = "form-control" value=<?php echo $FN; ?>>
       </div>
       </div>

           <div class="row mb-3">
           <label class="form-label">title</label>
        <div class="col-sm-6">
        <input type="text" name = "Title" requierd class = "form-control" value=<?php echo $TIT; ?>>
          </div>
           </div>

           <div class="row mb-3">
           <label class="form-label">bloodtype</label>
           <div class="col-sm-6">
           <input type="text" name = "BloodType" requierd class = "form-control" value=<?php echo $BT; ?>>
           </div>
    </div>

    <div class="row mb-3">
    <label class="form-label">placeofissue</label>
    <div class="col-sm-6">
    <input type="text" name = "PlaceOfIssue" requierd class = "form-control" value=<?php echo $POI; ?>>
    </div>
    </div>

    <div class="row mb-3">
    <label class="form-label">dateofissue</label>
    <div class="col-sm-6">
    <input type="Date" name = "DateOfIssue" requierd class = "form-control" value=<?php echo $DOI; ?>>
    </div>
    </div>

    <div class="row mb-3">
    <label class="form-label">dateofbirth</label>
    <div class="col-sm-6">
    <input type="Date" name = "DateOfBirth" requierd class = "form-control" value=<?php echo $DOB; ?>>
    </div>
    </div>

    <div class="row mb-3">
    <label class="form-label">placeofbirth</label>
    <div class="col-sm-6">
    <input type="text" name = "PlaceOfBirth" requierd class = "form-control" value=<?php echo $POB; ?>>
    </div>
    </div>

    <div class="row mb-3">
    <label class="form-label">gender</label>
    <div class="col-sm-6">
    <input type="text" name = "Gender" requierd class = "form-control" value=<?php echo $GEN; ?>>
    </div>
    </div>

    <div class="row mb-3">
    <label class="form-label">expiredate</label>
    <div class="col-sm-6">
    <input type="Date" name = "ExpireDate" requierd class = "form-control" value=<?php echo $EX; ?>>
    </div>
    </div>

    <div class="row mb-3">
        <div class="">
        <button type="submit" name="update" class="btn btn-primary" value="update data"> SUBMIT - SAVE</button>
        <a class="btn btn-outline-primary" href="../Admin/Modify Voter.php">cancel</a>
        </div>
</div>
    </form>
           
          
        </div>
          
            
        

    </section>

    <script src="script.js"></script>
</body>
</html>