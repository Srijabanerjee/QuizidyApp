


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Online Ide</title>
    <?php include 'lang2.php' ?>
    <?php include 'lang3.php' ?>
  </head>
  <body>
<div class="header">Online Ide</div>
<div class="control-panel">
Select Language:
&nbsp; &nbsp;
<select class="languages" id="languages" onchange="changeLanguage()">
<option value="c">C</option>
<option value="cpp">C++</option>
<option value="php">PHP</option>
<option value="python">Python</option>

<option value="html">HTML CSS JS</option>
</select>
</div>
<div class="editor" id="editor"></div>
<div class="button-container">
<button type="button" name="button" onclick="executeCode()" class="btn" id="run">Run</button>
</div>
<div class="output" id="output"></div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<script src="jslib/ace.js"></script>
<script src="jslib/theme-monokai.js"></script>


<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>

  </body>
</html>
