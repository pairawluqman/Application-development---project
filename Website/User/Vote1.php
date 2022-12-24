<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location:../");
}

$userdata = $_SESSION['userdata'];
$data = $_SESSION['status'];

?>
<?php
include "../Database/connect.php";
$link =  mysqli_connect("localhost","root","");
mysqli_select_db($link,"Voting-System-DB");



?>
	
    <script src="../Javascript/confirm.js"></script>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styl.css">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Vote</title>
</head>
<body>
    <style>
        #dy{
       
            text-align: center;
          
            
        }
        
        
    </style>
<nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="../upload/KRG.png" alt="">
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
    <section class="dashboard" id="sec">
        
        <?php
          $res= mysqli_query($link,"select * from SetElectionparty");
          while($row=mysqli_fetch_array($res)){
?>

<div class="1" id="dy">
<div class="2">
    
<div class="3">

    <div class="4" >
        <br>
        <h2 id="one"><?php echo $row["PNAME"] ?></h2><br>
<img src="../upload/<?php echo $row["PPIC"]?>" height="150" width="200"  >
   <br><br>

   <form action="../Database/vote.php" method="POST" onsubmit="return submitForm(this);">
   <input type="hidden" name="PNAME" value="<?php echo $row["PNAME"] ?>">
   <input type="hidden" name = "CID" value="<?php echo $row["CID"] ?>">
   <?php

 if($_SESSION['status']==1){
 ?>
<button  disabled style="padding: 5px; font-size: 15px; background-color: #27ae60; color: white; border-radius: 5px;" type="button">Voted</button>

 <?php
    }
    else{
   ?>
    <button type="submit" style="padding: 5px; font-size: 15px; background-color: #3498db; color: white; border-radius: 5px;">Vote</button>
  
  <?php
     }
    ?>

   </form>
   <h4>--------------------------------</h4>
 <script>
    function submitForm(form) {
        swal({
            title: "Are you sure?",
            text: "Once you vote you can't vote again!",
            icon: "warning",
            buttons: ["Re-vote","Vote"],
            dangerMode: true,
        })
        .then(function (isOkay) {
            if (isOkay) {
                form.submit();
            }
        });
        return false;
    }
    </script>
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
<?php
