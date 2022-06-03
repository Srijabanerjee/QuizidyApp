
@import url('https://fonts.googleapis.com/css2?family:wght@400;500;600;700&display=swap');




/*header*/
:root{
  --bg-black-900:#000000;
  --bg-black-100:#dddddd;
  --bg-black-50:#eff0f4;
  --text-black-900:#000000;
  --text-black-700:#555555;
  --text-black-600:#666666;
  --text-black-400:#bbbbbb;
  --outer-shadow:3px 3px 3px #d0d0d0, -3px -3px 3px #f8f8f8;
  --outer-shadow-0:0 0 0 #d0d0d0, 0 0 0 #f8f8f8;
  --inner-shadow: inset 3px 3px 3px #d0d0d0, inset -3px -3px 3px #f8f8f8;
}
body{
  font-size: 16px;
  line-height: 1.5;
  overflow-x: hidden;
  background-color: var(--bg-black-50);
}
*:not(i){
  font-family: 'Raleway', sans-serif;
  font-weight: 400;
}
*{
  margin: 0;
  padding: 0;
  box-sizing: border-box;
  outline: none;
}
:before,:after{
  box-sizing: border-box;
}
a{
  text-decoration: none;
}
ul{
  list-style: none;
  margin: 0;
  padding: 0;
}
img{
  vertical-align: middle;
  max-width: 100%;
}
.container{
  max-width: 1140px;
  /*background-color: red;*/
  margin: auto;
}
.row{
  display: flex;
  flex-wrap: wrap;
}
.justify-content-between{
  justify-content: space-between;
}
.outer-shadow{
  box-shadow: var(--outer-shadow);
}
.inner-shadow{
  box-shadow: var(--inner-shadow);
}
.hover-in-shadow{
  position: relative;
  z-index: 1;
}
.hover-in-shadow:hover{
  box-shadow: var(--outer-shadow-0);
}
.hover-in-shadow:after{
  content:'';
  position: absolute;;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  transition: all 0.3s ease;
}
.hover-in-shadow:hover:after{
  box-shadow: var(--inner-shadow);
}
.align-items-center{
  align-items: center;
}
.btn-1{
  padding: 10px 25px;
  font-size: 16px;
  font-weight: 500;
  color: orange;
  background-color: transparent;
  line-height: 1.5;
  cursor: pointer;
  border-radius: 30px;
  transition: all 0.3s ease;
  display: inline-block;
}
.btn-1:after{
  border-radius: 30px;
}
.effect-wrap .effect{
  position: absolute;
  z-index: -1;
}
.effect-1{
  width: 30px;
  height: 30px;
  border:4px solid #8a49ff;
  right: 10%;
  bottom: 10%;
  animation: spin 10s linear infinite;
}
.effect-2{
  left: 3%;
  bottom: 20%;
  width: 40px;
  display: flex;
  flex-wrap: wrap;
  justify-content: space-between;
  animation: topBounce 3s ease-in-out infinite;
}
.effect-2 div{
  height: 3px;
  width: 3px;
  background-color: #ff9c07;
  margin: 0 3px 8px;
  border-radius: 50%;
}
.effect-3{
  height: 180px;
  width: 180px;
  border: 25px solid orange;
  border-radius: 80%;
  left: 50%;
  top: -120px;
  animation: leftBounce 3s ease-in-out infinite;
}
.effect-4{
  border-top: 30px solid transparent;
  border-left: 30px solid #06d79c;
  left: 30%;
  top: 20%;
  animation: spin 15s linear infinite;
}
.effect-4:before{
  content: '';
  border-top: 30px solid transparent;
  border-left: 30px solid #06d79c;
  position: absolute;
  opacity: 0.5;
  left: -35px;
  top: -25px;
}
.effect-5{
  height: 50px;
  width: 50px;
  right: 10%;
  top: 30%;
  display: flex;
  justify-content: space-between;
  border-radius: 50%;
  overflow: hidden;
  animation: spin 15s linear infinite;
}
.effect-5 div{
  width: 1px;
  background-color: #4dd0e1;
}
@keyframes spin {
  0%{
    transform: rotate(0deg);
  }
  100%{
    transform: rotate(360deg);
  }
}
@keyframes topBounce {
  0%,100%{
    transform: translateY(0);
  }
  50%{
    transform: translateY(25px);
  }
}
@keyframes leftBounce {
  0%,100%{
    transform: translateX(0);
  }
  50%{
    transform: translateX(25px);
  }
}
@keyframes fadeInTop {
0%{
  opacity: 0;
  transform: translateY(-25px);
}100%{
  opacity: 1;
  transform: translateY(0px);
}
}
.section-title{
  padding: 0 15px;
  flex: 0 0 100%;
  max-width: 100%;
  text-align: center;
  margin-bottom: 60px;
}
.section-title h2{
  display: inline-block;
  font-size: 30px;
  font-weight: 700;
  color: var(--text-black-900);
  text-transform: uppercase;
  margin: 0;
}
.section-title h2:before{
  content: attr(data-heading);
  display: block;
  font-size: 16px;
  font-weight: 600;
  color: orange;
}
.header{
  /*background-color: red;*/
  padding: 20px 15px;
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
  z-index: 99;
}
.header .logo a{
  display: inline-block;
  text-align: center;
  line-height: 36px;
  font-size: 24px;
  height: 40px;
  width: 40px;
  color: var(--skin-color);
  border-radius: 50%;
  background-color: orange;
  font-weight: 600;
  border:2px solid var(--skin-color);
}

.header .hamburger-btn{
  height: 40px;
  width: 40px;
  /*box-shadow: 0 0 10px;
  */display: flex;
  align-items: center;
  cursor: pointer;
  border-radius: 50%;
  justify-content: center;
  transition: all 0.3s ease;
}
.header .hamburger-btn:after{
  border-radius: 50%;
}
.header .hamburger-btn span{
  display: block;
  height: 2px;
  width: 16px;
  background-color: var(--bg-black-900);
  position: relative;
}
.header .hamburger-btn span:before,
.header .hamburger-btn span:after{
  content: '';
  position: absolute;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: var(--bg-black-900);
}
.header .hamburger-btn span:after{
  top: 6px;
}
.header .hamburger-btn span:before{
  top: -6px;
}

.nav-menu{
  position: fixed;
  background-color: var(--bg-black-50);
  padding:0 15px;
  left: 0;
  top: 0;
  width: 100%;
  height: 100%;
  z-index: -1;
  opacity: 0;
  visibility: hidden;
  overflow-y: auto;
}
.nav-menu .close-nav-menu{
  height: 40px;
  width: 40px;
  display: block;
  font-size: 35px;
  line-height: 35px;
  border-radius: 50%;
  position: absolute;
  right: 15px;
  top: 15px;
  cursor: pointer;
  text-align: center;
  color: var(--text-black-600);
  transition: all 0.3s ease;
}
.nav-menu .close-nav-menu:after{
  border-radius: 50%;
}
.nav-menu-inner{
  /*background-color: blue;
  */min-height: 100vh;
  display: flex;
  align-items: center;
  justify-content: center;
}
.nav-menu ul{
  padding: 15px;
}
.nav-menu ul li{
  display: block;
  margin-bottom: 20px;
  text-align: center;
}
.nav-menu ul li:last-child{
  margin-bottom: 0;
}
.nav-menu ul li a{
  display: inline-block;
  font-size: 28px;
  font-weight: 600;
  color: var(--text-black-700);
  padding: 5px 30px;
  text-transform: capitalize;
  border-radius: 30px;
  transition: all 0.3s ease;
}
.nav-menu ul li a:after{
  border-radius: 30px;
}
.nav-menu ul li a.active{
  color: orange;
}
.nav-menu .copyright-text{
  position: absolute;
  left: 0;
  top: 50%;
  font-size: 15px;
  color: var(--text-black-600);
  transform: translateY(-50%) rotate(-90deg);
  left: -40px;
}
.home-section{
  position: relative;
}
.home-section .full-screen{
  padding: 50px 0;
  min-height: 100vh;
}
.home-section .home-text,
.home-section .home-img{
  flex: 0 0 50%;
  max-width: 50%;
  padding: 0 15px;
}
.home-section .home-text p{
color: var(--text-black-600);
font-size: 18px;
text-transform: capitalize;
margin: 0;
}
.home-section .home-text h2{
font-size: 45px;
font-weight: 700;
color: var(--text-black-900);
margin: 0;
}
.home-section .home-text h1{
font-size: 20px;
font-weight: 600;
text-transform: capitalize;
color: var(--text-black-700);
margin: 0;
}
.home-section .home-text .btn-1{
  margin-top:30px;
  animation: leftBounce 2s ease-in-out infinite;
}
.home-section .home-text{
/*  background-color: violet;*/
}
.home-section .home-img .img-box{
  max-width: 450px;
  display: block;
  margin: auto;
  border-radius: 50%;
  padding: 15px;
}
.home-section .home-img .img-box img{
  width: 100%;
  border-radius: 50%;
  border:10px solid transparent;
}
.about-section{
  padding: 80px 0 0;
  min-height: 100vh;
}
.about-section .about-img{
flex: 0 0 40%;
max-width: 40%;
padding: 0 15px;
}
.about-section .about-img .img-box{
  padding: 15px;
  border-radius: 5px;
}
.about-section .about-img .img-box img{
  width: 100%;
  border: 10px solid transparent;
  border-radius: 5px;
}
.social-links{
  margin-top: 20px;
  text-align: center;
}
.social-links a{
  display: inline-block;
  height: 40px;
  width: 40px;
  font-size: 16px;
  text-align: center;
  line-height: 40px;
  margin: 0 4px;
  border-radius: 50%;
  transition: all 0.3s ease;
}
.social-links a:after{
border-radius: 50%;
}
.social-links a:hover{
  color: orange;
}
.social-links a i{
  line-height: 40px;
}
.about-section .about-info{
flex: 0 0 60%;
max-width: 60%;
padding: 0 15px;
}
.about-section .about-info p{
font-size: 16px;
line-height: 26px;
margin-bottom: 15px;
color: var(--text-black-600);
}
.about-section .about-info span{
  font-weight: 600;
}
.about-section .about-info .btn-1{
  margin: 30px 20px 0 0;
}
.about-section .about-tabs{
  padding: 60px 15px 50px;
  flex: 0 0 100%;
  max-width: 100%;
  text-align: center;
}
.about-section .about-tabs .tab-item{
display: inline-block;
margin: 0 5px 10px;
cursor: pointer;
padding: 5px 10px;
border-radius: 30px;
transition: all 0.3s ease;
font-size: 16px;
color: #DC143C;
font-weight: 500;
text-transform: capitalize;
}
.about-section .about-tabs .tab-item:hover:not(.active){
  opacity: 0.6;
  color: blue;
}
.about-section .about-tabs .tab-item.active{
  color: green;
}
.about-section .tab-content{
flex: 0 0 100%;
max-width: 100%;
display: none;
}
.about-section .tab-content.active{
  display: block;
  animation: fadeInTop 0.5s ease;
}
.about-section .skills .skill-item{
flex: 0 0 50%;
max-width: 50%;
padding: 0 15px;
margin-bottom: 20px;
}
.about-section .skills{
  padding: 0 0 40px;
}
.about-section .skills .skill-item p{
  font-size: 16px;
  color: var(--text-black-600);
  text-transform: capitalize;
  margin: 0 0 10px;
}
.about-section .skills .skill-item .progress{
height: 20px;
border-radius: 10px;
position: relative;
}
.about-section .skills .skill-item .progress-bar{
background-color: deeppink;
height: 6px;
top: 7px;
left: 7px;
position: absolute;
border-radius: 10px;
}

.about-section .experience{
  padding-bottom: 80px;
}
.about-section .education{
  padding-bottom: 80px;
}
.about-section .timeline{
  flex: 0 0 100%;
  max-width: 100%;
  position: relative;
}
.about-section .timeline:before{
position: absolute;
content: '';
width: 1px;
left: 50%;
top: 0;
height: 100%;
background-color: var(--bg-black-100);
}
.about-section .timeline .timeline-item{
flex: 0 0 100%;
max-width: 100%;
padding: 0 15px;
}
.about-section .timeline .timeline-item:nth-child(odd){
padding-right: calc(50% + 50px);
text-align: right;
}
.about-section .timeline .timeline-item:nth-child(even){
padding-left: calc(50% + 50px);
}
.about-section .timeline .timeline-item-inner{
padding: 30px;
border-radius: 5px;
position: relative;
}
.about-section .timeline .timeline-item-inner:before{
  content: '';
  position: absolute;
  width: 30px;
  height: 1.5px;
  background-color: green;
  top: 37px;
  z-index: -1;
}
.about-section .timeline .timeline-item:nth-child(odd) .timeline-item-inner:before
{
  right: -30px;
}
.about-section .timeline .timeline-item:nth-child(even) .timeline-item-inner:before
{
  left: -30px;
}
.about-section .timeline .timeline-item-inner .icon{
  height: 40px;
  width: 40px;
  background-color: var(--bg-black-50);
  border: 1px solid var(--bg-black-100);
  color: green;
  border-radius: 50%;
  text-align: center;
  line-height: 40px;
  position: absolute;
  top: 18px;
}
.about-section .timeline .timeline-item:nth-child(odd) .icon{
right: -70px;
}
.about-section .timeline .timeline-item:nth-child(even) .icon{
left: -70px;
}
.about-section .timeline .timeline-item-inner span{
font-weight: 500;
color: purple;
display: block;
margin: 0 0 10px;
text-transform: capitalize;
}
.about-section .timeline .timeline-item-inner h3{
font-size: 20px;
color: var(--text-black-700);
font-weight: 600;
margin: 0 0 5px;
text-transform: capitalize;
}
.about-section .timeline .timeline-item-inner h4{
font-size: 16px;
font-style: italic;
color: var(--text-black-600);
margin: 0;
}
.about-section .timeline .timeline-item-inner p{
font-size: 16px;
color: var(--text-black-600);
line-height: 26px;
margin: 15px 0 0;
}
.service-section{
padding: 80px 0 80px;
min-height: 100vh;
}
.service-section .service-item{
flex: 0 0 50%;
max-width: 50%;
padding: 15px;
display: flex;
}
.service-section .service-item-inner{
  padding: 50px 15px;
  border-radius: 10px;
  text-align: center;
}
.service-section .service-item-inner .icon{
  height: 60px;
  width: 60px;
  text-align: center;
  border-radius: 50%;
  transition: all 0.3s ease;
  display: block;
  margin:0 auto 30px;
}
.service-section .service-item-inner .icon i{
  font-size: 25px;
  line-height: 60px;
  transition: all 0.3s ease;
}
.service-section .service-item-inner h3{
  font-size: 20px;
  font-weight: 600;
  color: var(--text-black-700);
  margin: 0 0 10px;
  text-transform: capitalize;
}
.service-section .service-item-inner p{
  font-size: 16px;
  color: var(--text-black-600);
  margin: 0;
  line-height: 26px;
}