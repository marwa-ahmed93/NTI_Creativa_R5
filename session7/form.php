


<?php 
include('inc/header.php');
include('inc/errors.php');


?>


<!-- 
<form action="handleForm.php" method="post" class="w-75 m-auto my-5">
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">User name</label>
    <input type="text" name="name" 
    value="<?php if(isset($_COOKIE['email'] )) echo $_COOKIE['email'] ?>"
    class="form-control" id="exampleInputEmail1">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password"
    value="<?php if(isset($_COOKIE['password'] )) echo $_COOKIE['password']  ?>"
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
</form> -->




<!-- <form action="handleForm.php" method="post" class="w-75 m-auto my-5" 
enctype="multipart/form-data">
 
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">image</label>
    <input type="file" name="image"
   
    class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" name="remember_me" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me </label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form> -->






<form action="handleForm.php?username=ahmed" method="post" class="w-75 m-auto my-5" 
enctype="multipart/form-data">
 
    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">name</label>
    <input type="text" name="username"
   
    class="form-control" id="exampleInputPassword1">
  </div>

    <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">password</label>
    <input type="password" name="password"
   
    class="form-control" id="exampleInputPassword1">
  </div>


  <div class="mb-3 form-check">
    <input type="checkbox" name="remember_me" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Remember me </label>
  </div>
  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>






 <?php   include('inc/footer.php')  ?>