<script src="../Javascript/confirm.js"></script>
<?php
session_start();
include("connect.php");
if(isset($_POST['input'])){
    $input = $_POST['input'];

    $qurery = "SELECT * FROM Users WHERE nationalid  LIKE '{$input}%' or Fullname  LIKE '{$input}%' ";


    $reslut = mysqli_query($con,$qurery);

    if(mysqli_num_rows($reslut) > 0){?>
    <table class="table">
            <thead>
                <tr>
                    <th>Image</th>
                    <th>National ID</th>
                    <th>Full Name</th>
                    <th>Title</th>
                    <th>Blood Type</th>
                    <th>Place Of Issue</th>
                    <th>Date Of Issue</th>
                    <th>Date Of Birth</th>
                    <th>Place Of Birth</th>
                    <th>Gender</th>
                    <th>Expire Date</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php

                while($row = mysqli_fetch_assoc($reslut)){

                    echo "<tr>
                    <td> <img src=../upload/$row[v_image]></td>
                    <td> $row[nationalid]</td>
                    <td> $row[Fullname]</td>
                    <td> $row[title]</td>
                    <td> $row[bloodtype]</td>
                    <td> $row[placeofissue]</td>
                    <td> $row[dateofissue]</td>
                    <td> $row[dateofbirth]</td>
                    <td> $row[placeofbirth]</td>
                    <td> $row[gender]</td>
                    <td> $row[v_expiredate]</td>
                    <td> <a class='btn btn-primary btn-sm' href='../Admin/Edit Voter.php?id=$row[nationalid]'>edit</a></td>
                    <td style='padding-left:0px;'><form action='../Database/delete voter.php?rn=$row[nationalid]' method='POST' onsubmit='return submitForm(this);' style='padding:0px; padding-top:1px;'>

                       <button type='submit' style='padding: 7px; border: none; font-size: 11.1px; background-color: red; color: white; border-radius: 5px;'>Delete</button>
                       </form>
                       
                       </td>
        </tr>";
                   

                   


 $id = $row['nationalid'];
 
                    $FN = $row['Fullname'];
                    $TIT = $row['title'];
                    $BT = $row['bloodtype'];
                    $POI = $row['placeofissue'];
                    $DOI = $row['dateofissue'];
                    $DOB = $row['dateofbirth'];
                    $POB = $row['placeofbirth'];
                    $GEN = $row['gender'];
                    $EX = $row['v_expiredate'];

                }




                ?>
               
            </tbody>
        </table>

<?php


    }
    else{

        echo "<h6 class='text-danger text-center mt-3'> No data found </h6>";
    }



}

?>


<script>
    function submitForm(form) {
        swal({
            title: "delete this user!",
        
            icon: "warning",
            buttons: ["cancel","Delete"],
            dangerMode: true,
        })
        .then(function (isOkay) {
            if (isOkay) {
                
                form.submit();
                    
                alert("User deleted successfully");
                
                
            }
        });
        return false;
    }
    </script>

