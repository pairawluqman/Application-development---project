<?php
session_start();
include("connect.php");
$conn = mysqli_connect("localhost","root","","Voting-System-DB");
$id = $_POST['password'];

$check = mysqli_query($con, "SELECT * FROM Users WHERE nationalid='$id'");



if(mysqli_num_rows($check)>0)
{
    $userdata = mysqli_fetch_array($check);
    $_SESSION['userdata'] = $userdata;
        $_SESSION['status'] = $userdata['status'];
        $_SESSION['data'] = $userdata;
   
    $query = "SELECT * FROM Users WHERE nationalid='$id'";
    $query_run = mysqli_query($conn,$query);

    while($row = mysqli_fetch_assoc($query_run)){


        $NID = $row['Fullname'];

    }

   if($id == $NID  )
    {
        echo'
        <script>
        alert("you are using admin account ");
        window.location = "../Admin/Set up Election.php";
        </script>
    ';
    
    }   

    

   
    echo'
    <script>
    window.location = "../User/dashbord.php";
</script>
    ';
}
else{
    echo'
    <script>
    alert("wrong National ID ");
    window.location = "../Admin/index.html";
    </script>
';
}

?>