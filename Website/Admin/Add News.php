<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location:../");
}

$userdata = $_SESSION['userdata'];
include("../Database/News.php");

?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <link rel="stylesheet" href="../css/styl.css">
     
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Add News</title> 
    <style>

        #sec{
            max-width: 500px;
        }
        .form{
           max-width: 500px;
           
        }
        label{
           display: block;
           text-transform: uppercase;
           font-size: 14px;
           padding:1rem 0 .5rem;
        }
        input, textarea{
           
           display: block;
           width: 100%;
           border: 2px;
           padding: .25rem;
           font-size: 14px;
           border-radius: 5px;
           
           
        }
        #btn{
            margin-top: 2%;
            margin-left: 2px;
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
                    <span class="link-name">Set Up election</span>
                </a></li>
                <li><a href="../Admin/AddVoter.php">
                <i class="uil uil-user-plus"></i>
                    <span class="link-name">Add Voter</span>
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

    <section class="dashboard" id="sec">
          <div class="container" id="news">
            <div class="container my-5">
                <h2>News</h2>
            </div>
    <form class="form"action = "../Database/News.php" method="post" enctype="multipart/form-data">
    
         
        <input type="hidden" name = "News_id" class = "form-control" requierd >
        <label for="">Title</label>
        <input type="text" name = "Title"  class = "form-control" requierd>
        <label for="">Description</label>
        <input type="text" name = "DC"  class = "form-control" placeholder="Enter Description" requierd>
        <label for="">image</label>
        <input type="file" id="img" name = "Picture" class = "form-control"  requierd >
        <br>
         <button id="btn" type="submit" name="save_image1" class="btn btn-primary" value="confirm"> SUBMIT - SAVE</button>
   



          </div>
         
    </section>
    <script src="script.js"></script>
</body>
</html>