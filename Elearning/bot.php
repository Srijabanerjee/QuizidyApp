<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <?php include 'bot2.php'?>
    <?php include 'db.php' ?>
     <script type="text/javascript" href="chatbot.js"></script>
    <link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">

  </head>
  <body>

    <div class="chat_icon">
      <img src="cb.png" alt="chat" width="100px">
    </div>

    <div class="chatbot-box">
      <div id="chatList">
        <ul>

        </ul>
      </div>
      <div class="message-box-wrap">
        <div class="message-box">

        </div>
        <button class="btn" id="send"> <img src="send2.png" width="30px"> </button>
      </div>


<div class="admin-client-message-wrap">
<select name="service" data-question="I am here to help you">
<select>Please select</select>
<select>Course problem</select>
<select>Price problem</select>
<select>Assignment problem</select>
<select>Others</select>
</select>
<input type="text" name="name" data-question="What is your name">
<input type="text" name="email" data-question="Your email id" data-name
required>
<input type="text" name="Phone No." data-question="Your phone no">
<div data-question="All the data which you have given are correct?">
<button id="All the data which you have given are correct">Yes</button>
<button id="All the data which you have given are not correct">No</button>
</div>
</div>
<form id="submit_info_form">
<div class="submit_info"></div>
<input type="submit" name=""  id="submit" value="send">
</form>
</div>







<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script type="text/javascript" src="js/custom.js"></script>


  </body>
</html>
