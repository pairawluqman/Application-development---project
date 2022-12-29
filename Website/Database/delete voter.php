<?php
session_start();

   $conn = mysqli_connect("localhost","root","","Voting-System-DB");
   
   $RN = $_GET["rn"];
   

    $query = "DELETE FROM User where National_ID=$RN";
    //$update_status = mysqli_query($conn, "UPDATE voting, vote set Votes = Votes-1 where VOTE.status=1  ");
    $query_run = mysqli_query($conn,$query);
    
    
     
    
    

header("Location: ../Admin/Modify Voter.php");
exit;
?>