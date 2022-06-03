<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<link rel="stylesheet" href="css1/bootstrap.min.css">
<link rel="stylesheet" href="css1/all.min.css">
<?php include 'C:\xampp\htdocs\css/Main2.php' ?>
<link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Ubuntu:wght@700&display=swap">
<title>lSchool</title>
</head>
<body>
<div class="row">
<div class="col-md-6">
<div class="left">


  <div class="container1">
    
  <div class="box shadow3">
  <div class="box shadow4">
    <div class="clock">
      <div class="hour">
        <div class="hr" id="hr"></div>
      </div>
      <div class="min">
        <div class="mn" id="mn"></div>
      </div>
      <div class="sec">
        <div class="sc" id="sc"></div>
      </div>
    </div>
    <script type="text/javascript">
    const deg = 6;
    const hr = document.querySelector('#hr');
    const mn = document.querySelector('#mn');
    const sc = document.querySelector('#sc');

    setInterval(() => {
      let day = new Date();
      let hh = day.getHours() * 30;;
      let mm = day.getMinutes() * deg;;
      let ss = day.getSeconds() * deg;;

      hr.style.transform = `rotateZ(${(hh)+(mm/12)}deg)`;
      mn.style.transform = `rotateZ(${mm}deg)`;
      sc.style.transform = `rotateZ(${ss}deg)`;
    })

    </script>
  </div>
  </div>
  </div>

</div>
</div>
<div class="col-md-6">
<div class="right">

<div class="container">
<div class="box shadow1">
<div class="box shadow2">
  <img class="ico1" src="back3.png" alt="">

    <img class="ico2" src="back4.png" alt="">
  <img class="ico3" src="power.png" alt="">
  <div class="pos-f-t">
  <div class="collapse" id="navbarToggleExternalContent">
    <div class="nav bg-light p-7">
        <ul class="navbar-nav custom-nav pl-5">
        <li class="nav-item custom-nav-item"> <a href="Main.php" class="nav-link"><b>Home</b></a></li>
        <li class="nav-item custom-nav-item"> <a href="#" class="nav-link"><b>Courses</b></a></li>
        <li class="nav-item custom-nav-item"> <a href="#" class="nav-link"><b>Payment</b></a></li>
        <li class="nav-item custom-nav-item"> <a href="#" class="nav-link"><b>Profile</b></a></li>
        <li class="nav-item custom-nav-item"> <a href="#" class="nav-link"><b>Logout</b></a></li>
        <li class="nav-item custom-nav-item"> <a href="#" class="nav-link"><b>Login/Signup</b></a></li>
        <li class="nav-item custom-nav-item"> <a href="#" class="nav-link"><b>Contact</b></a></li>
        </ul>
    </div>
  </div>
  <nav class="navbar navbar-light bg-black">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

  </nav>
</div>
</div>
</div>
</div>

</div>
</div>
</div>


<script src="js/jquery.min.js"></script>
<script src="js/proper.min.js"></script>
<script src="js/bootstrap.min.js"></script>

<script src="C:\xampp\htdocs\Elearning\js/all.min.js"></script>
</body>
</html>
