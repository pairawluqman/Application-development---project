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
    <link rel="stylesheet" href="../css/Video.css">
    <title>Video</title>
</head>
<body>
    <form action= "../User/Home.php" id="form1">
    <h1>Welcome to VoteKRG</h1>
    <h2>This interface is created to facilitate KRG with elective processes 
and make them more secure, reliable, and decent for our civilians.<br> 
The below video will show you how to use the system.<h2>

<img src= "../upload/KRG.png" >

<video controls autoplay>
    <source src = "">
</video>

<button>CONFIRM</button>

</form>

</body>
</html>