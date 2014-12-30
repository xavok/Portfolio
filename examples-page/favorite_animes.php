<!doctype html>
<html>
<head>
<meta charset="utf-8">
    <!--jquery-->
    <script src="../jquery/jquery.js"></script>
    <!--my own javascript-->
    <script src="../MyJavaScript/app.js"></script>
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="../Bootstrap/bootstrap.css">

    <!-- Optional theme -->
    <link rel="stylesheet" href="../Bootstrap/bootstrap-theme.css">
    <!-- Latest compiled and minified JavaScript -->
    <script src="../Bootstrap/bootstrap.js"></script>
    <link rel="stylesheet" type="text/css" href="../MyCSS/mainstyles.css">
    <title>Favorite Anime</title>
</head>

<body>

    <!--navigation starts-->
  <div class="nav">
      <div class="container">
      <ul class="left-side-menu">
       <li><a href="../index.html">Home</a></li>
          <li><a href="#">Welcome</a></li>
          <li><a href="#">About Me</a></li>
          <li><a href="examples-page/examples.html">Exapmles of my work</a></li>
          <li><a href="../register.html">Register</a></li>
          <li><a href="../login.html">Login</a></li>
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
<?php 
# Script 2 - checkbox.php
# Created 12/30/2014
# Created by Islam N.
# Makes ckeckbox
$anime = array();
if(isset($_POST['anime'])) {
	$anime = $_POST['anime'];
}
asort($anime);
if(isset($anime)) {
	$count = count($anime);
foreach($anime as $title) {
echo "$title <br />";
} 
if($count == 0) {
	echo "You did not select any anime...";
} else {
echo " You selected $count animes!";
}
}
?>
</body>
</html>