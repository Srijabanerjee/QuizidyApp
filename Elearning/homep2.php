<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <style type="text/css">
  .element {
  width: 100%;
  height: 100%;
  animation: pulse 5s infinite;
}

@keyframes pulse {
  0% {
    background-color: #001F3F;
  }
  100% {
    background-color: #FF4136;
  }
}

html,
body {
  height: 100%;
}



/* ================= Header ============ */
header{
position: absolute;
top:0;
left: 0%;
width:100%;
margin:0;
padding: 0;
}

/* Header content & title & button*/
.header-content{
margin-top:25%;
text-align: center;
color:  #EFEEF5;
}
.header-content h1{
font-size: 3em;
letter-spacing: 0.5px;
}
.header-content p {
font-size: 20px;
line-height: 1.5;
margin: 20px auto;
}
.header-content button{
width: 140px;
margin:20px 10px;
color: #591BC5;
font-size: 17px;
border:1px solid #EFEEF5;
font-weight: 500;
background: #EFEEF5;
border-radius: 20px;
padding: 10px;
cursor:pointer;
transition: .3s;
}
.header-content button:hover{
border-radius: 0;
}

.Get{
    position: relative;
    margin-left: 30%;
    top: 210px;
    /*align-items: center;
    justify-content: center;*/
}






.started{
  position: relative;
  top: 40px;
  margin-left: 5%;
  display: inline-block;
  padding: 15px 30px;
  color: white;
  letter-spacing: 4px;
  text-decoration: none;
  font-size: 24px;
  overflow: hidden;
  transition: 0.2s;
}
.started:hover
{
  color: purple;
  background: white;
  box-shadow: 0 0 10px white, 0 0 40px white, 0 0 80px
              white;
  border-radius: 20%;
  transition-delay: 1s;
}
a span{
  position: absolute;
  display: block;
}
a span:nth-child(1)
{
  top: 0;
  left: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(90deg,transparent,purple);
}
a:hover span:nth-child(1)
{
  left: 100%;
  transition: 1s;
}
a span:nth-child(3)
{
  bottom: 0;
  right: -100%;
  width: 100%;
  height: 2px;
  background: linear-gradient(270deg,transparent,purple);
}
a:hover span:nth-child(3)
{
  right: 100%;
  transition: 1s;
  transition-delay: 0.5s;
}
a span:nth-child(2)
{
  top: -100%;
  right: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(180deg,transparent,purple);
}
a:hover span:nth-child(2)
{
  top: 100%;
  transition: 1s;
  transition-delay: 0.5s;
}
a span:nth-child(4)
{
  bottom: -100%;
  left: 0;
  width: 2px;
  height: 100%;
  background: linear-gradient(360deg,transparent,purple);
}
a:hover span:nth-child(4)
{
  bottom: 100%;
  transition: 1s;
  transition-delay: 0.75s;
}












  </style>
  </head>
  <body>

  </body>
</html>
