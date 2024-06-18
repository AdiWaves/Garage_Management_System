<?php
require("includes/connection.php");
if (isset($_GET['id']) && is_numeric($_GET['id'])) {
    $item_name = $_GET['name'];
    $item_id = $_GET['id'];
    $user_id = $_SESSION['user_id'];
    $query = "INSERT INTO `user_item`(`user_id`, `item_id`,`item_name`, `status`) VALUES($user_id, $item_id, $item_name, 2)";
    mysqli_query($conn, $query)  or die(mysqli_error($conn));
    header('location: success.php');
}
?>   
