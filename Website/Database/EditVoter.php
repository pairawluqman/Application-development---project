<?php
session_start();
$conn = mysqli_connect("localhost","root","","Voting-System-DB");
if (isset($_POST['update']))
{
    
$id = $_POST['nationalid'];
$pic=($_FILES['v_image']['name']); 
    $query = "UPDATE Users SET v_image='$pic',Fullname='$_POST[Fullname]',title='$_POST[title]',bloodtype='$_POST[bloodtype]',placeofissue='$_POST[placeofissue]',dateofissue='$_POST[dateofissue]',dateofbirth='$_POST[dateofbirth]',placeofbirth='$_POST[placeofbirth]',gender='$_POST[gender]',v_expiredate='$_POST[v_expiredate]' where nationalid=$_POST[nationalid]";
    $query_run = mysqli_query($conn,$query);

    if($query_run){ 
      
        move_uploaded_file($_FILES["v_image"]["tmp_name"],"../upload/".$_FILES["v_image"]["name"]);
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