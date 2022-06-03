<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forgot password</title>
    <?php include 'FP2.php' ?>

  </head>
  <body>

    <?php
    include 'dbcon3.php';

    if(isset($_POST['submit']))
    {

        $email = mysqli_real_escape_string($con, $_POST['email']);


        $emailquery = " select * from registration where email='$email' ";
        $query = mysqli_query($con,$emailquery);

        $emailcount = mysqli_num_rows($query);

        if($emailcount>0)
        {
              $userdata = mysqli_fetch_array($query);
              $username = $userdata['username'];
              $token = $userdata['token'];

              $subject = "Password reset";
              $body = "Hi, $username. Click here to reset your password
              http://localhost:7882/elearning/emailverification/reset_password.php?token=$token ";
              $sender_email = "From: banerjeeofficial21@gmail.com";

              if(mail($email, $subject, $body, $sender_email)) {
                $_SESSION['msg2'] = "check $email <br>
                to reset your password";
                header('location:FP.php');
              } else{
                $_SESSION['passmsg2'] = "Sorry! Email not sent.Try again.";
              }
        } else{
           echo "Email not matched!";
        }
      }
  ?>


    <div class="hero">
          <div class="form-box">
          <div class="button-box">
            <div id="btn"></div>

            <button type="button" class="toggle-btn" onclick="signup()">Recover your account</button>
            </div>
            <div>
              <p class="bg">
                <?php
                if(isset($_SESSION['msg2'])){
                  echo $_SESSION['msg2'];
                }else{
                  echo $_SESSION['msg2'] = "";
                }
                 ?>
                 <?php
                 if(isset($_SESSION['passmsg2'])){
                   echo $_SESSION['passmsg2'];
                 }else{
                   echo $_SESSION['passmsg2'] = "";
                 }



                  ?>


              </p>
            </div>


            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> " method="POST" id="Signup" class="input-group">
              <input type="email" name="email" class="input-field" placeholder="Enter registered email id" required value="">
              <br><br>

              <button type="submit" name="submit" class="submit-btn" value="Sens email">Send email</button></form>

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
