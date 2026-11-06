<?php



session_start();

if(isset($_SESSION['errors'])){
  foreach($_SESSION['errors'] as $error){
?>
  <div class="alert alert-danger w-75 m-auto my-3"><?php    echo $error ."<br>" ; ?></div>
<?php
  }
  unset($_SESSION['errors']);
}