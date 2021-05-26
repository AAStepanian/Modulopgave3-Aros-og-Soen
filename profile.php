<?php
include('header.php');
if(!isset($_SESSION['login_user'])){
header("location: index.php");
}
?>
<div id="profile">
<b id="logout"><a href="logout.php">Log Out</a></b>
</div>
</body>
</html>
