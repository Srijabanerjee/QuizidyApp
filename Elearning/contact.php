<?php include 'C:\xampp\htdocs\Elearning\contact/contact2.php' ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <style type="text/css">
    *{
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: "Josefin Sans", sans-serif;
    }
    body{
      min-height: 100vh;
      background-color: black;
    background-size: cover;
    display: flex;
    justify-content: center;
    align-items: center;
    }
    .contact-section{
      width: 100%;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .contact-info{
      margin-right: 90px;
      color: #FFF;
      max-width: 500px;
      line-height: 65px;
      padding-left: 50px;
      font-size: 18px;
    }
    .contact-info i{
      margin-right: 20px;
      font-size: 25px;
    }
    .contact-form{
      max-width: 700px;
      margin-right: 50px;
    }
    .contact-info, .contact-form{
      flex: 1;
    }
    .contact-form h5{
      margin-right: 200px;
      color: #fff;
      text-align: center;
      font-size: 35px;
      text-transform: uppercase;
      margin-bottom: 30px;
    }
    .contact-form .text-box{
      background: #FFF;
      color: darkgreen;
      border-radius: 10px;
      border:none;
      width: calc(50% - 10px);
      min-width: 70px;
      max-width: 200px;
      height: 50px;
      padding: 12px;
      font-size: 20px;
      box-shadow: 0 1px 1px rgba(0,0,0,0.1);
      margin-bottom: 20px;
      opacity: 0.9;
    }
    .text-box1{
      background: #FFF;
      color: darkgreen;
      border-radius: 10px;
      border:none;
      width: calc(50% - 10px);
      min-width: 70px;
      max-width: 200px;
      height: 50px;
      padding: 12px;
      font-size: 20px;
      box-shadow: 0 1px 1px rgba(0,0,0,0.1);
      margin-bottom: 20px;
      opacity: 0.9;
    }
    .contact-form .text-box:first-child{
      margin-right: 15px;
    }
    .contact-form textarea{
      background: #fff;
      color: darkgreen;
      border: none;
      max-width: 300px;
      min-width: 420px;
      border-radius: 10px;
      padding: 12px;
      font-size: 20px;
      min-height: 200px;
      max-height: 400px;
      resize: vertical;
      box-shadow: 0 1px 1px rgba(0,0,0,0.1);
      margin-bottom: 20px;
      opacity: 0.9;
    }
    .contact-form .send-btn{
      position: relative;
      margin-left: 30%;
      float: right;
      background: #2E94E3;
      color: #FFF;
      width: 120px;
      height: 40px;
      font-size: 15px;
      border-radius: 10px;
      font-weight: 600;
      text-transform: uppercase;
      letter-spacing: 2px;
      transition: 0.5s;
      cursor: pointer;
      transition-property: background;
    }
    .contact-form .send-btn:hover{
      background: #0582E3;
    }
    @media screen and (max-width: 950px) {
      .contact-section{
        margin-left: 30px;
        flex-direction: column;
      }
    }
    .contact-info .contact-form{
      margin: 30px 50px;
    }
    .alert-success{

      z-index: 1;
      background: #D4EDDA;
      font-size: 18px;
      padding: 20px 40px;
      min-width: 420px;
      position: fixed;
      right: 0;
      top: 10px;
    border-left: 8px solid #3AD66E;
    }
    .alert-error{

      z-index: 1;
      background: #FFF3CD;
      font-size: 18px;
      padding: 20px 40px;
      min-width: 390px;
      position: fixed;
      right: 0;
      top: 10px;

    border-left: 8px solid #FFA502;
    border-radius: 5px;
    }

    </style>


















  </head>
  <body>

  </body>
</html>
