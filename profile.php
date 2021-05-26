<?php
include('session.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php");
}
?>
<?php include('header.php') ?>
<div id="profile">
<b id="welcome">Welcome: <i><?php echo $login_session; ?></i></b>
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>
