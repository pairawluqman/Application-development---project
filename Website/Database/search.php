<script src="../Javascript/confirm.js"></script>
<?php
session_start();
include("connect.php");
if(isset($_POST['input'])){
    $input = $_POST['input'];

    $qurery = "SELECT * FROM User WHERE National_ID  LIKE '{$input}%' or Fullname  LIKE '{$input}%' ";


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
                    <td> <img src=../upload/$row[VoterImage]></td>
                    <td> $row[National_ID]</td>
                    <td> $row[FullName]</td>
                    <td> $row[Title]</td>
                    <td> $row[BloodType]</td>
                    <td> $row[PlaceOfIssue]</td>
                    <td> $row[DateOfIssue]</td>
                    <td> $row[DateOfBirth]</td>
                    <td> $row[PlaceOfBirth]</td>
                    <td> $row[Gender]</td>
                    <td> $row[ExpireDate]</td>
                    <td> <a class='btn btn-primary btn-sm' href='../Admin/Edit Voter.php?id=$row[National_ID]'>edit</a></td>
                    <td style='padding-left:0px;'><form action='../Database/delete voter.php?rn=$row[National_ID]' method='POST' onsubmit='return submitForm(this);' style='padding:0px; padding-top:1px;'>

                       <button type='submit' style='padding: 7px; border: none; font-size: 11.1px; background-color: red; color: white; border-radius: 5px;'>Delete</button>
                       </form>
                       
                       </td>
        </tr>";
                   

                   


 $id = $row['National_ID'];
 
                    $FN = $row['FullName'];
                    $TIT = $row['Title'];
                    $BT = $row['BloodType'];
                    $POI = $row['PlaceOfIssue'];
                    $DOI = $row['DateOfIssue'];
                    $DOB = $row['DateOfBirth'];
                    $POB = $row['PlaceOfBirth'];
                    $GEN = $row['Gender'];
                    $EX = $row['ExpireDate'];

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

