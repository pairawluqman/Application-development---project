<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location:../");
}

$userdata = $_SESSION['userdata'];

?>

<style>
#bac{

    padding: 5px;
    font-size: 15px;
    background-color: black;
    color: white;
    border-radius: 5px;
    float: left;

}
#next{

padding: 5px;
font-size: 15px;
background-color: black;
color: white;
border-radius: 5px;
float: right;

}
#profile{
    float: left;
}
#photo{
    position: absolute;
    
    padding-bottom: 200px;
    padding-left: 1500px;
}
#form{
zoom: 80%;
margin: 50px;
left: 10px;
 
    
}
#image{
    position: absolute;
left: 30px;
}


</style>



<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashbord</title>
    <script src="https://code.jquery.com/jquery-3.6.1.js"></script>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="../css/style2.css">
    <link rel="stylesheet" href="../css/style.css">
    
    
</head>
<body>
    <div id="image">

    <img src="../upload/KRG.png" width="210" height="180">
    </div>

<div class="alert show">
    <span class="msg">This is your personal information authorized by KRG, any case of any mistake please visit KRG authorized agencies for help</span>
<span class = "close-btn" id="close">
<span class = "fas fa-times"></span>
</span>
    </div>
  <script>
    
    document.getElementById("close").onclick = function(){

    
        $('.alert').removeClass("show");
        $('.alert').addClass("hide");
    }
  </script>
  

    
        <form action="../User/video.php" class="profile" id="form" >
        
        
        
<div id="photo" >

            <img src="../upload/<?php echo $userdata['v_image']?>" height="200" width="200">

        </div>
        <b>National ID: </b><?php echo$userdata['nationalid']?><br>
        <b>Name: </b><?php echo $userdata['Fullname'] ?><br>
        <b>Title: </b><?php echo $userdata['title'] ?><br>
        <b>Blood Type: </b><?php echo $userdata['bloodtype'] ?><br>
        <b>Place of Issue: </b><?php echo $userdata['placeofissue'] ?><br>
        <b>Date of Issue: </b><?php echo $userdata['dateofissue'] ?><br>
        <b>Date of Birth: </b><?php echo $userdata['dateofbirth'] ?><br>
        <b>Place of Birth: </b><?php echo $userdata['placeofbirth'] ?><br>
        <b>Gender: </b><?php echo $userdata['gender'] ?><br>
        <b>Expire Date: </b><?php echo $userdata['v_expiredate'] ?><br>
        
        

        <button id="button">proceed</button>
          
</form>
  

    
</body>
</html>
