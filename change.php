<?php
session_start();
include('components/header.php');
include('components/userinfo.php');
include('components/connection.php');
include('components/edit.php');
if(!isset($_SESSION['valid'])) {
    header('Location: index.php');
}
?>

    <!--Edit Task-->
<div class="editlist">
    <form action="components/edit.php" method="POST" name="form1">
  <div class="form-group row">
    <label class="col-4"></label> 
    <div class="col-8">
      <input id="name" name="name" type="text" required="required" class="form-control" value="<?php echo $name;?>">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4"></label> 
    <div class="col-8">
      <input id="qty" name="qty" type="text" class="form-control" required="required" value="<?php echo $qty;?>">
    </div>
  </div>
  <div class="form-group row">
    <label class="col-4"></label> 
    <div class="col-8">
      <input id="price" name="price" type="text" class="form-control" required="required" value="<?php echo $price;?>">
    </div>
  </div> 
  <div class="form-group row">
    <div class="offset-4 col-8">
<input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
    <button type="submit" name="update" value="Update" class="btn btn-warning">Edit</button>
    <button type="button" class="btn btn-warning" id="editback">Back</button>
    </div>
  </div>
</form>
    </div>
    <!--script-->
<script>
document.getElementById("editback").addEventListener('click', () =>{
    window.location.href = "view.php";
})
  </script>
<?php
include_once('components/footer.php');
?>