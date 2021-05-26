<?php include("header.php"); ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Modulopgave 3</title>
    <link rel="stylesheet" href="../css/style.css">
  </head>
  <body style="background-color: #c67b19;">
    <div>
     <form method="post" action="connect.php">
     <input type="text" name="username" placeholder="Username"> <br><br>
     <input type="password" name="password" placeholder="Password"> <br><br>
     <input type="text" name="name_Title" placeholder="Usertype"> <br><br>
     <input type="text" name="name_First" placeholder="Name"> <br><br>
     <input type="text" name="name_Last" placeholder="Lastname"> <br><br>
     <input type="email" name="email" placeholder="E-mail" ><br><br>
     <input type="number" name="user_classes_id" placeholder="Userclass" ><br><br>
     <input type="submit" value="Add client">
     </form>

     <table>
<tr>
<th>First name</th>
<th>Last name</th>
<th>Title</th>
<th>Username</th>
<th>E-mail address</th>
<th>User type</th>
<th>User id</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "root", "crmmodulopgave3");
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT name_First, name_Last, name_Title, username, email, user_classes_id, id FROM users";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
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
</div>
  </body>
</html>
