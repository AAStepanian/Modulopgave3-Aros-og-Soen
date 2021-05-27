<?php
include('login.php'); // Includes Login Script
if(isset($_SESSION['login_user'])){
header("location: profile.php"); // Redirecting To Profile Page
}
?>
<!DOCTYPE html>
<html>
<head>
<title>Login Form in PHP with Session</title>
</head>
<link rel="stylesheet" href="css/style.css">
<body style="background-color: #c67b19;">
<div id="login">
<h2>Log-in</h2>
<form id="login" action="" method="post">
<ul>
<label>Username:</label>
<input id="name" name="username" placeholder="username" type="text">
</ul>
<ul>
<label>Password:</label>
<input id="password" name="password" placeholder="**********" type="password"><br><br>
<input name="submit" type="submit" value=" Login ">
</ul>
<span><?php echo $error; ?></span>
</form>
</div>
</body>
</html>
