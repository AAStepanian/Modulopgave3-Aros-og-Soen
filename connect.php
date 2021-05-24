<?php
$username = filter_input(INPUT_POST, 'username');
$password = filter_input(INPUT_POST, 'password');
$name_Title = filter_input(INPUT_POST, 'name_Title');
$name_First = filter_input(INPUT_POST, 'name_First');
$name_Last = filter_input(INPUT_POST, 'name_Last');
$email = filter_input(INPUT_POST, 'email');
$user_classes_id = filter_input(INPUT_POST, 'user_classes_id');

if (!empty($username)){
if (!empty($password)){
if (!empty($name_Title)){
if (!empty($name_First)){
if (!empty($name_Last)){
if (!empty($email)){
if (!empty($user_classes_id)){
$host = "localhost";
$dbusername = "root";
$dbpassword = "root";
$dbname = "crmmodulopgave3";
$conn = new mysqli ($host, $dbusername, $dbpassword, $dbname);
if (mysqli_connect_error()){
die('Connect Error ('. mysqli_connect_errno() .') '
. mysqli_connect_error());
}
else{
$sql = "INSERT INTO users (username, password, name_Title, name_First, name_Last, email, user_classes_id)
values ('$username','$password','$name_Title','$name_First','$name_Last','$email','$user_classes_id')";
if ($conn->query($sql)){
header("location: kundedata.php");
}
else{
echo "Error: ". $sql ."
". $conn->error;
}
$conn->close();
}
}
}
}
}
}
}
}
else{
echo "Manglende info";
die();
}
?>
