<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>HTML CSS JS</title>
  </head>
  <body>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
<script type="text/javascript">

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
  $(document).on("click","#Clear",function(){
    e.setValue("");
  })
});


</script>

</body>
</html>
