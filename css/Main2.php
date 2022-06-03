<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
.left,.right{
  height: 200vh;
  width: 110%;

}
@media screen and (min-width: 768px) {
  .left, .right{
  height: 200vh;
}
}
.left{
  background: white;
}
.right{
  background: #091921;

}
.container{
position: relative;
display: flex;
flex-direction:
}
.container .box{
position: absolute;
width: 400px;
height: 600px;
background: black;
top: 50px;
margin-left:10%;
}
.container .box.shadow1{
box-shadow: -30px 30px 20px 0;
border-radius: 55px;
}
.box.shadow1 .box.shadow2{
  position: relative;
  top: 7px;
  margin-left: 2%;
  border-radius: 55px;
  width: 385px;
  height: 590px;
  background: #fff;
}
.ico1{
  position: relative;
  width: 50px;
  height: 50px;
  top: 500px;
  margin-left: 70%;
  cursor: pointer;
}
.ico2{
  position: relative;
  width: 50px;
  height: 50px;
  top: 450px;
  margin-left: 20%;
  cursor: pointer;
}
.ico3{
  position: relative;
  width: 50px;
  height: 50px;
  top: 450px;
  margin-left: 10%;
  cursor: pointer;
}
.container1{
position: relative;
display: flex;
flex-direction:
}
.container1 .box{
position: absolute;
width: 400px;
height: 600px;
background: black;
top: 50px;
margin-left:10%;
}
.container1 .box.shadow3{
box-shadow: -30px 30px 20px 0;
border-radius: 55px;
margin-left: 10%;
}
.box.shadow3 .box.shadow4{
  position: relative;
  top: 7px;
  margin-left: 2%;
  border-radius: 55px;
  width: 385px;
  height: 590px;
  background: #091921;
}
.clock{
  position: relative;
  top: 80px;
  margin-left: 20%;
  width: 250px;
  height: 250px;
  display: flex;
  justify-content: center;
  align-items: center;
  border: 3px solid #fff;
  border-radius: 50%;
  box-shadow: 0 -15px 15px rgba(255, 255, 255, 0.05),
              inset 0 -15px 15px rgba(255, 255, 255, 0.05),
              0 15px 15px rgba(0, 0, 0, 0.3),
              inset 0 15px 15px rgba(0, 0, 0, 0.3);
}
.clock:before{
  content: '';
  position: absolute;
  width: 15px;
  height: 15px;
  background: #fff;
  border-radius: 50%;
  z-index: 10000;
}
.clock .hour,
.clock .min,
.clock .sec
{
  position: absolute;
}
.clock .hour, .hr{
  width: 160px;
  height: 130px;
}
.clock .min, .mn{
  width: 190px;
  height: 170px;
}
.clock .sec, .sc{
  width: 230px;
  height: 200px;
}
.hr, .mn, .sc{
  display: flex;
  justify-content: center;
  /*align-items: center;*/
  position: absolute;
  border-radius: 50%;

}
.hr:before{
  content: '';
  position: absolute;
  width: 6px;
  height: 80px;
  background: #ff105e;
  z-index: 10;
  border-radius: 6px 6px 0 0;
}
.mn:before{
  content: '';
  position: absolute;
  width: 4px;
  height: 110px;
  background: #fff;
  z-index: 11;
  border-radius: 6px 6px 0 0;
}
.sc:before{
  content: '';
  position: absolute;
  width: 2px;
  height: 150px;
  background: #fff;
  z-index: 12;
  border-radius: 6px 6px 0 0;
}
.navbar-toggler{
  position: relative;
  top: 0.08px;
  color:black;
  margin-left: 80%;
  border-radius: 10px;
}
.navbar-brand{
  font-family: 'Ubuntu', sans-serif;
  font-size: 2em;
  font-weight: bold;
}
.custom-nav .custom-nav-item a{
  color: purple !important;
}
.custom-nav-item:hover{
  background-color: pink;
  border: solid pink 1px;
  border-radius: 60px;
}

.navbar{
  top: 20px;
  border-radius: 30px;
}
.nav{
  position: relative;
  width: 170px;
  border-radius: 30px;
  top: 30px;
  margin-left: 50%;
}
.t1{
  position: absolute;
  top: 30px;
  margin-left: 50%;
}












</style>
</head>
<body>

</body>
</html>
