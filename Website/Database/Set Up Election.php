<?php
Session_start();
$conn = mysqli_connect("localhost","root","","Voting-System-DB");
if(isset($_POST['Set']))
{
    $parties = $_POST['Party_Name'];
    $name = $_FILES['Party_Pic']['name'];
     $ID = $_POST['Candidates_ID'];

       
    
     foreach($ID as $index => $ID){
      echo $parties.$name.$ID;
      $S_ID = $ID[$index];
      $S_name = $name[$index];
      $S_party = $parties[$index];
      $sql = "INSERT INTO selectionparty (Party_Name,Party_Pic,Candidates_ID) VALUES ('$S_party','$S_name','$S_ID')";
        $query_run = mysqli_query($conn,$sql);
        
     }
    if($query_run){
      if(isset($_FILES['Party_Pic'])){
        $name_array = $_FILES['Party_Pic']['name'];
    $tmp_name_array = $_FILES['Party_Pic']['tmp_name'];
    $type_array = $_FILES['Party_Pic']['type'];
    $size_array = $_FILES['Party_Pic']['size'];
    $error_array = $_FILES['Party_Pic']['error'];
    for($i = 0; $i < count($tmp_name_array); $i++){
        if(move_uploaded_file($tmp_name_array[$i], "../upload/".$name_array[$i])){
            //echo $name_array[$i]." upload is complete<br>";
        } else {
            //echo "move_uploaded_file function failed for ".$name_array[$i]."<br>";
        }
    }
      }
  echo'
  <script>
  alert("Party Add successfully");
  window.location = "../Admin/Set up Election.php";
  </script>
';
}else{
 
  echo'
  <script>
  alert("some error occurred");
  window.location = "../Admin/Set up Election.php";
  </script>
';
}
}else{
    echo "error";
}

?>