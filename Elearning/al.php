<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Quizes</title>
    <?php include 'slice2.php' ?>

  </head>
  <body>



    <div class="main-div">

      <div class="inner-div">


        <h1 class="question">Quizes</h1><br>
        <ul>
          <li>
            <input type="radio" name="answer" id="ans1" class="answer">
            <label for="ans1" id="option1">Answer option</label>
          </li>
          <li>
            <input type="radio" name="answer" id="ans2" class="answer">
            <label for="ans2" id="option2">Answer option</label>
          </li>
          <li>
            <input type="radio" name="answer" id="ans3" class="answer">
            <label for="ans3" id="option3">Answer option</label>
          </li>
          <li>
            <input type="radio" name="answer" id="ans4" class="answer">
            <label for="ans4" id="option4">Answer option</label>
          </li>
        </ul>
        <button id="submit">Submit</button>
        <div id="showscore" class="scoreArea">

        </div>
      </div>
    </div>
    <script type="text/javascript" src="al.js">

    </script>
  </body>
</html>
