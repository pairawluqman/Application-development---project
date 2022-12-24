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
     
    
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Home</title> 
    <style>
        p {
           
          text-align: center;
          font-size: 60px;
                   
          font-family:'Times New Roman', Times, serif;
          
          flex-direction: column;
         
        
          
          
        
        
        }
        #count{
            text-align: center;
          font-size: 60px;
                   
          font-family:'Times New Roman', Times, serif;
          position: absolute;
          top: 250px;
          right: 40%;
        }
       
        </style>
</head>
<body>
    <nav>
        <div class="logo-name">
        <div class="logo-image">
                <img src="../upload/krg_logo_notrans_24802056.png" alt="">
            </div>

            <span class="logo_name">Dashboard</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="../User/Home.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Home</span>
                </a></li>
                <li><a href="../User/Vote.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Vote</span>
                </a></li>
                <li><a href="../User/Panel.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Panel</span>
                </a></li>
                <li><a href="../User/Feed.php">
                <i class="uil uil-newspaper"></i>
                    <span class="link-name">Feed</span>
                </a></li>
                
               
            </ul>
            
           
        </div>
    </nav>

    <section class="dashboard">
    <div class="container" style="display: flex; height: 700px;padding-top:0px;padding-left:30px;padding-right:0px;border:10px;border-style:solid; border-color:#000000;">
        <div style="width: 55%; background: rgb(247, 252, 247);padding-top:0px; padding-bottom:0px;">
            <h1 align="left" style="font-size:200%;"  >Dear civilians</h3>
                <p align="left" style="font-size:200%;" > Welcome again to  VoteKRG,<br> An interface 
                where you can feel safe to <br>vote  without
                the  invitation of privacy  in <br>the comfort 
                of your  residence  and trust <br>the election 
                process where all the  votes<br> are managed 
                through an IT-based remote <br>system. <br> Don't
                forget you matter to your government.</p>
        </div>
        <div style="flex-grow: 1; "> <img alt="image/Screenshot (308).pngScreenshot (308).png" style="width: 100% ;height: 100%; border-style:solid; border-color:#000000; "src="../upload/Screenshot (308).png"/></div>

    </section>
  
    
    

    <script src="../Javascript/script.js"></script>
</body>
</html>


