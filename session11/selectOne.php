<?php


require_once 'dbc.php' ;

if(isset($_GET['id'])){
    $id = $_GET['id'];
    $query =  "SELECT * FROM `customers` WHERE id = $id" ;

$result =  mysqli_query($connection , $query) ;
if(mysqli_num_rows($result) == 1){
$customer =  mysqli_fetch_assoc($result) ;

// echo "<pre>" ;
// print_r($customer);
}else{
    header('location:index.php');
    exit() ;
}

}
else{
    echo "you must id";
}
?>


<?php   require_once 'inc/header.php' ?>



<div class="card text-center">
  <div class="card-header">
<h2>    Customer ID :  <?=  $customer['id'] ; ?>  </h2>
   
  </div>
  <div class="card-body">
    <h5 class="card-title"> Customer name :
        <?php echo $customer['first_name'] ; ?></h5>
    <p class="card-text">Customer email :
        <?php  echo $customer['email'] ?></p>
    <p class="card-text">Customer money :
        <?php  echo $customer['money'] ?></p>
    <p class="card-text">Customer country :
        <?php  echo $customer['country'] ?></p>

    <a href="index.php" class="btn btn-primary">Back</a>
  </div>
 
</div>
