<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title></title>
<style type="text/css">
@import url('https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800,900&display=swap');

*{
  margin:0;
  padding:0;
  box-sizing: border-box;
  font-family: 'Poppins', sans-serif;
}
body{
  display: flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: #ffe4c4;
}
body::before{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(#bdb76b,#8b008b);
  clip-path: circle(30% at right 75%);
}
body::after{
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background: linear-gradient(#bdb76b,#8b008b);
  clip-path: circle(20% at 10% 10%);
}
.E{
  position: relative;
  color: rgba(50, 0, 0, 0.7);
  font-family: serif;
  z-index: 1;
}
.container{
  position: relative;
  display: flex;
  justify-content: center;
  align-items: center;
  max-width: 1200px;
  flex-wrap: wrap;
  z-index: 1;
}
.container .card{
  position: relative;
  width: 280px;
  height: 400px;
  margin: 30px;
  box-shadow: 20px 20px 50px rgba(0,0,0,0.5);
  border-radius: 15px;
  background: rgba(255, 255, 255, 0.1);
  overflow: hidden;
  display: flex;
  justify-content: center;
  align-items: center;
  border-top: 1px solid rgba(255,255,255,0.5);
  border-left: 1px solid rgba(255,255,255,0.5);
  backdrop-filter: blur(5px);
}
.container .card .content{
  padding: 20px;
  text-align: center;
  transform: translateY(100px);
  opacity: 0;
  transition: 0.5s;

}
.container .card:hover .content{
  transform: translateY(0px);
  opacity: 1;
}
.container .card .content h1{
  color: rgba(255,255,255,0.8);
  cursor: pointer;
}
.c1{
  position: absolute;
  top: -5px;
  /*left: 30px;*/
  color: rgba(0,0,0,0.5);
  font-size: 3em;
}
.container .card .content a{
  color: rgba(255,255,255,0.8);
}
.l{
  text-decoration: none;
  color: #000;
}



</style>
</head>
<body>
</body>
</html>
