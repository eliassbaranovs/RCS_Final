<?php session_start();
include_once("components/connection.php");
include_once('components/header.php');
include('components/add.php');

if(!isset($_SESSION['valid'])) {
    header('Location: index.php');
}
//getting data
$result = mysqli_query($mysqli, "SELECT * FROM products WHERE login_id=".$_SESSION['id']." ORDER BY id DESC");
?>

<div class="main container row gy-5 ">
    <!--userinfo-->
      <div class="container userinfo" id="userinfo">
        <p>Welcome <?php echo  $_SESSION['name']  ?></p>
        <a href="components/logout.php"><button type="button" class="btn btn-warning">Logout
          <i class="fas fa-sign-out-alt"></i>
        </button></a>
      </div>
   <!--Add Product-->
   <div class="container addprod" id="addprod">
   <form action="components/add.php" method="POST" name="form1" class="addform">
    <div class="form-group row">
      <label class="col-4"></label> 
      <div class="col-8">
        <input name="name" placeholder="Product" type="text" required="required" class="form-control">
        <input id="qty" name="qty" placeholder="Quantity" type="text" class="form-control" required="required">
        <input id="price" name="price" placeholder="Price" type="text" class="form-control" required="required">
        <button type="submit" name="Submit" value="add" class="btn btn-warning">Add</button>
        <button type="button" id="addclose" class="btn btn-warning">Close</button>
      </div>
      
    </div>
  </form>
      </div>
      <button id="addme" type="button" class="btn1 btn-warning sticky-top"><i class="fas fa-cart-plus"></i></i>
  Add Product</button>
      <!--Productpage-->
  <div class="container tablebg">
      <table class="table">
    <thead>
      <tr>
        <th scope="col">Name</th>
        <th scope="col">Quantity</th>
        <th scope="col">Price</th>
        <th scope="col">Update</th>
      </tr>
    </thead>
    <tbody>
      <!--Output-->
    <?php
      while($res = mysqli_fetch_array($result)) {
        echo "<td>".$res['name']."</td>";
        echo "<td>".$res['qty']."</td>";
        echo "<td>".$res['price']."</td>";
        echo "<td><a href=\"change.php?id=$res[id]\"><button type='button' class='btn btn-warning'>Edit
        <i class='fas fa-edit'></i>
      </button></a>
      <a href=\"components/delete.php?id=$res[id]\" onClick=\"return confirm('Are you sure you want to delete?')\"><button type='button' class='btn btn-warning'>Delete
      <i class='fas fa-trash-alt'></i>
    </button></a>
      </td>";
        echo "</tr>";
      }
      ?>
      </tbody>
  </table>	
    </div>
    <!--script-->
    <script src="js/add.js"></script>

<?php
include_once('components/footer.php');
?>