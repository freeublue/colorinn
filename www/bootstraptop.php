<?
session_start();
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../../../favicon.ico"><link href="https://fonts.googleapis.com/css?family=Merriweather:400,900i" rel="stylesheet"><link href="css/style.css" rel="stylesheet"><link rel="stylesheet" type="text/css" href="https://js.api.here.com/v3/3.0/mapsjs-ui.css?dp-version=1533195059" />
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-core.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-service.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-ui.js"></script>
<script type="text/javascript" src="https://js.api.here.com/v3/3.0/mapsjs-mapevents.js"></script>
<?


require "functions/bootlib.php";

require "../config.php";
    echo "<title>$title</title>";
    ?>

    <!-- Bootstrap core CSS -->

    <!-- Bootstrap core CSS --><link href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous"><link href="animate.css" rel="stylesheet"><link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU" crossorigin="anonymous"><style>
/* Padding below the footer and lighter body text */
    @import "https://fonts.googleapis.com/css?family=Raleway:100,300,600";

@import url('https://fonts.googleapis.com/css?family=Niconne');

html, body { overflow-x: hidden; }
body {
 width:100%;
  color: #1B1B1B;
  font-family: "Raleway", Arial, Helvetica, sans-serif;
  background:#F8F8F8;
}
#footer {
    position: fixed;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black;
    color: #F8F8F8;
    text-align: center;
  overflow-x: hidden;  
  
}

#section1{ 
background:#343A40;
color:#F8F8F8;
height:150px;
} 
#section3{ 
margin-top:5em;

} 
#section4{ 
margin-top:3em;
height:150px;

} 
#section5{ 
margin-top:5em;

background:#3F729B;
color:white;
} 

#section8{ 


background:#3F729B;
color:white;
} 
h2{
font-family: 'Niconne', cursive;
color:#3F729B;
} 
h4 {font-family: 'Merriweather', serif;}
#headimage { 
 background: url(met1.jpg) no-repeat center center; 
 height:800px;
   background-size: cover; 
   
   

color:#f9f7f4;
width:100%;} 
#imghead1 { 
 background: url(home1.jpg) no-repeat center center; 
 height:800px;
   background-size: cover; 
   
   

color:lime;
width:100%;} 
#imghead2 { 
 background: url(home2.jpg) no-repeat center center; 
 height:800px;
   background-size: cover; 
   
   

color:lime;
width:100%;} 
#imghead3 { 
 background: url(home3.jpg) no-repeat center center; 
 height:800px;
   background-size: cover; 
   
   

color:lime;
width:100%;} 
#imghead4 { 
 background: url(home4.jpg) no-repeat center center; 
 height:800px;
   background-size: cover; 
   
   

color:lime;
width:100%;} 
#im1 { 
 background: url(home1.jpg) no-repeat center center; 
   background-size: cover; 
   height: 100%; 
   width: 100%;
padding:10px;
color:#f9f7f4;
width:100%;} 
#im2 { 
 background: url(home2.jpg) no-repeat center center; 
   background-size: cover; 
   height: 100%; 
   width: 100%;
padding:10px;
color:#f9f7f4;
width:100%;} 
#im3 { 
 background: url(home3.jpg) no-repeat center center; 
   background-size: cover; 
   height: 100%; 
   width: 100%;
padding:10px;
color:#f9f7f4;
width:100%;} 
input { border-top:0px;
border-left:0px;
width:100%;
border-right:0px; } 
.icon-bar {
  position: fixed;
  top: 20%;
  right:0%;
  z-index:5;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
}

/* Style the icon bar links */
.icon-bar a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: #f9f7f4;
  font-size: 20px;
}

/* Style the social media icons with color, if you want */
.icon-bar a:hover {
  background-color: #000;
}

.cartadd {
  position: fixed;
  top: 20%;
  z-index:5;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  background:#3a4660;
  color:#f9f7f4;
  padding:15px;
  display:none;
}

/* Style the icon bar links */
.cartadd a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: #f9f7f4;
  font-size: 20px;
}

/* Style the social media icons with color, if you want */
.cartadd a:hover {
  background-color: #000;
}
.cartdets {
  position: fixed;
  top: 60%;
  z-index:5;
  -webkit-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);
  background:#3a4660;
  color:#f9f7f4;
  padding:15px;
  display:none;
}

/* Style the icon bar links */
.cartdets a {
  display: block;
  text-align: center;
  padding: 16px;
  transition: all 0.3s ease;
  color: #f9f7f4;
  font-size: 20px;
}

/* Style the social media icons with color, if you want */
.cartdets a:hover {
  background-color: #000;
}
#bo{ position:absolute;right:0;
} 
.subs_popup {
padding:20px;
color:#ceb7a2;
	display: block;
	background-color: rgba(255,255,255, 1.9);
	position: absolute;
top: 150px;
left:100px;
	height: 400px;
	width: 600px;
z-index: 5;
} 
#results{display:none;
background:#ceb7a2;} 
#close_popup{float:right;}
</style>
  </head><body onload='type();'><div style='background:#1B1B1B;height:70px;' class='icon-bar'><p id='cart'></p><a href='cartdets.php'><i class="fas fa-shopping-cart fa-1x" style='color:#F8F8F8;'></i></a></div><div class='cartadd'>add</div><div class='cartdets'>Details</div>
 <?
 
 ?>