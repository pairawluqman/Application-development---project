<?php
session_start();
if(!isset($_SESSION['userdata'])){
    header("location:../");
}

$userdata = $_SESSION['userdata'];


?>


<!DOCTYPE html>

<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compat ible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
   
    <link rel="stylesheet" href="../css/styl.css">
     
   
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">

    <title>Modify Voter</title> 
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
       
        p {
           
          text-align: center;
          font-size: 60px;
                   
          font-family:'Times New Roman', Times, serif;
          
          flex-direction: column;
         
        
          
          
        
        
        }
        #count{
            text-align: center;
          font-size: 60px;
                   
          font-family:'Times New Roman', Times, serif;
          position: absolute;
          top: 250px;
          right: 40%;
        }
        #test{
            position: absolute;
            top: 100px;
            background-color: gray;
        }
        #res{
            background-color: gray;
            width: 50px;
            height: 25px;
        }
       #searchresult{
        position: absolute;
       top: 150px;
       
       }
       #search-jv{
        position: absolute;
       top: 100px;
       
       }
       
        </style>
</head>
<body style="margin: 50px;">
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
                    <span class="link-name">setup election</span>
                </a></li>
                <li><a href="../Admin/AddVoter.php">
                <i class="uil uil-user-plus"></i>
                    <span class="link-name">Add Voter</span>
                </a></li>
                <li><a href="../Admin/Modify Voter.php">
                    <i class="uil uil-user-times"></i>
                    <span class="link-name">Modify Voter</span>
                </a></li>
                <li><a href="../Admin/Add News.php">
                    <i class="uil uil-file-plus-alt"></i>
                    <span class="link-name">Addnews</span>
                </a></li>
               
            </ul>
            
           
        </div>
    </nav>

    <section class="dashboard">
        <div class="top">

           

        <div class="top1"> 
        <div class="container my-3">
                <h2>Voters</h2>
            </div>
           <input type="text" class="form-con" id="search-jv" autocomplete="off" placeholder="search by National ID or Name" size="150">
       
     
       
        </div>
        <div id="searchresult"></div>

        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.1/jquery.min.js"></script>
        <script type="text/javascript">
            $(document).ready(function(){

                $("#search-jv").keyup(function(){

                    var input = $(this).val();
                    //alert(input);

                    if(input != ""){
                        $.ajax({
                            url:"../Database/search.php",
                            method:"POST",
                            data:{input:input},

                            success:function(data){
                                $("#searchresult").html(data);
                            }

                        })
                    }
                    else{
                        $("#searchresult").css("display","");
                    }
                });

            });
        </script>
            
        </div>

</div>
<div id="sub">
</div>

    </section>
 
    

    <script src="script.js"></script>
    
</body>
</html>