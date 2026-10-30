<?php


require_once 'inc/header.php' ;
require_once 'inc/errors.php';

?>


<form action="index.php" method="post" class="w-75 m-auto my-5" 
enctype="multipart/form-data">
 
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">name</label>
    <input type="text" name="username"
   
    class="form-control" id="exampleInputPassword1">
  </div>


  
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">email</label>
    <input type="email" name="email"
    class="form-control" id="exampleInputPassword1">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">password</label>
    <input type="password" name="password"
   
    class="form-control" id="exampleInputPassword1">
  </div>


   <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">age</label>
    <input type="number" name="age"
   
    class="form-control" id="exampleInputPassword1">
  </div>


  <div class="mb-3 form-check">
    <input type="checkbox" name="remember_me" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me </label>
  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>


<?php 
if(isset($_GET['price_error'])):
?>
<div class="alert alert-danger" >inavlid price</div>
<?php 
endif
?>