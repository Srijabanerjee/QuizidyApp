<!DOCTYPE html>
<html>
<head>
<title></title>
<style type="text/css">
@import "https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css";
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
  background: #ffa07a;
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
  width: 340px;
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

</style>
</head>
<body>
</body>
</html>
