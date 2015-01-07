<?php include('header.php'); ?>
<div id="container-register">
<div class="main">
<form class="form" method="post" action="validate_registration.php">
<h2>Register</h2>
<label>First Name :<span class="appos">*</span></label>
<input type="text" name="fName" id="fName" value="<?php if(isset($_POST['fName'])) { 
echo $_POST['fName']; } ?>" ><br>
<label>Last Name :<span class="appos">*</span></label>
<input type="text" name="lName" id="lName" value="<?php if(isset($_POST['lName'])) { 
echo $_POST['lName']; }?>" ><br>
<label>Date of birth :<span class="appos">*</span></label>
<input type="date" name="DofBirth" id="DofBirth"><br>
<label>Gender :<span class="appos">*</span></label>
<input type="radio" name="sex" value="male" <?php if(isset($_POST['sex']) && ($_POST['sex'] == "male")) echo 'checked="checked"'; ?>>Male
<input type="radio" name="sex" value="female" <?php if(isset($_POST['sex']) && ($_POST['sex'] == "female")) echo 'checked="checked"'; ?>>Female<br>
<label>Job Name :</label>
<input type="text" name="jName" id="jName" value="<?php if(isset($_POST['jName'])) { 
echo $_POST['jName']; }?>"><br>
<label>Login Name :<span class="appos">*</span></label>
<input type="text" name="login" id="login" value="<?php if(isset($_POST['login'])) { 
echo $_POST['login']; }?>"><br>
<label>Email :<span class="appos">*</span></label>
<input type="text" name="demail" id="email" value="<?php if(isset($_POST['demail'])) { 
echo $_POST['demail']; }?>" ><br>
<label>Password :<span class="appos">*</span></label>
<input type="password" name="password" id="password"><br>
<label>Repeat Password :<span class="appos">*</span></label>
<input type="password" name="Rpassword" id="Rpassword"><br>
<input type="submit" name="register" id="register" value="Register">
</form>
</div>
</div>
<?php include('footer.php'); ?>