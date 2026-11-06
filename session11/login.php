<?php
require_once 'inc/header.php' ;
require_once 'dbc.php';
?>




<?php
if(isset($_SESSION['register_success'])){
  ?>
<div class="alert alert-success"><?php  echo $_SESSION['register_success'] ?></div>
  <?php
}
unset($_SESSION['register_success']);
?>


<?php
if(isset($_SESSION['errors'])){
  ?>
<div class="alert alert-danger"><?php  echo $_SESSION['errors'] ?></div>
  <?php
}
unset($_SESSION['errors']);
?>

<h2 class="text-center">login</h2>


<div class="container my-2">

<form class="w-75 m-auto" action="handle/handleLogin.php" method="post">


  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email </label>
    <input type="email" name="email" class="form-control" id="exampleInputPassword1">
  </div>

 <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password </label>
    <input type="password" name="password" class="form-control" id="exampleInputPassword1">
  </div>

 

 

  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>

  <button type="submit" class="btn btn-primary">Login</button>
</form>

</div>