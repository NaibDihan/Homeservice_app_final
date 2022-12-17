<?php
include("../config/constants.php");

$username = $_GET['username'];

$sql = "SELECT * FROM tbl_company_info WHERE username = '$username'";
$res = mysqli_query($conn,$sql) or mysqli_error($conn);
if($res){
  $count = mysqli_num_rows($res);  //function to get number of rows in database

                 //Check the number of rows
                 if($count>0)
                 {
                     //we have data in database
                     while($rows=mysqli_fetch_assoc($res)) 
                  {
                      //using while loop to get all the from database
                      //while loop will run as long as we have data in database

                      //get individual data
                      $username = $rows['username'];
                      $com_name= $rows['com_name'];
                      $com_img =$rows['com_img'];

                  $sql5 = "SELECT * FROM tbl_addedres_front WHERE username = '$username'";
                   $res5 = mysqli_query($conn,$sql5) or mysqli_error($conn);
                  if($res5){
                    $count5 = mysqli_num_rows($res5);  //function to get number of rows in database

                 //Check the number of rows
                 if($count5>0)
                 {
                  echo "
                  <script>
                  alert('This Restaurant has already been Added to Website');
                  window.location.href = 'manage-restaurant.php';
                    </script>
                  ";
                 }
                 else{
                  $sql1 = "INSERT INTO tbl_addedres_front SET
                  username='$username',
                  com_name = '$com_name',
                  com_img = '$com_img'
                  ";

                  $res1 = mysqli_query($conn,$sql1) or mysqli_error($conn);
                  if($res1)
                  {
                  echo "
                  <script>
                  alert('Added Restaurant to Website');
                  window.location.href = 'manage-restaurant.php';
                  </script>
                  ";
                  }
                 }
                     //we have data in database

                      


}
                 }
                }
              }


?>