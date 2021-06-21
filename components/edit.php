<?php
include('header.php');
include_once("connection.php");
if(!isset($_SESSION['valid'])) {
    header('Location: ./index.php');
}

if(isset($_POST['update']))
{	
    $id = $_POST['id'];
	
    $name = $_POST['name'];
    $qty = $_POST['qty'];
    $price = $_POST['price'];	
	
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
    } else {	
        //Updating the table
        $result = mysqli_query($mysqli, "UPDATE products SET name='$name', qty='$qty', price='$price' WHERE id=$id");
        header("Location: ../view.php");
    }
}

//ID from URL
$id = $_GET['id'];

//Data from specific ID
$result = mysqli_query($mysqli, "SELECT * FROM products WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
    $name = $res['name'];
    $qty = $res['qty'];
    $price = $res['price'];
}
?>

<?php
include_once('footer.php');
?>