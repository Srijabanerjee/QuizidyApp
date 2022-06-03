<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Online chating bot</title>
    <?php include 'chat1.php' ?>
  </head>
  <body>
    <div id="container" class="">
      <div id="bot1"></div>
      <div id="bot2"></div>
      <div id="screen">
        <div id="header">ONLINE CHATBOT</div>
        <div id="messageDisplaySection">
          <!--<div class="chat botMessages">Hello user.How can I help you?</div>

          <div class="messagesContainer">
            <div class="chat userMessages">I need your help regarding my courses which I have purchased.</div>
        </div>-->
        </div>

        <div id="userInput">
          <input type="text" name="messages" id="messages" autocomplete="off" placeholder="Type your message here." required>
          <input type="submit" name="send" id="send" value="send">
        </div>
      </div>
    </div>

    <!--jQuery CDN-->

<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>

<!--jquery start-->
<script>
  $(document).ready(function(){
    $("#messages").on("keyup",function(){

      if($("#messages").val()){
        $("#send").css("display","block");
      }else{
        $("#send").css("display","none");
      }
    });
  });
  $("#send").on("click",function(e){
    $userMessages = $("#messages").val();
    $appendUserMessages = '<div class="chat userMessages">'+ $userMessages +'</div>';
    $("#messageDisplaySection").append($appendUserMessages);

//ajax start//

$.ajax({
  url: "bott.php",
  type: "POST",

  data: {messageValue: $userMessages},
  success: function(data){
    $appendBotResponse = '<div class="messagesContainer"><div class="chat botMessages">'+data+'</div></div>';
    $("#messageDisplaySection").append($appendBotResponse);

  }

});
$("#messages").val("");
$("#send").css("display","none");

  })
</script>
</body>
</html>
