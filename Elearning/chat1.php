<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title></title>
<style type="text/css">

*{
  margin: 0;
  padding: 0;
  font-family: sans-serif;
  box-sizing: border-box;
}

#container{
  height: 100vh;
  width: 100%;
  position: relative;
  display: grid;
  place-items: center;
  background: #f6f6f6;
  overflow: hidden;
}
#bot1{
  height: 500px;
  width: 500px;
  position: absolute;
  top: -200px;
  right: -200px;
  background:  hsl(205, 36%, 80%);
  border-radius: 50%;
}
#bot2{
  height: 500px;
  width: 500px;
  position: absolute;
  bottom: -200px;
  left: -200px;
  background:  hsl(205, 36%, 23%);
  border-radius: 50%;
}

#screen{
  height: 670px;
  width: 350px;
  border-radius: 30px;
  background: #f6f6f6;
  border-radius: 25px;
  border: 15px solid #FFF;
  box-shadow: 3px 3px 15px rgba(0,0,0,0.2);
  position: relative;
  overflow: hidden;
}
#header{
  height: 80px;
  width: 100%;
  position: absolute;
  top: 0;
  left: 0;
  background: hsl(205, 36%, 51%);
  display: grid;
  place-items: center;
  font-size: 25px;
  color: #fff;
  font-weight: bold;
  text-shadow: 1px 1px 2px #000000a1;
}
#messageDisplaySection{
  height: 450px;
  width: 100%;
  position: absolute;
  left: 0;
  top: 100px;
  padding: 0 20px;
  overflow: auto;
}

.chat{
  max-width: 60%;
  min-height: 40px;
  padding: 15px;
  border-radius: 10px;
  margin: 15px 0;
}
.botMessages{
  background: hsl(205, 36%, 80%);
  color: #FFF;
  text-shadow: 1px 1px 2px #000000d4;
}
.messagesContainer{
  height: auto;
  width: 100%;
  display: flex;
  justify-content: flex-end;
}
.userMessages{
  background: #00000010;
}

#userInput{
  height: 50px;
  width: 90%;
  position: absolute;
  left: 5%;
  bottom: 3%;
  background: #FFF;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 2px 2px 8px rgba(0,0,0,0.1);
}
#messages{
  height: 50px;
  width: 90%;
  position: absolute;
  left: 0;
  border: 2px solid hsl(205, 36%, 51%);
  outline: none;
  background: transparent;
  padding: 0px 15px;
  font-size: 18px;
}
::placeholder{
  color: grey;
}
#send{
  height: 50px;
  width: 25%;
  position: absolute;
  right: 0;
  border: 2px solid hsl(205, 36%, 51%);
  outline: none;
  display: grid;
  place-items: center;
  color: grey;
  font-size: 20px;
  background: #FFF;
  cursor: pointer;
}












</style>
</head>
<body>
</body>
</html>
