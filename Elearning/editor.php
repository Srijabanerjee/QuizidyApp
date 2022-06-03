<!doctype html>
<html lang="en">
  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Editor</title>
    <style type="text/css">
      .btn{
        background-color: red;
      }
      .btn1{
        position: relative;
        top: 2px;
        background-color: green;
        width: 70px;
        height: 35px;
        border-radius: 5px;
        cursor: pointer;
      }
    </style>


  </head>
  <body>
<div class="container-fluid">
<br><br>
<h4 class="text-center">HTML CSS JS</h4>
<hr>
<div class="row">
  <div class="col-md-6 col-sm-12" >
    <div class="card" >
      <div class="card-header">
        <div class="float-left" >
          <h3 class="text-info">Code area</h3>
        </div>
        <div class="float-right">
          <div class="form-group">
            <input type="button" class="btn"  style="color:white" value="Erase" id="Clear">
            <input type="button" class="btn1" style="color:white" value="Run" id="run">
          </div>
        </div>
      </div>
      <div class="card-body">
          <div id="myEditor" style="min-height: 90vh" >

          </div>
      </div>
    </div>
  </div>
<div class="col-md-6 col-sm-12">
  <div class="card" style="min-height: 105vh;">
    <div class="card-header">
    <h3 class="text-info">Output</h3>
    </div>



    <div class="card-body" id="output">

    </div>
  </div>
</div>
</div>
</div>
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/ace/1.4.12/ace.js"></script>
<script type="text/javascript">

var e=ace.edit('myEditor');
e.getSession().setMode("ace/mode/html")
e.setTheme("ace/theme/cobalt")


var f=ace.edit('output');

f.setTheme("ace/theme/solarized_light")


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
