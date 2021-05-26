<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/nav.css">
    <title>Modulopgave 3</title>
    <?php include('session.php');
    if(!isset($_SESSION['login_user'])) ?>
    <b id="welcome">Logged in as: <i><?php echo $login_session; ?></i></b>
  <b id="logout"><a href="logout.php">Log Out</a></b>
  </head>
  <body>
    <?php include("nav.php"); ?>
