<?php
include("connection.php");
if(!isset($_SESSION['valid'])) {
     session_start(); 
}

if(isset($_POST['Submit'])) {	
    $name = $_POST['name'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];
    $loginId = $_SESSION['id'];
		
    // empty fields check
    if(empty($name) || empty($qty) || empty($price)) {				
        if(empty($name)) {
            echo "<font color='red'>Name field is empty.</font><br/>";
        }
		
        if(empty($qty)) {
            echo "<font color='red'>Quantity field is empty.</font><br/>";
        }
		
        if(empty($price)) {
            echo "<font color='red'>Price field is empty.</font><br/>";
        }
		
        //previous page link
        echo "<br/><a href='javascript:self.history.back();'>Go Back</a>";
    } else { 
         //inadd into database
        $result = mysqli_query($mysqli, "INSERT INTO products(name, qty, price, login_id) VALUES('$name','$qty','$price', '$loginId')");
         echo header('location: ../view.php');
    }
}
?>
