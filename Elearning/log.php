<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
<title>Login</title>
<?php include 'login2.php' ?>
</head>
<body>


  <script>
      alert("Sorry! Access denied.You are requested to login first then you can take the quiz.");
  </script>






    <?php
    include 'emailverification/dbcon2.php';

    if(isset($_POST['submit']))
    {
        $username = mysqli_real_escape_string($con, $_POST['username']);
        $email = mysqli_real_escape_string($con, $_POST['email']);
        $password = mysqli_real_escape_string($con, $_POST['password']);

        $pass = password_hash($password, PASSWORD_BCRYPT);
        $token = bin2hex(random_bytes(15));

        $emailquery = " select * from registration where email='$email' ";
        $query = mysqli_query($con,$emailquery);

        $emailcount = mysqli_num_rows($query);

        if($emailcount>0)
        {
          ?>
          <script>
              alert("Email already exist");
          </script>
          <?php
        }
        else
        {
              $insertquery = "insert into registration( username, email, password, token, status) values('$username','$email','$pass','$token','inactive')";
              $iquery = mysqli_query($con, $insertquery);

              if($iquery){

                $subject = "Email verification";
                $body = "Hi, $username. Click here to activate your account http://localhost/elearning/emailverification/activate.php?token=$token ";
                $sender_email = "From: banerjeeofficial21@gmail.com";

                if(mail($email, $subject, $body, $sender_email)) {
                  $_SESSION['msg'] = "Please check your mail and activate your account $email";
                  ?>
                  <script>
                      alert("Please check your mail.");
                  </script>
                  <?php
                  header('location:login1.php');

                } else{
                  ?>
                  <script>
                      alert("Can't able to send mail!Try again.");
                  </script>
                  <?php
                }

                }else{
                  ?>
                  <script>
                      alert("No Connection");
                  </script>
                  <?php
                }
              }
            }
        ?>


<?php
include 'emailverification/dbcon2.php';

if(isset($_POST['submit1'])){
  $email1 = $_POST['email1'];
  $password1 = $_POST['password1'];

  $email_search = " select * from registration where email='$email1' ";
  $query1 = mysqli_query($con,$email_search);

  $email_count = mysqli_num_rows($query1);

  if($email_count){
      $email_pass = mysqli_fetch_assoc($query1);

      $db_pass = $email_pass['password'];
      $_SESSION['username'] = $email_pass['username'];

      $pass_decode = password_verify($password1, $db_pass);

      if($pass_decode){

              if(isset($_POST['rememberme'])){

                setcookie('emailcookie',$email1,time()+86400);
                setcookie('passwordcookie',$password1,time()+86400);


                header('location:Start.php');
              }else{
                header('location:Start.php');
              }

              echo "logged in Successfully";
              ?>
              <script>
                  location.replace("Start.php");
              </script>
              <?php

      }else{
        echo "incorrect password";
      }
    }
      else {
            echo "invalid email insert valid email id";}}?>
<div class="hero">
      <div class="form-box">
      <div class="button-box">
        <div id="btn"></div>
        <button type="button" class="toggle-btn" onclick="login()">Log in</button>
        <button type="button" class="toggle-btn" onclick="signup()">Sign up</button>
        </div>


            <div>
              <p class="bg">
                <?php
                if(isset($_SESSION['msg'])){
                  echo $_SESSION['msg'];
                }else{
                  echo $_SESSION['msg'] = "";
                }
                 ?>
               </div>


        <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> " method="POST" id="Login" class="input-group">
          <input type="email" name="email1" class="input-field" placeholder="Enter valid email id" required value="<?php if(isset($_COOKIE['emailcookie'])) {echo $_COOKIE['emailcookie']; } ?>">
          <input type="password" name="password1" class="input-field" placeholder="Enter Password" required value="<?php if(isset($_COOKIE['passwordcookie'])) {echo $_COOKIE['passwordcookie']; } ?>">
          <br><br>
          <h5>Forgot password?<a href="FP.php">Click here</a></h5>
          <input type="checkbox" name="rememberme" class="check-box"><span>Remember me</span>
          <button type="submit" name="submit1" class="submit-btn" value="Log in">Log in</button></form>

<form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> " method="POST" id="Signup" class="input-group">
          <input type="text" name="username" class="input-field" placeholder="User Id" required>
            <input type="email" name="email" class="input-field" placeholder="Email Id" required>
          <input type="password" name="password" class="input-field" placeholder="Enter Password" required>

        <!--  <input type="checkbox" name="remember" class="check-box"><span></span> -->
        <br><br>
          <button type="submit" name="submit" class="submit-btn" value="signup">Sign up</button>
          <div id="alert" style="color: red"></div></form></div></div>
    <script type="text/javascript">
      var x=document.getElementById('Login');
      var y=document.getElementById('Signup');
      var z=document.getElementById('btn');

      function signup(){
        x.style.left = "-400px";
        y.style.left = "50px";
        z.style.left = "110px";
      }
      function login(){
        x.style.left = "50px";
        y.style.left = "450px";
        z.style.left = "0";
      }
    </script>




  </body>
</html>
