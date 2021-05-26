<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php");
}
?>
<?php include('nav.php'); ?>
<!DOCTYPE html>
<html>
<head>
<title>Your Home Page</title>
<link rel="stylesheet" href="../css/style.css">
</head>
<body>
<div id="profile">
<b id="welcome">Welcome: <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>
