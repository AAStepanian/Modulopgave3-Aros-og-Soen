<?php include("header.php"); ?>
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modulopgave 3</title>
  </head>
  <body style="background-color: #c67b19;">

     <form method="post" action="connect.php">
     Username : <input type="text" name="username"><br><br>
     Password : <input type="password" name="password"><br><br>
     Title : <input type="text" name="name_Title"><br><br>
     First Name : <input type="text" name="name_First"><br><br>
     Last Name : <input type="text" name="name_Last"><br><br>
     email : <input type="email" name="email"><br><br>
     User Type : <input type="number" name="user_classes_id"><br><br>
     <input type="submit" value="Submit">
     </form>
  </body>
</html>
