<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Forgot password</title>
    <?php include 'regis1.php' ?>


  </head>
  <body>

    <?php
    include 'dbcon2.php';

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
                $body = "Hi, $username. Click here to activate your account http://localhost:7882/elearning/emailverification/activate.php?token=$token ";
                $sender_email = "From: banerjeeofficial21@gmail.com";

                if(mail($email, $subject, $body, $sender_email)) {
                  $_SESSION['msg'] = "Please check your mail and activate your account $email";
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


    <div class="hero">
          <div class="form-box">
          <div class="button-box">
            <div id="btn"></div>

            <button type="button" class="toggle-btn" onclick="signup()">Sign up</button>
            </div>

            <form action="<?php echo htmlentities($_SERVER['PHP_SELF']); ?> " method="POST" id="Signup" class="input-group">
                      <input type="text" name="username" class="input-field" placeholder="User Id" required>
                        <input type="email" name="email" class="input-field" placeholder="Email Id" required>
                      <input type="password" name="password" class="input-field" placeholder="Enter Password" required>

                    <!--  <input type="checkbox" name="remember" class="check-box"><span></span> -->
                    <br><br>
                      <button type="submit" name="submit" class="submit-btn" value="signup">Sign up</button>
                      <div id="alert" style="color: red"></div></form>

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
