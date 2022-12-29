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
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../css/styl.css">
     
   
    <link rel="stylesheet" href="https://unicons.iconscout.com/release/v4.0.0/css/line.css">
    <title>Panel</title>
</head>
<body>
    <style>
        body{
            
            background-color: white;
            zoom: 80%;
        }
        .chartbox{
            margin-top: 5%;
            margin-left: 15%;
            width: 1500px;
        }
    </style>
<nav>
        <div class="logo-name">
        <div class="logo-image">
                <img src="../upload/KRG.png" alt="">
            </div>

            <span class="logo_name">Dashboard</span>
        </div>

        <div class="menu-items">
            <ul class="nav-links">
                <li><a href="../User/Home.php">
                    <i class="uil uil-estate"></i>
                    <span class="link-name">Home</span>
                </a></li>
                <li><a href="../User/Vote.php">
                    <i class="uil uil-files-landscapes"></i>
                    <span class="link-name">Vote</span>
                </a></li>
                <li><a href="../User/Panel.php">
                    <i class="uil uil-chart"></i>
                    <span class="link-name">Panel</span>
                </a></li>
                <li><a href="../User/Feed.php">
                    <i class="uil uil-thumbs-up"></i>
                    <span class="link-name">Feed</span>
                </a></li>
                
               
            </ul>
            
            
        
        </div>
    </nav>
    <?php
    $connect = mysqli_connect("localhost","root","","Voting-System-DB");
    $query = "SELECT * FROM Panel";
    
    $result = mysqli_query($connect,$query);
    $voting =  array();
    while($row=mysqli_fetch_array($result)){
        $voting[] = $row["Votes"];
    }
    $run = "SELECT * FROM Panel";
    $res = mysqli_query($connect,$run);
    $parties = array();
    while($row=mysqli_fetch_array($res)){
        $parties[] = $row["Party_Name"];
    }

?>




    <div class="chartbox">
  <canvas id="myChart"></canvas>
</div>

<script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
<script>
   var barColors = ["#8FBC8F", "#D8BFD8","#B0C4DE","#D2B48C","#A0522D","#87CEEB","#CD853F","#800000","#7B68EE","#DDA0DD","#AFEEEE","#808000","#000080","#2E8B57","#4682B4"];
    const voting = <?php echo json_encode($voting);  ?>;
    const parties = <?php echo json_encode($parties); ?>;
    const data = {
    labels: parties,
      datasets: [{
        label: 'Total Votes ',
        data: voting,
        borderWidth: 1,
        backgroundColor: barColors
      }]
    };

    const config = {
    type: 'bar',
    data,
    options: {
      scales: {
        y: {
          beginAtZero: true
        }
      }
    }
    };

    const myChart = new Chart(
        document.getElementById('myChart'),
        config
    );

</script>


</body>
</html>
