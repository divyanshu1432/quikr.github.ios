<?php
session_start();
require "connection.php";
$id = $_GET['id'];
$del = "DELETE FROM `cart` WHERE `id` = '$id'";

$query = mysqli_query($conn, $del);
if ($query) {

	header('location:add to cart.php');
}

?>