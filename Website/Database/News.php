<?php
include("../Database/connect.php");
$conn = mysqli_connect("localhost","root","","Voting-System-DB");
$check1 = mysqli_query($con, "SELECT * FROM news");
if (isset($_POST['save_image1']))
{
    
    $userdata1 = mysqli_fetch_array($check1);
    $_SESSION['save_image1'] = $userdata1;
  
    $Title = $_POST['Title'];
    $DEC = $_POST['DC'];
    $ID = $_POST['News_id'];
   $image =$_FILES['Picture']['name'];


    $query = "INSERT INTO news (News_id,Title,DC,Picture) VALUES ('$ID','$Title','$DEC','$image')";
    $query_run = mysqli_query($conn,$query);
if($query_run){

        move_uploaded_file($_FILES["Picture"]["tmp_name"],"../upload/".$_FILES["Picture"]["name"]);
        $_SESSION['status'] = "image stored successfully";
        
          echo'
  <script>
  alert("News Add successfully");
  window.location = "../Admin/Add News.php";
  </script>
';
    }else{
        $_SESSION['status'] = "image not inserted successfully";
        echo'
  <script>
  alert("some error occurred");
  window.location = "../Admin/Add News.php";
  </script>
';
        
    }
    

    
}
?>
