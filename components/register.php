<?php
include("connection.php");

  if(isset($_POST['submitreg'])) {
    $name = mysqli_real_escape_string($mysqli, $_POST['name']);
    $email = mysqli_real_escape_string($mysqli, $_POST['email']);
    $pass = mysqli_real_escape_string($mysqli, $_POST['password']);
    $user = mysqli_real_escape_string($mysqli, $_POST['username']);
      // $name = $_POST['name'];
      // $email = $_POST['email'];
      // $user = $_POST['username'];
      // $pass = $_POST['password'];
      $sql_u = "SELECT * FROM login WHERE username='$user'";
  	$sql_e = "SELECT * FROM login WHERE email='$email'";
  	$res_u = mysqli_query($mysqli, $sql_u);
  	$res_e = mysqli_query($mysqli, $sql_e);

    
    if (mysqli_num_rows($res_u) > 0) {
      $regsuccess = "<script>alert('Username already taken!')</script>;"; 
  	}else if(mysqli_num_rows($res_e) > 0){
      $regsuccess = "<script>alert('Email already taken!')</script>;"; 	
      } else {
          mysqli_query($mysqli, "INSERT INTO login(name, email, username, password) VALUES('$name', '$email', '$user', md5('$pass'))")
          or die("Could not execute the insert query.");
          header( "refresh:3" );
          $regsuccess = "<script>alert('Registration successful')</script>;";        
      }
  } else {
    $regsuccess = "";
  }
?>



