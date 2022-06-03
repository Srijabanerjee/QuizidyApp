<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Quizidy</title>
    <?php include 'h2.php' ?>
  </head>
  <body>
    <h1 class="E"></h1>
    <div class="container">
      <div class="card">
        <div class="c1">
          <h3>Enjoy</h3>
        </div>
        <div class="content">
          <h2>Hello!</h2>
        </div>
      </div>
      <div class="card">
        <div class="c1">
          <h3>Your</h3>
        </div>
        <div class="content">
          <h2>Do you want to practice more and more?</h2>
        </div>
      </div>
      <div class="card">
        <div class="c1">
          <h3>Study</h3>
        </div>
        <div class="content">
          <a href="Elearning/Start.php"><h2 class="l">Let's Start</h2></a>
        </div>
      </div>
    </div>
    <script type="text/javascript" src="vanilla-tilt.js"></script>
    <script>
    VanillaTilt.init(document.querySelectorAll(".card"), {
		max: 25,
		speed: 400,
    glare: true,
    "max-glare": 1,
	});
    </script>
    </body>
    </html>
