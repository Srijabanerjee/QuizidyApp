<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
      <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="utf-8">
    <title></title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <?php include 'contact3.php' ?>
    <?php include 'sendemail.php' ?>
  </head>
  <body>

    

    <!--Contact section start-->
    <div class="contact-section">
      <div class="contact-info">
        <div><i class="fa fa-map-marker" aria-hidden="true"></i>West Burdwan,Asansol,India</div>
        <div><i class="fa fa-envelope" aria-hidden="true"></i>banerjeeofficial21@gmail.com</div>

        <div><i class="fa fa-clock" aria-hidden="true"></i>Mon - Fri 8:00 to 17:00</div>
      </div>
      <div class="contact-form">
        <h5>Contact Us</h5>
        <form class="contact" action="" method="POST">
          <input type="text" name="name" class="text-box1" placeholder="Your Name" required>
          <input type="email" name="email" class="text-box" placeholder="Your Email" required>
          <textarea name="message" rows="8" placeholder="Need any help/Any message" required></textarea>
          <input type="submit" name="submit" class="send-btn" value="Send">
        </form>
      </div>
    </div>
  </body>
</html>
