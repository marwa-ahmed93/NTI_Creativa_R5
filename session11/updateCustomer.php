<?php

require_once "inc/header.php";
require_once 'dbc.php';

if(isset($_GET['id'])){
    $id = $_GET['id'];
  $query =   "SELECT * FROM `customers` WHERE id = $id" ;
  $result =  mysqli_query($connection , $query ) ;
  $customer =  mysqli_fetch_assoc($result) ;
}




?>


<?php
if(isset($_SESSION['errors'])){
  ?>
<div class="alert alert-danger"><?php  echo $_SESSION['errors'] ?></div>
  <?php
}
unset($_SESSION['errors']);
?>



<div class="container my-2">

<form class="w-75 m-auto" action="handle/handleUpdate.php?id=<?php echo $customer['id'] ?>" method="post">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">First_name</label>
    <input type="text" name="first_name" value="<?= $customer['first_name']  ?>" class="form-control" id="exampleInputEmail1" >
  </div>

  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">Last_name</label>
    <input type="text" name="last_name" value="<?= $customer['last_name']  ?>" class="form-control" id="exampleInputEmail1" >
  </div>

  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email </label>
    <input type="email" name="email" value="<?= $customer['email']  ?>" class="form-control" id="exampleInputPassword1">
  </div>

 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">gender </label>
    <input type="text" name="gender" value="<?= $customer['gender']  ?>" class="form-control" id="exampleInputPassword1">
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Money </label>
    <input type="text" name="money" value="<?= $customer['money']  ?>" class="form-control" id="exampleInputPassword1">
  </div>

     <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">City </label>
    <input type="text" name="city" value="<?= $customer['city']  ?>" class="form-control" id="exampleInputPassword1">
  </div>

   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">country </label>
    <input type="text" name="country" value="<?= $customer['country']  ?>" class="form-control" id="exampleInputPassword1">
  </div>

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" class="btn btn-primary">Update</button>
</form>

</div>