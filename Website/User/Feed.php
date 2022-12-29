<?php

session_start();
if(!isset($_SESSION['userdata'])){
    header("location:../");
}

$userdata = $_SESSION['userdata'];

?>
<?php
include "../Database/connect.php";
$link =  mysqli_connect("localhost","root","");
mysqli_select_db($link,"Voting-System-DB");



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styl.css">
     
   
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Feed</title>
</head>
<body>
    
<style>
        body{
            background-color: white;
        }
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
         #dy{
             text-align: center;
           
           
 
         }
         #one{
            font-size: xx-large;
         }
         #three{
            font-weight: normal;
            
         }
         
        
    </style>
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
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Feed</span>
                </a></li>
                
               
            </ul>
            
            
        
        </div>
    </nav>
    <section class="dashboard">
        

           

        <div class="top1" id="dy"> 
              
        
        
        <?php
          $res= mysqli_query($link,"select * from news");
          while($row=mysqli_fetch_array($res)){
?>

<div class="1" id="dy">
<div class="2">
<div class="3">
    <div class="4">
        <br><br>
        <h1 id="one"><?php echo $row["Title"] ?></h1><br>
<img src="../upload/<?php echo $row["News_Picture"]?>"  width="600" ><br><br>
   <h3 id="three"><?php echo $row["Description"] ?></h3><br><br>
   <h3>---------------------------------------------------------</h3>
 </div>
 
</div>
</div>
</div>

                    
                   
                   
                </div>
               
  
        

<?php
            
          }
          
          ?>
          
           
          
       
        
            
        

    </section>
</body>
</html>
