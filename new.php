﻿<!doctype html>
<html>
<head>
<meta charset="utf-8">
<!--jquery-->
<script src="jquery/jquery.js"></script>
<!--my own javascript-->
<script src="MyJavaScript/app.js"></script>

<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="Bootstrap/bootstrap.css">

<!-- Optional theme -->
<link rel="stylesheet" href="Bootstrap/bootstrap-theme.css">

<!-- Latest compiled and minified JavaScript -->
<script src="Bootstrap/bootstrap.js"></script>
<link rel="stylesheet" type="text/css" href="MyCSS/mainstyles.css">
<title>Islam Nasyrov Portfolio</title>
</head>

<body>
<?php 
session_start(); /// initialize session 
include("passwords.php"); 
check_logged(); /// function checks if visitor is logged. 
If user is not logged the user is redirected to login.php page  
?>
<!--navigation starts-->
<div class="nav">
      <div class="container">
      <ul class="left-side-menu">
       <li><a href="#">Home</a></li>
          <li><a href="#">Welcome</a></li>
          <li><a href="#">About Me</a></li>
          <li><a href="examplespage/examples.html">Exapmles of my work</a></li>
</ul>
        <ul class="menu">
          <li class="dropdown">
            <a href="#" class="dropdown-toggle">Resume <b class="caret"></b></a>
            <ul class="dropdown-menu">
              <li><a href="#">Education</a></li>
              <li><a href="#">Skills</a></li>
              <li><a href="#">Expirence</a></li>
              <li><a href="#">Reference</a></li>
            </ul>
          </li>
      </div>
    </div>
<!--navigation ends-->

<div class="slider">

      <div class="slide active-slide">
        <div class="container-header">
          <div class="row">
            <div class="slide-copy col-xs-4">
              <h1> Welcome</h1>
              <p> This website will tell you everything you want and need to know about me.</p>
            </div>
            <div class="slide-img col-xs-8">
            <br />
              <img src="Images/One-P13c3-one-piece-34104399-1920-1080.jpg">
            </div>
          </div>
        </div>      
      </div>

      <div class="slide slide-feature">
        <div class="container-header">
          <div class="row">
            <div class="col-xs-12">
              <a href="#">Concure Your fears</a>
       
            </div>
            
          </div>
        </div>      
      </div> 

      <div class="slide">
        <div class="container-header">
          <div class="row">
            <div class="slide-copy col-xs-6">
            <div class="strawhat">
            <img src="Images/CP9.jpg"/>
            </div>
            <div class="vs">
            <h1>VS</h1>
            </div>
            </div>
            <div class="slide-img col-xs-6">
            <div class="cp9">
              <img src="Images/tumblr_m5zb2udDOS1rquvsdo2_250.png"/>
            </div>
            </div>
          </div>
        </div>      
      </div> 


      <div class="slide">
        <div class="container-header">
          <div class="row">
            <div class="slide-copy col-xs-5">
              <h1>Zoro</h1>
              <p>Strongest crew member after captain</p>
            </div>
            <div class="slide-img col-xs-7">
              <img src="Images/20130224101634!One-Piece-Pirate-Warriors-2-Zoro.png">
            </div>
          </div>
        </div>      
      </div> 

    </div>

    <div class="slider-nav">
      <a href="#" class="arrow-prev"><img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/flipboard/arrow-prev.png"></a>
      <ul class="slider-dots">
        <li class="dot active-dot">&bull;</li>
        <li class="dot">&bull;</li>
        <li class="dot">&bull;</li>
        <li class="dot">&bull;</li>
      </ul>
      <a href="#" class="arrow-next"><img src="http://s3.amazonaws.com/codecademy-content/courses/ltp2/img/flipboard/arrow-next.png"></a>
    </div> 
<main>
<div class="row">
	<div class="col-xs-4">
    <div class="content-box">
    <h1><img src="Images/images (3).jpg" /></h1>
    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    </div>
   </div>
    	<div class="col-xs-4">
        <div class="content-box">
        <h1><img src="Images/images (2).jpg" /></h1>
    <p> It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    	</div>
    </div>
	<div class="col-xs-4">
    <div class="content-box">
        <h1><img src="Images/313410-brook_of_one_piece.jpg" /></h1>
    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    </div>
    </div>
</div>
</main>
<footer>
<p>&copy; Islam Nasyrov</p>
</footer>
</body>
</html>