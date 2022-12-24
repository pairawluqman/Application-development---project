<?php
session_start();
$conn = mysqli_connect("localhost","root","","Voting-System-DB");
if (isset($_POST['save_image']))
{
    
    $image =$_FILES['v_image']['name'];
    $nationalid = $_POST['NID'];
    $fullname = $_POST['F_name'];
    $title = $_POST['T'];
    $bloodtype = $_POST['B_type'];
    $placeofissue = $_POST['P_issue'];
    $dateofissue = $_POST['D_issue'];
    $dateofbirth = $_POST['D_birth'];
    $placeofbirth = $_POST['P_birth'];
    $gender = $_POST['Gen'];
    $expiredate = $_POST['EXP'];


    
    
    try {
      $query = "INSERT INTO Users (v_image,nationalid,Fullname,title,bloodtype,placeofissue,dateofissue,dateofbirth,placeofbirth,gender,v_expiredate) VALUES ('$image','$nationalid','$fullname','$title','$bloodtype','$placeofissue','$dateofissue','$dateofbirth','$placeofbirth','$gender','$expiredate')";
    $query_run = mysqli_query($conn,$query);

    } catch (mysqli_sql_exception $e) {
        if ($e->getCode() == 1062) {
            
        } else {
            throw $e;
        }
    
    }
    
    
    if($query_run){
        move_uploaded_file($_FILES["v_image"]["tmp_name"],"../upload/".$_FILES["v_image"]["name"]);
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