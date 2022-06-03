<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Reset password</title>
    <?php include 'C:\xampp\htdocs\Elearning/FP2.php' ?>

  </head>
  <body>

    <?php
    include 'C:\xampp\htdocs\Elearning/dbcon3.php';

    if(isset($_POST['submit']))
    {
          if(isset($_GET['token'])){
$token = $_GET['token'];
$newpassword = mysqli_real_escape_string($con, $_POST['password']);
$npass = password_hash($newpassword, PASSWORD_BCRYPT);
$updatquery = " update registration set password='$npass' where token='$token' ";

$iquery = mysqli_query($con, $updatquery);
if($iquery){
  $_SESSION['msg1'] = "Your password has been updated.
                       Please logout and login again.";

 header('location:reset_password.php');}
else{
      $_SESSION['passmsg'] = "Your password has not been updated";
          header('location:reset_password.php');
        }
      }else{
        ?>
        <script>
            alert("No token found");
        </script>
        <?php
      }
    }
  ?>


    <div class="hero">
    
          <div class="form-box">
          <div class="button-box">
            <div id="btn"></div>

            <button type="button" class="toggle-btn" onclick="signup()">Reset your password</button>
            </div>

            <div>
              <p class="bg">
                <?php
                if(isset($_SESSION['msg1'])){
                  echo $_SESSION['msg1'];
                }else{
                  echo $_SESSION['msg1'] = "";
                }
                 ?>
                 <?php
                 if(isset($_SESSION['passmsg'])){
                   echo $_SESSION['passmsg'];
                 }else{
                   echo $_SESSION['passmsg'] = "";
                 }



                  ?>


              </p>
            </div>

            <form action="" method="POST" id="Signup" class="input-group">
                <input type="password" name="password" class="input-field" placeholder="Enter new Password" required>
              <br><br>

              <button type="submit" name="submit" class="submit-btn" value="">Submit</button></form>


  </div></div>
        <script type="text/javascript">
          var y=document.getElementById('Signup');
          var z=document.getElementById('btn');

          function signup(){
            y.style.left = "50px";
            z.style.left = "110px";
          }

        </script>


  </body>
</html>
