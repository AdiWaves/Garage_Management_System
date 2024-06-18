<?php
$con = mysqli_connect("localhost", "root", "", "store")or die($mysqli_error($con));
if(session_status() == PHP_SESSION_NONE){
    session_start();
}
?>

<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "store";

$conn = mysqli_connect($servername,$username,$password,$dbname);

if($conn)
{
   //echo"connection ok";
}
else{
    echo"failed";
}
?>