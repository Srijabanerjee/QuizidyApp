<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<meta charset="utf-8">
<title></title>
<style type="text/css">

.chat_icon{
  position: fixed;
  bottom: 5px;
  right: 20px;
  cursor:pointer;
}

.chatbot-box{
  position: fixed;
  right: 30px;
  bottom: 100px;
  background: linear-gradient(to bottom, #bcbcbc 6%, #e7e7e7 20%);
  width: 300px;
  height: 70vh;
  border-radius: 20px;
  padding: 30px;
  font-size: 16px;
  box-shadow: 0 0 11px rgba(0,0,0,0.9);
  transition: all 0.3s ease-out;
}

#chatList{
  height: calc(80vh - 130px);
  overflow-x: auto;
  position: relative;
  -ms-overflow-style:none;
  scroll-width: 0;
}
#chatList::-webkit-scrollbar{
  display: none;
}

#chatList ul{
  margin: 0;
  padding: 0;
  list-style: none;
  position: absolute;
  width: 100%;
  bottom: 0;
  left: 0;
  max-height:100%;
}

#chatList ul li.admin-message{
  background-color: white;
  color: #515151;
  padding: 10px 20px;
  border-radius: 0 20px 20px 20px;
  margin: 15px 30% 15px 5px;
  text-transform: capitalize;
  box-shadow: 0 0 4px rgba(0,0,0,0.3);
}
#chatList ul li.client-message{
  background-color: #59ba00;
  color: #fff;
  padding: 10px 20px;
  border-radius: 20px 0 20px 20px;
  margin: 15px 5px 15px 30%;
  text-transform: capitalize;
  box-shadow: 0 0 4px rgba(0,0,0,0.3);
}

.message-box-wrap{
  position: relative;
  margin-top: 20px;
}
.message-box input[type="text"],
.message-box select{
  height:20px;
  padding: 10px;
  line-height: 20px;
  width: calc(100% - 50px);
  border-radius: 20px;
  border: 1px solid #bcb3b3;
}
.message-box button{
  width: 100px;
  height: 40px;
  padding: 10px;
  line-height: 20px;
  border-radius: 10px;
  border: 1px solid #bcb3b3;
}
#send{
  height: 40px;
  width: 40px;
  position:absolute;
  right: -15px;
  top: 0;
  border: 0 !important;
  cursor: pointer;
  color: #FFF;
  border-radius: 50%;
  background-color: #fff;
  outline: 0 !important;
}
.admin-client-message-wrap,
#submit_info_form{
opacity: 0;
width: 0;
height: 0;
overflow: hidden;
margin: 0;
padding: 0;
}


















    </style>
  </head>
  <body>

  </body>
  </html>
