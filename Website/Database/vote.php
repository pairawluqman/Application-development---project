<?php
session_start();
include("connect.php");
$conn = mysqli_connect("localhost","root","","Voting-System-DB");


$uid = $_SESSION['userdata']['nationalid'];
$parties = $_POST['PNAME'];
     $ID = $_POST['CID'];
    
$update_status = mysqli_query($conn, "UPDATE Users set status=1 where nationalid='$uid'");


if($ID){
    $update_status = mysqli_query($conn, "INSERT INTO Panel (Votes,PNAME,CID) VALUES (0,'$parties','$ID') ");
}


  $update_status = mysqli_query($conn, "UPDATE Panel set Votes = 1+Votes where CID =$ID");

  $update_status = mysqli_query($conn, "DELETE x1 from Panel x1 inner JOIN Panel x2 where x1.Votes<x2.Votes and x1.PNAME=x2.PNAME");
  

if($update_status){
    $_SESSION['status'] = 1;
    echo'
    <script>
    alert("vote succsesfully ");
    window.location = "../User/Vote1.php";
    </script>
';
}
else{
    echo'
    <script>
    alert("some error occurred");
    window.location = "../User/Vote1.php";
    </script>
';
}





?>