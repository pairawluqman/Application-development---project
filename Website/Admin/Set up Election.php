<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location:../");
}

$userdata = $_SESSION['userdata'];
include("../Database/connect.php");
$result = mysqli_query($con, "SELECT * FROM selectiontimer ORDER BY id DESC");
while($res = mysqli_fetch_array($result)) { 
$date = $res['Date'];
$h = $res['Hour'];
$m = $res['Minute'];
$s = $res['Second'];
}
?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <link rel="stylesheet" href="../css/styl.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Set Up Election</title> 
    <style>
        #sec{
            max-width: 500px;
        }
        .plus{
            cursor: pointer; 
        }
        .minus{
            
        border: 0;
        background: grey;
        padding:.5rem;
        color: black;
        margin: 1rem 0;
        width: auto;
        cursor: pointer;
        }
        
</style>
</head>
<body>
    <nav>
        <div class="logo-name">
            <div class="logo-image">
                <img src="../upload/KRG.png" alt="">
            </div>

            <span class="logo_name">Dashboard</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="../Admin/Set up Election.php">
                    <i class="uil uil-plus-circle"></i>
                    <span class="link-name">Set Up Election</span>
                </a></li>
                <li><a href="../Admin/AddVoter.php">
                <i class="uil uil-user-plus"></i>
                    <span class="link-name">Add Voter</span>
                </a></li>
                <li><a href="../Admin/Modify Voter.php">
                    <i class="uil uil-user-times"></i>
                    <span class="link-name">Modify Voter</span>
                </a></li>
                <li><a href="../Admin/Add News.php" >
                    <i class="uil uil-file-plus-alt"></i>
                    <span class="link-name">Add News</span>
                </a></li>
               
            </ul>
            
           
        </div>
    </nav>

    <section class="dashboard" id="sec">
        

           

        <div class="top1" id="date"> 
        <div class="container my-5">
                <h2>Set Up Election</h2>
            </div>
            
        <form method="POST" action="#" id="date1">
Date*<input class="form-control" type="date" name="date" value="<?php echo $date;?>">
Hour*<input class="form-control" type="number" name="h" value="<?php echo $h;?>">
Minute*<input class="form-control" type="number" name="m" value="<?php echo $m;?>">
Secound*<input class="form-control" type="number" name="s" value="<?php echo $s;?>">
<br>
<button class="btn btn-primary"type="submit" name="update">Update</button>
</form>
<?php
 include_once("../Database/connect.php");

if(isset($_POST['update']))
{	
$date=$_POST['Date'];
$h= $_POST['Hour'];
$m= $_POST['Minute'];
$s= $_POST['Second'];
		
$result = mysqli_query($con, "UPDATE selectiontimer  SET date='$date' WHERE id=1");
$result = mysqli_query($con, "UPDATE selectiontimer  SET Hour='$h' WHERE id=1");
$result = mysqli_query($con, "UPDATE selectiontimer  SET minute='$m' WHERE id=1");
$result = mysqli_query($con, "UPDATE selectiontimer  SET second='$s' WHERE id=1");	

echo "Timer updated";
}
?>
          
        </div>
        <br>
          <div class="top2" id="news">
          <form class="party" action="../Database/Set Up Election.php" method="post" enctype="multipart/form-data">
     
     <br>
     <label id="l1" class="form-label">how many parties to be added?</label>
     <div class="wrapper">
         <div id="res" >
            <span class="minus" id="minus" name="minus">reset</span> 
                
              
         </div>
        
   
         
         
     </div>
     <div>
        <br>
     <span name="number" id = "num"class="num">0</span>
     <span id="plus"class="plus">+</span>


     </div>
     <div id = "div-container" class = "parties"></div>
     
     
     <script >
         const plus = document.querySelector(".plus");
         const DivContainer = document.getElementById("div-container");
         minus = document.querySelector(".minus");
         num = document.querySelector(".num");
         let a = 0;
         let p= 0;
         plus.addEventListener("click",AddNew);
         
         
         function AddNew(){
             a++;
             a = (a < 10) ? "0" + a:a;
            
             num.innerText = a-p ;
             
              const newDiv = document.createElement('div');
              
             newDiv.classList.add("part")
             DivContainer.appendChild(newDiv);
             newDiv.innerHTML = "<input name= Candidates_ID[] type=hidden class = text placeholder=ID> <input name=Party_Pic[] type=file class = img > <input name= Party_Name[] type=text class = text placeholder=Name>";
             

              

             minus.addEventListener("click",rm);
              
         
                 function rm(){
           
             if(a > 0){
                 
                 p = a;
                 num.innerText = 0;
                 
                 DivContainer.removeChild(newDiv);
               

                 return p;
                 
             } 
        
             
         } 

               
         
             
         }
            
          
            

        
     </script>
     <br>
<button type="submit" name="Set" class="btn btn-primary">Set</button>
        
        </form>
         
          <div class="top3">



          </div>
            
      

    </section>
  
    
    

    <script src="script.js"></script>
</body>
</html>