<?php
session_start();
include_once('header.php');
include("connection.php");
if(isset($_POST['submitlog'])) {
    $user = mysqli_real_escape_string($mysqli, $_POST['username']);
    $pass = mysqli_real_escape_string($mysqli, $_POST['password']);

    if($user == "" || $pass == "") {
        $loginfail = "<script>alert('WRONG SHIT DUDE')</script>";
    } else {
        $result = mysqli_query($mysqli, "SELECT * FROM login WHERE username='$user' AND password=md5('$pass')")
        or die("Could not execute the select query.");
		
        $row = mysqli_fetch_assoc($result);
		
        if(is_array($row) && !empty($row)) {
            $validuser = $row['username'];
            $_SESSION['valid'] = $validuser;
            $_SESSION['name'] = $row['name'];
            $_SESSION['id'] = $row['id'];
        } else {
            $loginfail = "<script>alert('WRONG CREDS DUDE')</script>";
        }

        if(isset($_SESSION['valid'])) {
            header ('Location: ./view.php');	
        }
    }
} else {
    $loginfail = "";
}
?>
