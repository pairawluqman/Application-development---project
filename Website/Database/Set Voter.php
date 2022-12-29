<?php
session_start();
$conn = mysqli_connect("localhost","root","","Voting-System-DB");
if (isset($_POST['save_image']))
{
    
    $image =$_FILES['VoterImage']['name'];
    $nationalid = $_POST['National_ID'];
    $fullname = $_POST['FullName'];
    $title = $_POST['Title'];
    $bloodtype = $_POST['BloodType'];
    $placeofissue = $_POST['PlaceOfIssue'];
    $dateofissue = $_POST['DateOfIssue'];
    $dateofbirth = $_POST['DateOfBirth'];
    $placeofbirth = $_POST['PlaceOfBirth'];
    $gender = $_POST['Gender'];
    $expiredate = $_POST['ExpireDate'];


    
    
    try {
      $query = "INSERT INTO User (VoterImage,National_ID,FullName,Title,BloodType,PlaceOfIssue,DateOfIssue,DateOfBirth,PlaceOfBirth,Gender,ExpireDate) VALUES ('$image','$nationalid','$fullname','$title','$bloodtype','$placeofissue','$dateofissue','$dateofbirth','$placeofbirth','$gender','$expiredate')";
    $query_run = mysqli_query($conn,$query);

    } catch (mysqli_sql_exception $e) {
        if ($e->getCode() == 1062) {
            
        } else {
            throw $e;
        }
    
    }
    
    
    if($query_run){
        move_uploaded_file($_FILES["VoterImage"]["tmp_name"],"../upload/".$_FILES["VoterImage"]["name"]);
        $_SESSION['status'] = "image stored successfully";
         echo'
        <script>
        alert("Voter Add successfully");
        window.location = "../Admin/AddVoter.php";
        </script>
    ';
    }else{
        $_SESSION['status'] = "image not inserted successfully";
          echo'
        <script>
        alert("some error occurred");
        window.location = "../Admin/AddVoter.php";
        </script>
    ';

    }
   
    
}
?>