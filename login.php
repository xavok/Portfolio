<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php 
session_start(); 
include("passwords.php"); 
if ($_POST["ac"]=="log") { /// do after login form is submitted  
     if ($USERS[$_POST["username"]]==$_POST["password"]) { /// check if submitted 
     username and password exist in $USERS array 
          $_SESSION["logged"]=$_POST["username"]; 
     } else { 
          echo 'Incorrect username/password. Please, try again.'; 
     }; 
}; 
if (array_key_exists($_SESSION["logged"],$USERS)) { //// check if user is logged or not  
     echo "You are logged in."; //// if user is logged show a message  
} else { //// if not logged show login form 
     echo '<form action="login.php" method="post"><input type="hidden" name="ac" value="log"> '; 
     echo 'Username: <input type="text" name="username" />'; 
     echo 'Password: <input type="password" name="password" />'; 
     echo '<input type="submit" value="Login" />'; 
     echo '</form>'; 
}; 
?>
</body>
</html>