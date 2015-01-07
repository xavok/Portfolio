<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style type="text/css" title="text/css" media="all">
.error {
	font-weight: bold;
	color: #C00;
}
</style>
</head>

<body>
<?php 
# Created 12/29/2014
# Created by Islam N.
# This script handles form

//Validate the name:
if (!empty($_POST['fName'])) {
$fName = $_REQUEST['fName'];
} else {
	$fName = NULL;
	echo "<p class='error'> You forgot to enter your first name!</p>";
}
if (!empty($_POST['lName'])) {
$lName = $_REQUEST['lName'];
} else {
	$lName = NULL;
	echo "<p class='error'> You forgot to enter your last name!</p>";
}
//Validate date of birth:
if(!empty($_REQUEST['DofBirth'])) {
	$DofBirth = $_REQUEST['DofBirth'];
} else {
	$DofBirth = NULL;
	echo "<p class = 'error'> You forgot to enter your date of birth!</p>";
}
//Validate login:
if(!empty($_REQUEST['login'])) {
	$login= $_REQUEST['login'];
} else {
	$login = NULL;
	echo "<p class = 'error'> You forgot to enter your login name!</p>";
}

//Validate the email:
if(!empty($_REQUEST['demail'])) {
	$demail = $_REQUEST['demail'];
} else {
	$demail = NULL;
	echo "<p class='error'> You forgot to enter your email!</p>";
}


//Validate the gender:
if(isset($_REQUEST['sex'])) {
	$sex = $_REQUEST['sex'];
	
	if($sex == "male") {
	echo "<p><b> Good day, Sir!</b></p>";
	} else if($sex == "female") {
	echo "<p><b> Good day, Madam!</b></p>";
	} else {
	//Unacceptable value
	$sex = NULL;
	echo "<p class = 'error'> Gender should be either male or female!</p>";
} 
} else {
	//$_REQUEST['gender'] is not set.
	$sex = NULL;
	echo "<p class='error'>You forgot to select your gender!</p>";
}
//Validate the password
if(!empty($_REQUEST['password'])) {
	$password = $_REQUEST['password'];
} else {
	$password = NULL;
	echo "<p class='error'> You forgot to enter a password!</p>";
}

//Validate the password again
if(!empty($_REQUEST['Rpassword'])) {
	$Rpassword = $_REQUEST['Rpassword'];
} else {
	$Rpassword = NULL;
	echo "<p class='error'> You forgot to enter a password!</p>";
}
//if everything is Ok, print the message:
if($lName AND $demail AND $sex && $password && $Rpassword && $DofBirth && $fName && $login) {
	echo "<p> Thank you, $fName $lName, for register with us.<br /> 
	Your login:<i>$login</i><br />
	Your Password:<i>$password</i></p>
	<p>We send email to <i>$demail</i>. Please valide your registration.</p>";
} else {
	//Missing form values:
	echo "<p class = 'error'>Please go back and fill out the form completely!</p>";	
}
?>
</body>
</html>