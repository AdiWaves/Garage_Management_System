<?php
if (isset($_GET["id"])){
    $id = $_GET["id"];

$servername = "localhost";
$username = "root";
$password = "";
$database = "store";

$connection = new mysqli($servername, $username, $password, $database);

$sql = "DELETE FROM users WHERE id=$id";
$connection->query($sql);
}
header("location: usernew.php");
exit;
?>