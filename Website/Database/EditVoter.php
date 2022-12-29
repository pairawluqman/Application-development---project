<?php
session_start();
$conn = mysqli_connect("localhost","root","","Voting-System-DB");
if (isset($_POST['update']))
{
    
$id = $_POST['National_ID'];
$pic=($_FILES['VoterImage']['name']); 
    $query = "UPDATE User SET VoterImage='$pic',FullName='$_POST[FullName]',Title='$_POST[Title]',BloodType='$_POST[BloodType]',PlaceOfIssue='$_POST[PlaceOfIssue]',DateOfIssue='$_POST[DateOfIssue]',DateOfBirth='$_POST[DateOfBirth]',PlaceOfBirth='$_POST[PlaceOfBirth]',Gender='$_POST[Gender]',ExpireDate='$_POST[ExpireDate]' where National_ID=$_POST[National_ID]";
    $query_run = mysqli_query($conn,$query);

    if($query_run){ 
      
        move_uploaded_file($_FILES["VoterImage"]["tmp_name"],"../upload/".$_FILES["VoterImage"]["name"]);
        $_SESSION['status'] = "image stored successfully";
          echo'

    <script>
    alert("data updated") 
    </script>
   
        ';
       header("location: ../Admin/Modify Voter.php");
    }else{
        echo'

        <script>
        alart("data not updated")
        </script>
    
            ';
        $_SESSION['status'] = "image not inserted successfully";
        
        
    }
}
?>