

questionFirst = $('[data-question]:first').attr('data-question');
$('#chatList ul').append('<li class="admin-message">'+questionFirst+'</li>');

$('[data-question]:first').appendTo('.message-box');

$("#send").click(function(event){
questionVal = $('.message-box [data-question]').val();
$("#chatList ul").append('<li class="client-message">'+questionVal+'</li>');
dataName = $('.admin-client-message-wrap [data-name]').attr('data-question');
if($('.message-box [name]').attr('name')== "name"){
    nameVal = $('.message-box [name]').val();
    $('.admin-client-message-wrap [data-name]').attr('data-question',"Hi " +nameVal+",</br>"+dataName );
}

$('.message-box [data-question]').appendTo('.submit_info');


if($('.admin-client-message-wrap').children().length != 0){
    questionFirst = $('[data-question]:first').attr('data-question');
    $('#chatList ul').append('<li class="admin-message">'+questionFirst+'</li>');
    $('[data-question]:first').appendTo('.message-box');
$('#send').css({"pointer-events":"none"});
    $('.message-box [data-question]').bind('click change key', function(event){
        if($(this).val() == ""){
          $('#send').css({"pointer-events":"none"});
        }else{
          $('#send').css({"pointer-events":"auto"});
        }
        }
    });

$('#chatList').animate({scrollTop:5000})
});

$('.message-box [data-question]').bind('click change key', function(event){
    if($(this).val() == ""){
      $('#send').css({"pointer-events":"none"});
    }else{
      $('#send').css({"pointer-events":"auto"});
    }
});
