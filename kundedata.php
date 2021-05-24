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

     <table id="customertable">
<tr>
<th>Firs5t name</th>
<th>Last name</th>
<th>Title</th>
<th>username</th>
<th>E-mail address</th>
<th>User type</th>
<th>User id</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "root", "crmmodulopgave3");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name_First, name_Last, name_Title, username, email, user_classes_id, id FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr>
<td>" . $row["name_First"]. "</td>
<td>" . $row["name_Last"] . "</td>
<td>" . $row["name_Title"]. "</td>
<td>" . $row["username"]. "</td>
<td>" . $row["email"]. "</td>
<td>" . $row["user_classes_id"]. "</td>
<td>" . $row["id"]. "</td>
</tr>";
}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>

  </body>
</html>
