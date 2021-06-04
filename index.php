<!DOCTYPE html>
<html>
<head>
	<title>Website : CodinginAja</title>
	<meta charset="UTF-8">
	<meta name="author" content="Majid Uinseann">
	<meta http-equiv="refresh" content="30">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="keywords" content="HTML, CSS, JavaScript, PHP, Termux">
<link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js">
<link rel="stylesheet" type="text/css" href="sub-menu.css"/>
<link rel="stylesheet" type="text/css" href="css/sidenav-left.css" />
<link rel="stylesheet" type="text/css" href="css/sidenav-right.css" />
<link rel="stylesheet" type="text/css" href="css/sidenav-tengah.css" />

<style>

.sticky{
        position: fixed;
        top: 0;
        width: 100%;
      }
/*dropdowns*/
.dropbtns {
  background-color: #4CAF50;
  color: white;
  padding: 16px;
  font-size: 16px;
  border: none;
  cursor: pointer;
}

.dropbtns:hover, .dropbtns:focus {
  background-color: #3e8e41;
}

.dropdowns {
  float: right;
  position: relative;
  display: inline-block;
}

.dropdown-contents {
  display: none;
  position: absolute;
  background-color: #f1f1f1;
  min-width: 160px;
  overflow: auto;
  box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
  right: 0;
  z-index: 1;
}

.dropdown-contents a {
  color: black;
  padding: 12px 16px;
  text-decoration: none;
  display: block;
}

.dropdowns a:hover {background-color: #ddd;}

.show {display: block;}
/*tutup dropdowns*/

.bg {
  /* The image used */
  background-image: url("img/aku/jalan.jpg");

  /* Full height */
  width: auto;
  height: 548px;

  /* Center and scale the image nicely */
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
  background-attachment: fixed;
  padding-bottom: 100px;
}

* {
	margin:0; 
  padding:0;
  box-sizing: border-box;
  -webkit-box-sizing: border-box;    
  -moz-box-sizing: border-box;
  -o-box-sizing: border-box;
  -ms-box-sizing: border-box;    
}
html {
  font-family: "Lucida Sans", sans-serif;
}
/*scrollmenu*/
div.scrollmenu {
  background-color: #FFEBCD;
  overflow: auto;
  white-space: nowrap;
}

div.scrollmenu a {
  display: inline-block;
  color: #008B8B;
  text-align: center;
  padding: 14px;
  text-decoration: none;
}

div.scrollmenu a:hover {
  background-color: white;
  color : red;
}
div.scrollmenu .active {
	background: #FFD700;
	color: #A52A2A;
}
.mj-header {
	background-color: #9933cc;
  border: 1px solid red;
  padding: 8px;
}
div.mj-hide {
  background-color: #008B8B;
  padding: 2px;
  font-size: 12px;
}
/*row*/
.row::after {
  content: "";
  clear: both;
  display: table;
}

/*tombol*/
.tombol-nav {
	
	
 
}
.tombol-nav::after {
	content: "";
	display: table;
	clear: both;
}
.tombol-kiri {
	float: left;
 
}
.tombol-tengah {
	clear: none;
	text-align: center;
}
.tombol-kanan {
	float: right;
	position: relative;
  display: inline-block;
}
#main {
  transition: margin-left .5s;
  padding: 3px;
}






[class*="mj-col-"] {
  float: left;
  padding: 2px;
  border: 1px solid red;
}
/*navbar*/
.navbar ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: #333;
}
.navbar li a {
  display: block;
  color: white;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

.navbar li a:hover:not(.active) {
  background-color: #111;
}
.navbar li {
  float: left;
}
/*active*/
.active {
  background-color: #FFD700;
  color: white;
}

/*logo*/
.buat-logo {
	display:flex;
  align-items:center;
}
.buat-logo::after {
	content: "";
	display: block;
	clear: both;
}
.my-logo {
	float: left;
	margin: 5px;
	margin-right: 10px;
}
.nama-logo {
	font-size: 25px;
}
.nama-logo::after {
	content: "Aja";
	display: inline-block;
	color: red;
	margin-left: -8px;
	font-size: 34px;
}
/*burger*/
.burger {
	margin-left: 138px;
}
.mj-col-1 {width: 8.33%;}
.mj-col-2 {width: 16.66%;}
.mj-col-3 {width: 25%;}
.mj-col-4 {width: 33.33%;}
.mj-col-5 {width: 41.66%;}
.mj-col-6 {width: 50%;}
.mj-col-7 {width: 58.33%;}
.mj-col-8 {width: 66.66%;}
.mj-col-9 {width: 75%;}
.mj-col-10 {width: 83.33%;}
.mj-col-11 {width: 91.66%;}
.mj-col-12 {width: 100%;}
/*menu*/
.menu ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
}
.menu {
	
}
.menu li {
  padding: 2px;
  margin-bottom: 7px;
  background-color :#33b5e5;
  color: #ffffff;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
  font-size: 12px;
}

.menu li:hover {
  background-color: #0099cc;
}
/*Asside*/
.aside {
  background-color: #33b5e5;
  padding: 2px;
  color: #ffffff;
  text-align: center;
  font-size: 9px;
  box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
}
/*Footer*/
.mj-footer {
	background-color: #0099cc;
  border: 1px solid red;
  padding: 7px;
  text-align: center;
  font-size: 12px;
}


@media only screen and (max-width: 360px) {
  /* For mobile phones: */
  [class*="col-"] {
    width: 100%;
  }
}

@media only screen and (min-width: 600px) {
  /* For tablets: */
  .col-s-1 {width: 8.33%;}
  .col-s-2 {width: 16.66%;}
  .col-s-3 {width: 25%;}
  .col-s-4 {width: 33.33%;}
  .col-s-5 {width: 41.66%;}
  .col-s-6 {width: 50%;}
  .col-s-7 {width: 58.33%;}
  .col-s-8 {width: 66.66%;}
  .col-s-9 {width: 75%;}
  .col-s-10 {width: 83.33%;}
  .col-s-11 {width: 91.66%;}
  .col-s-12 {width: 100%;}
}

@media only screen and (min-width: 768px) {
  /* For desktop: */
  .col-1 {width: 8.33%;}
  .col-2 {width: 16.66%;}
  .col-3 {width: 25%;}
  .col-4 {width: 33.33%;}
  .col-5 {width: 41.66%;}
  .col-6 {width: 50%;}
  .col-7 {width: 58.33%;}
  .col-8 {width: 66.66%;}
  .col-9 {width: 75%;}
  .col-10 {width: 83.33%;}
  .col-11 {width: 91.66%;}
  .col-12 {width: 100%;}
}
@media screen and (min-width: 361px) {
  div.mj-hide {
    display: none;
  }
}
@media screen and (max-height: 450px) {
  .sidenav-left {padding-top: 15px;}
  .sidenav-left a {font-size: 18px;}
}
@media screen and (max-height: 450px) {
  .overlay {overflow-y: auto;}
  .overlay a {font-size: 20px}
  .overlay .closebtn {
  font-size: 40px;
  top: 15px;
  right: 35px;
  }
}
</style>

<script src="sub_menu.js"></script>
</head>
<body ononline="jaringanOnline()" onoffline="jaringanOffline()">
	<!--menu tengah-->
<div id="topNav" class="overlay">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNavTop()">&times;</a>
  <div class="overlay-content">
    
<!-- Contenedor -->
<ul id="accordion" class="accordion">
  <li>
    <div class="link"><i class="fa fa-database"></i>HTML<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="#">Tag</a></li>
      <li><a href="#">ID</a></li>
      <li><a href="#">Class</a></li>
      <li><a href="#">Meta</a></li>
      <li><a href="#">Asside</a></li>
    </ul>
  </li>
  <li>
    <div class="link"><i class="fa fa-code"></i>CSS<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="#">Class</a></li>
      <li><a href="#">ID</a></li>
      <li><a href="#">terserah</a></li>
    </ul>
  </li>
  <li>
    <div class="link"><i class="fa fa-mobile"></i>Codepen.io<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="https://codepen.io/fainder/details/KnsfE">WebMobile</a></li>
      <li><a href="https://codepen.io/fainder/pen/AydHJ">SubMenu</a></li>
      <li><a href="https://codepen.io/simeydotme/pen/PrQKgo">Card</a></li>
      <li>
      	<a href="https://codepen.io/GyGInfographics/pen/MWbpQKJ">SVG</a>
      </li>
      <li>
      	<a href="https://codepen.io/yuhomyan/pen/OJMejWJ">Button</a>
      </li>
      <li>
      	<a href="https://codepen.io/isladjan/pen/abdyPBw">Parallax</a>
      </li>
      <li>
      	<a href="https://codepen.io/KristopherVanSant/pen/XWNvrLe">Toggle</a>
      </li>
      <li>
      	<a href="https://codepen.io/creativeocean/pen/KKaagJR">Text</a>
      </li>
    </ul>
  </li>
  <li>
    <div class="link"><i class="fa fa-globe"></i>Global<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="#">Google</a></li>
      <li><a href="#">Bing</a></li>
      <li><a href="#">Yahoo</a></li>
    </ul>
  </li>
</ul>

  </div>
</div>
<!--menu kiri-->
	<div id="leftSidenav" class="sidenav-left">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNavLeft()">close</a>
  

<!-- Contenedor -->
<ul id="accordion" class="accordion">
	<li>
    <div class="link"><i class="fa fa-database"></i>Anime<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="https://otakudesu.moe">OtakuDesu</a></li>
      <li><a href="https://meownime.moe">MeoNime</a></li>
      <li><a href="https://anoboy.media">Anoboy</a></li>
    </ul>
  </li>
  <li><!--cams-->
    <div class="link"><i class="fa fa-database"></i>Cams<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="https://live.chatly.sex">Chatly</a></li>
      <li><a href="#">Stripchat</a></li>
      <li><a href="https://bongacams.org/">bongacams</a></li>
      <li>
      	<a href="https://m.chaturbate.com">chaturbate</a>
      </li>
    </ul>
  </li>
  <li><!--gambar-->
    <div class="link"><i class="fa fa-code"></i>Gambar<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="https://www.mythumbnails.com">MyThumbnails</a></li>
      <li><a href="https://www.pornpics.com/?q=lena+anderson">Lena Anderson</a></li>
      <li><a href="#">Ruby</a></li>
    </ul>
  </li>
  <li><!--film-->
    <div class="link"><i class="fa fa-mobile"></i>Film<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="https://dutafilm.cyou">DutaFilm</a></li>
      <li><a href="https://en.paradisehill.cc/porn/">paradisehill</a></li>
      <li><a href="http://104.161.33.118/asd">xpanas21</a></li>
      <li>
      	<a href="https://www.porngo.com/videos/359624/3111d229d2c267c8f335a5c6b35b0b24/?sid=12320">full</a>
      </li>
      <li>
      	<a href="https://redhdtube.xxx/en/video/full+movie/">full2</a>
      </li>
      <li>
      	<a href="https://fullxcinema.com/jav-porno-movie/">full3</a>
      </li>
      <li>
      	<a href="https://bestfreetube.xxx/niche/full+movie/">full4</a>
      </li>
      <li>
      	<a href="https://easyporn.xxx/?id=5">easyfull</a>
      </li>
      <li>
      	<a href="https://www.pornhub.com/view_video.php?viewkey=ph5c88325aaf617">pornhub</a>
      	<a href="https://www.pornhub.com/view_video.php?viewkey=ph606f7258e9b54">pornhub</a>
      </li>
      <li>
      	<a href="https://www.pinflix.com/videos/59695/japanese-teen-slut-gets-fucked-five-ways-to-friday-uncensored?ch=11983313">pinflix</a>
      </li>
      <li>
      	<a href="http://www.asianpornpro.com/amateur/?feeder">asianpornpro</a>
      </li>
    </ul>
  </li>
  <li><!--channel-->
    <div class="link"><i class="fa fa-database"></i>Channel<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="https://www.pornhub.com/channels/dreamroom">dreamroom</a></li>
      <li><a href="https://www.pornhub.com/channels">pilihan</a></li>
      <li><a href="https://www.pornhub.com/channels/javhd/videos?o=da">school</a></li>
      <li>
      	<a href="https://www.pornhub.com/channels/ours-hd-tv/videos?o=ra">ours-hd-tv</a>
      </li>
      <li>
      	<a href="https://www.pornhub.com/view_video.php?viewkey=ph605ccd171d21b">hentai</a>
      </li>
      <li>
      	<a href="https://www.pornhub.com/model/litpussycatt">litpussycatt</a>
      </li>
      <li>
      	<a href="https://www.pornhub.com/model/hongkongdoll">hongkongdoll</a>
      </li>
      <li>
      	<a href="https://www.pornhub.com/video/search?search=korean">korean</a>
      </li>
      <li>
      	<a href="https://www.pornhub.com/view_video.php?viewkey=ph5f537e13cf4c3">susumoon</a>
      </li>
      <li>
      	<a href="https://www.pornhub.com/model/kritsadamahagonul">kritsadamahagonul</a>
      </li>
    </ul>
  </li>
  <li><!--artis-->
    <div class="link"><i class="fa fa-database"></i>Artist<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="https://en.paradisehill.cc/actor/28723/?sort=created_at">lily rader</a></li>
      <li><a href="https://hdzog.com/videos/91575/horny-japanese-girl-nozomi-nishiyama-in-best-jav-uncensored-creampie-scene/?seek_time=56.891914">hdzog</a></li>
    </ul>
  </li>
  <li><!--situs-->
    <div class="link"><i class="fa fa-globe"></i>Situs<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="https://veporn.com">VePorn</a></li>
      <li><a href="https://rajalendir.casa">RajaLendir</a></li>
      <li><a href="https://www.eporner.com">ePorner</a></li>
      <li><a href="https://tiny4k.club">tiny4k</a></li>
      <li>
      	<a href="http://167.71.0.252">bokep mama</a>
      </li>
      <li>
      	<a href="https://m.sunporno.com">sunporno</a>
      </li>
      <li>
      	<a href="https://txxx.com">txxx</a>
      </li>
      <li>
      	<a href="http://xxxxtubes.com">xxxxtubes</a>
      </li>
      <li>
      	<a href="http://www.goldpornfilms.com/en/435/japanese/">goldpornfilms</a>
      </li>
      <li>
      	<a href="https://www.pornhits.com/video/66255/teen-pinball-wizard-hits-the-creampie-jackpot/?campaign=10127">pornhits</a>
      </li>
    </ul>
  </li>
  <li><!--daftar situs-->
    <div class="link"><i class="fa fa-globe"></i>Daftar Situs<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="https://theporndude.com/3549/siska">Siska</a></li>
      <li><a href="https://theporndude.com">theporndude</a></li>
      <li><a href="https://www.eporner.com">ePorner</a></li>
    </ul>
  </li>
  <li><!--hentai-->
    <div class="link"><i class="fa fa-globe"></i>Hentai<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="https://www.youjizz.com/tags/anime-1.html">youjizz</a></li>
      <li><a href="https://theporndude.com">theporndude</a></li>
      <li><a href="https://www.eporner.com">ePorner</a></li>
    </ul>
  </li>
  
  <li><!--kategori-->
    <div class="link"><i class="fa fa-globe"></i>kategori<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="https://www.youjizz.com/categories/korean-sex-1.html">korean</a></li>
      <li><a href="https://www.youjizz.com/videos/korean-bj-neat-41497011.html">korea-bj</a></li>
      <li><a href="https://kimchi.tv/videos/asian-porn-movies/4/">asian</a></li>
      <li>
      	<a href="http://185.63.253.20/?id=bokep-korea-hd">net-18+</a>
      </li>
    </ul>
  </li>
</ul>
</div>
<!--menu kanan-->
	<div id="rightSidenav" class="sidenav-right">
  <a href="javascript:void(0)" class="closebtn" onclick="closeNavRight()">close</a>
  
<!-- Contenedor -->
<ul id="accordion" class="accordion">
  <li>
    <div class="link"><i class="fa fa-code"></i>Coding<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="#">HTML</a></li>
      <li><a href="#">CSS</a></li>
      <li><a href="#">JavaScript</a></li>
      <li><a href="#">PHP</a></li>
      <li><a href="#">Jquery</a></li>
    </ul>
  </li>
  <li>
    <div class="link"><i class="fa fa-globe"></i>Design<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="#">Photoshop</a></li>
      <li><a href="#">CorelDraw</a></li>
      <li><a href="#">Termux</a></li>
    </ul>
  </li>
  <li>
    <div class="link"><i class="fa fa-database"></i>Icons<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="#">Bootstrap</a></li>
      <li><a href="#">Cdn</a></li>
      <li><a href="#">Materialize</a></li>
    </ul>
  </li>
  <li>
    <div class="link"><i class="fa fa-mobile"></i>Devices<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="#">Tablet</a></li>
      <li><a href="#">Mobile</a></li>
      <li><a href="#">Desktop</a></li>
    </ul>
  </li>
  <li>
    <div class="link"><i class="fa fa-globe"></i>Termux<i class="fa fa-chevron-down"></i></div>
    <ul class="submenu">
      <li><a href="#">PHP</a></li>
      <li><a href="#">Sql3</a></li>
      <li><a href="#">MySql/MariaDB</a></li>
    </ul>
  </li>
</ul>


</div>
<!--parallax-->
<div class="bg"></div>

<!--container header-->
<header>
<!--header-->

  <div class="buat-logo">
<!--logo-->  	
<div class="my-logo">
	<img style="width:40px; height: 35px" src="img/logo/logo.png">
</div>
<!--nama logo-->
<div class="nama-logo">
  Codingin
</div>
<!--humberger menu-->

<div class="burger">
	<svg viewBox="0 0 100 80" width="30" height="30">
  <rect width="100" height="20"></rect>
  <rect y="30" width="100" height="20"></rect>
  <rect y="60" width="100" height="20"></rect>
	</svg>
</div>

<!--tutup logo-->  	
</div>
<!--navbar-->
<div class="scrollmenu">
  <a class="active" href="#home">Home</a>
  <a href="#news">News</a>
  <a href="assets/data/gallery.html">Gallery</a>
  <a href="#about">About</a>
  <a href="#support">Support</a>
  <a href="#blog">Blog</a>
  <a href="#tools">Tools</a>  
  <a href="#base">Base</a>
  <a href="#custom">Custom</a>
  <a href="#more">More</a>
  <a href="#logo">Logo</a>
  <a href="#friends">Friends</a>
  <a href="#partners">Partners</a>
  <a href="#people">People</a>
  <a href="#work">Work</a>
</div>

<!--sembunyikan-->
<div class="row mj-hide" id="kumpulanMenu">
  	
<!--tombol navbar-->
	<div class="tombol-nav">
		
		<div class="tombol-kiri">
    	<svg style="width:24px;height:24px; cursor:pointer" onclick="openNavLeft()" viewBox="0 0 24 24">
    		<path fill="#FFEBCD" d="M5,13L9,17L7.6,18.42L1.18,12L7.6,5.58L9,7L5,11H21V13H5M21,6V8H11V6H21M21,16V18H11V16H21Z" />
			</svg>
    </div>
    		
    <div class="tombol-kanan">
    	<svg style="width:24px;height:24px; cursor:pointer" onclick="openNavRight()" viewBox="0 0 24 24"> 
    		<path fill="#FFEBCD" d="M12,2A10,10 0 0,0 2,12A10,10 0 0,0 12,22A10,10 0 0,0 22,12A10,10 0 0,0 12,2M6,7H18V9H6V7M6,11H18V13H6V11M6,15H18V17H6V15Z" />
			</svg>
    </div>
    		
   



    <div class="tombol-tengah">
   		<svg style="width:24px;height:24px; cursor:pointer" onclick="openNavTop()" viewBox="0 0 24 24">
    		<path fill="#FFEBCD" d="M7,10L12,15L17,10H7Z" />
			</svg>
   	</div>
   	
  <!--tutup nav-->
	</div>
	<!--close sembunyikan-->
		</div>
  
</header>
<!--tutup contener header-->


<main id="main" class="mj-wrapper row">
	
	<div class="wrapper">
    <div class="sliding-background"></div>
</div>
<!--sidebar-->
	<div class="mj-col-3 mj-col-s-3 menu">
  
  <ul>
    <li>
    	<div>
    		<svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M12,18.08C5.37,18.08 0,15.36 0,12C0,8.64 5.37,5.92 12,5.92C18.63,5.92 24,8.64 24,12C24,15.36 18.63,18.08 12,18.08M6.81,10.13C7.35,10.13 7.72,10.23 7.9,10.44C8.08,10.64 8.12,11 8.03,11.47C7.93,12 7.74,12.34 7.45,12.56C7.17,12.78 6.74,12.89 6.16,12.89H5.29L5.82,10.13H6.81M3.31,15.68H4.75L5.09,13.93H6.32C6.86,13.93 7.3,13.87 7.65,13.76C8,13.64 8.32,13.45 8.61,13.18C8.85,12.96 9.04,12.72 9.19,12.45C9.34,12.19 9.45,11.89 9.5,11.57C9.66,10.79 9.55,10.18 9.17,9.75C8.78,9.31 8.18,9.1 7.35,9.1H4.59L3.31,15.68M10.56,7.35L9.28,13.93H10.7L11.44,10.16H12.58C12.94,10.16 13.18,10.22 13.29,10.34C13.4,10.46 13.42,10.68 13.36,11L12.79,13.93H14.24L14.83,10.86C14.96,10.24 14.86,9.79 14.56,9.5C14.26,9.23 13.71,9.1 12.91,9.1H11.64L12,7.35H10.56M18,10.13C18.55,10.13 18.91,10.23 19.09,10.44C19.27,10.64 19.31,11 19.22,11.47C19.12,12 18.93,12.34 18.65,12.56C18.36,12.78 17.93,12.89 17.35,12.89H16.5L17,10.13H18M14.5,15.68H15.94L16.28,13.93H17.5C18.05,13.93 18.5,13.87 18.85,13.76C19.2,13.64 19.5,13.45 19.8,13.18C20.04,12.96 20.24,12.72 20.38,12.45C20.53,12.19 20.64,11.89 20.7,11.57C20.85,10.79 20.74,10.18 20.36,9.75C20,9.31 19.37,9.1 18.54,9.1H15.79L14.5,15.68Z" />
</svg>
<a href="#">PHP</a>
    	</div>
    </li>
    <li>
    	<div>
    		<svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M5,3L4.35,6.34H17.94L17.5,8.5H3.92L3.26,11.83H16.85L16.09,15.64L10.61,17.45L5.86,15.64L6.19,14H2.85L2.06,18L9.91,21L18.96,18L20.16,11.97L20.4,10.76L21.94,3H5Z" />
</svg>
<a href="!">CSS</a>
    	</div>
    </li>
    <li>
    	<div>
    		<svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M12,17.56L16.07,16.43L16.62,10.33H9.38L9.2,8.3H16.8L17,6.31H7L7.56,12.32H14.45L14.22,14.9L12,15.5L9.78,14.9L9.64,13.24H7.64L7.93,16.43L12,17.56M4.07,3H19.93L18.5,19.2L12,21L5.5,19.2L4.07,3Z" />
</svg>
<a href="#">HTML</a>
    	</div>
    </li>
    <li>
    	<div>
		<svg style="width:24px;height:24px" viewBox="0 0 24 24">
    <path fill="currentColor" d="M3,3H21V21H3V3M7.73,18.04C8.13,18.89 8.92,19.59 10.27,19.59C11.77,19.59 12.8,18.79 12.8,17.04V11.26H11.1V17C11.1,17.86 10.75,18.08 10.2,18.08C9.62,18.08 9.38,17.68 9.11,17.21L7.73,18.04M13.71,17.86C14.21,18.84 15.22,19.59 16.8,19.59C18.4,19.59 19.6,18.76 19.6,17.23C19.6,15.82 18.79,15.19 17.35,14.57L16.93,14.39C16.2,14.08 15.89,13.87 15.89,13.37C15.89,12.96 16.2,12.64 16.7,12.64C17.18,12.64 17.5,12.85 17.79,13.37L19.1,12.5C18.55,11.54 17.77,11.17 16.7,11.17C15.19,11.17 14.22,12.13 14.22,13.4C14.22,14.78 15.03,15.43 16.25,15.95L16.67,16.13C17.45,16.47 17.91,16.68 17.91,17.26C17.91,17.74 17.46,18.09 16.76,18.09C15.93,18.09 15.45,17.66 15.09,17.06L13.71,17.86Z" />
</svg>
<a href="#">JavaScript</a>
		</div>
    </li>
  </ul>
</div>

<!--content-->
<div class="mj-col-6 mj-col-s-9">
	<center>
		<h1>CodinginAja</h1>
	</center>
  
  
  
  <div class="row">
  	<div class="mj-col-12">
  	
    		<div class="mj-col-4">
    			<img style="width:100%; height:auto;" src="img/ai/gerbang.jpg"/>
    		</div>
    		<div class="mj-col-4">
    			<img style="width:100%; height:auto;" src="img/ai/pak_andy.jpg"/>
    		</div>
    		<div class="mj-col-4">
    			<img style="width:100%; height:auto;" src="img/ai/ids.jpg"/>
    		</div>
    </div>
 	</div>
</div>



   

<!--asside-->
<div class="mj-col-3 mj-col-s-12">
    <div class="aside">
      <h2>What?</h2>
      <p>Belajar_membuat_web</p>
      <h2>Where?</h2>
      <p>Di_rumah_donk</p>
      <h2>How?</h2>
      <p>Dengan_memakai_hp_android</p>
    </div>
  </div>
<iframe width="auto" height="250"
src="https://www.youtube.com/embed/tgbNymZ7vqY">
</iframe>
</main>




<div class="mj-footer">
  <p>Copyright ©2021. CodinginAja.</p>
 </div> 
  	
  	
  	
		<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
		
  <script>
function openNavTop() {
  document.getElementById("topNav").style.height = "100%";
}

function closeNavTop() {
  document.getElementById("topNav").style.height = "0%";
}
</script>
  <script>
function openNavLeft() {
  document.getElementById("leftSidenav").style.width = "50%";
  document.getElementById("main").style.marginLeft = "50%";
}

function closeNavLeft() {
  document.getElementById("leftSidenav").style.width = "0";
  document.getElementById("main").style.marginLeft= "0";
}
</script>
<script>
function openNavRight() {
  document.getElementById("rightSidenav").style.width = "50%";
}

function closeNavRight() {
  document.getElementById("rightSidenav").style.width = "0";
}
</script>

<!--dropdown-->
<script>
/* When the user clicks on the button, 
toggle between hiding and showing the dropdown content */
function menuFunction() {
  document.getElementById("menuDropdown").classList.toggle("show");
}

// Close the dropdown if the user clicks outside of it
window.onclick = function(event) {
  if (!event.target.matches('.dropklik')) {
    var dropdowns = document.getElementsByClassName("dropdown-contents");
    var i;
    for (i = 0; i < dropdowns.length; i++) {
      var openDropdown = dropdowns[i];
      if (openDropdown.classList.contains('show')) {
        openDropdown.classList.remove('show');
      }
    }
  }
}
</script>
<!-- javascript -->
  <script>
    window.onscroll = function() {menuFunctionSticky()};

    var widget = document.getElementById('kumpulanMenu');
    var sticky = widget.offsetTop;

    function menuFunctionSticky(){
      if (window.pageYOffset >= sticky){
        widget.classList.add("sticky")
      } else{
        widget.classList.remove("sticky");
      }
    }
  </script>
  <!-- javascript end -->
  

  <script>
    /*jaringan online*/
  	function jaringanOnline() {
  		alert ("Kembali Online");
  	}
  	/*jaringan offline*/
  	function jaringanOffline() {
  		alert ("Jaringan Mati");
  	}
  	/*gagal muat video*/
  	function videoGagal() {
  		alert ("Video gagal muat");
  	}
  </script>
  <!--sub menu-->
  <script>
  	
$(function() {
  var Accordion = function(el, multiple) {
    this.el = el || {};
    this.multiple = multiple || false;

    // Variables privadas
    var links = this.el.find('.link');
    // Evento
    links.on('click', {el: this.el, multiple: this.multiple}, this.dropdown)
  }

  Accordion.prototype.dropdown = function(e) {
    var $el = e.data.el;
      $this = $(this),
      $next = $this.next();

    $next.slideToggle();
    $this.parent().toggleClass('open');

    if (!e.data.multiple) {
      $el.find('.submenu').not($next).slideUp().parent().removeClass('open');
    };
  } 

  var accordion = new Accordion($('.accordion'), false);
});

  </script>

</body>
</html>
