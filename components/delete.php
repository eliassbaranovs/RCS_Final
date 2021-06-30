<?php
session_start();
include("connection.php"); 

if(!isset($_SESSION['valid'])) {
    header('Location: ./index.php');
}

//ID from URL
$id = $_GET['id'];
//Deleting selected entry
$result=mysqli_query($mysqli, "DELETE FROM products WHERE id=$id");
header("Location:../view.php");
?>