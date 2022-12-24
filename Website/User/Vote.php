<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location:../");
}

$userdata = $_SESSION['userdata'];
include("../Database/connect.php");
$result = mysqli_query($con, "SELECT * FROM SetElectiontimer  ORDER BY id DESC");
while($res = mysqli_fetch_array($result)) { 
$date = $res['date'];
$h = $res['h'];
$m = $res['m'];
$s = $res['s'];
}
?>

<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <link rel="stylesheet" href="../css/styl.css">
     
   
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Vote</title> 
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
          top: 270px;
          right: 50%;
          bottom: 250px;
        }
        #count1{
            text-align: center;
            font-size: 60px;

            font-family:'Times New Roman', Times, serif;
            position:absolute;
            top: 350px;
            right: 49%;
            
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
        <div class="top">
            
        <div class="top1">
              <p id="count"></p>
           <p id="count1"></p>
              <form action="" id="countdown">
            
            
            <script>
 var countDownDate = <?php 
echo strtotime("$date $h:$m:$s" ) ?> * 1000;
var now = <?php echo time() ?> * 1000;


var x = setInterval(function() {
now = now + 1000; 

var distance = countDownDate - now;

var Year = Math.floor(distance / (1000 * 60 * 60 * 24*365.25));
var distance = distance -Year* (1000 * 60 * 60 * 24*365.25);
var Month = Math.floor((distance /(1000 * 60 * 60 * 24*30.4375)));
var distance = distance - Month*(1000 * 60 * 60 * 24*30.4375);
var Day = Math.floor((distance / (1000 * 60 * 60*24) ));
var distance = distance - Day*(1000*60*60*24);
var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
var seconds = Math.floor((distance % (1000 * 60)) / 1000);

document.getElementById("count").innerHTML = Year + "Y /" + Month + "M /" +
Day + "D ";
document.getElementById("count1").innerHTML = hours+"h :"+minutes+"m :"+seconds+"s";

if (Year < 0) {
clearInterval(x);
 document.getElementById("count").innerHTML = " ";
 window.location="Vote1.php";
}
    
}, 1000);

    </script>
        </div>
          
            
        </div>

    </section>


    

    <script src="script.js"></script>
</body>
</html>