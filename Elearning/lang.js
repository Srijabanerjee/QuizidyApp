let editor;

window.onload = function() {
  editor = ace.edit("editor");
  editor.setTheme("ace/theme/monokai");
  editor.session.setMode("ace/mode/c_cpp");
}

function changeLanguage() {
  let language = $("#languages").val();

  if(language == 'c' || language == 'cpp')editor.session.setMode("ace/mode/c_cpp");
  else if(language == 'php')editor.session.setMode("ace/mode/php");
  else if(language == 'python')editor.session.setMode("ace/mode/python");

  else if(language == 'html'){

    

    var e=ace.edit('editor');
    e.getSession().setMode("ace/mode/html")
    e.setTheme("ace/theme/xcode")

    e.setValue(`<!DOCTYPE html>
    <html>
      <head>
        <title></title>
        </head>
        <body>
          <h1>Hello User!</h1>
          <h2>Hello User!</h2>
          <h3>Hello User!</h3>
          <h4>Hello User!</h4>
          <h5>Hello User!</h5>
          <h6>Hello User!</h6>
      </body>
    </html>
      `)
    $(document).ready(function(){
      $(document).on('click',"#run",function(){
        var code = e.getValue();
          $("#output").html(code);
      })
    });


  }


  }


function executeCode(){
  $.ajax({
    url: "compile.php",

    method: "POST",

    data: {
      language: $("#languages").val(),
      code: editor.getSession().getValue()
    },
    success: function(response) {
      $(".output").text(response)
    }
  })
}
