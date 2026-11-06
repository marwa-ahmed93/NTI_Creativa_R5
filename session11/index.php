<?php
require_once 'inc/nav.php' ;
require_once 'dbc.php' ;

if(!isset($_SESSION['user_id'] )){
  header('location:home.php');
  exit();
}

$limit =  5 ;

//OFFSET = ($page-1)*limit
// page   limit   offset
//    1    5        0
//   2     5       5
//  3     5        10
if(isset($_GET['page'])){
  $page = $_GET['page'] ;
}else{
   $page = 1 ;
}


$Query  =   "SELECT COUNT(id) as total FROM `customers`" ;
$result =  mysqli_query($connection , $Query) ;
$data = mysqli_fetch_assoc($result) ;
$total = $data['total'];
$numberOfPage = ceil($total/$limit);

// var_dump($numberOfPage);
// die();

if($page > $numberOfPage){
  $page = $numberOfPage ; 
}
elseif($page == null){
  $page = 1;
}




$offset = ($page-1)*$limit ;


$query = "SELECT * FROM `customers` LIMIT $limit OFFSET $offset";  //

$result =  mysqli_query($connection , $query) ;  //

//$customers =  mysqli_fetch_all($result , MYSQLI_ASSOC) ;  //default index array

//  $customers =  mysqli_fetch_assoc($result) ;  //one row

// echo "<pre>" ;
// print_r($customers);
// die();

?>


<?php 
require_once 'inc/header.php' ;
?>



<?php
if(isset($_SESSION['success'])){
  ?>
<div class="alert alert-success"><?php  echo $_SESSION['success'] ?></div>
  <?php
}
unset($_SESSION['success']);
?>


<?php
if(isset($_SESSION['login_success'])){
  ?>
<div class="alert alert-success"><?php  echo $_SESSION['login_success'] ?></div>
  <?php
}
unset($_SESSION['login_success']);
?>


<?php
if(isset($_SESSION['update'])){
  ?>
<div class="alert alert-success"><?php  echo $_SESSION['update'] ?></div>
  <?php
}
unset($_SESSION['update']);
?>


<div class="w-50 m-auto my-3">
  <a class="btn btn-success w-100" href="createCustomer.php">Create Data</a>
</div>


<div class="container my-3">
  <table class="table table-dark table-striped">
  <thead>
    <th>index</th>
    <th>first_name</th>
    <th>email</th>
    <th>Money</th>
    <th>country</th>
    <th>city</th>
    <th>Show</th>
    <th>Update</th>
    <th>Delete</th>
  </thead>


<tbody>
   <?php 
   $cont = 1;
  // foreach($customers as $customer){   //fetch all
    while($row = mysqli_fetch_assoc($result)){   //fetch assoc
?>
 <tr>
     <td><?php echo $cont++ ?></td>   
     <td><?php echo $row['first_name'] ?></td>   
     <td><?php echo $row['email'] ?></td>   
     <td><?php echo $row['money'] ?></td>   
     <td><?php echo $row['country'] ?></td>   
     <td><?php echo $row['city'] ?></td>   
     <td><a class="btn btn-warning" 
     href="selectOne.php?id=
     <?php echo $row['id'] ?>">Show</a></td>

    <td><a class="btn btn-info" 
     href="updateCustomer.php?id=<?php echo $row['id'] ?>">update</a></td>

     <td><a class="btn btn-danger"  href="delete.php?id= <?php echo $row['id'] ?>">Delete</a></td>
    </tr>

    <?php

   }
   ?>
</tbody>


</table>
</div>




<div class=" w-25 m-auto">
  <nav aria-label="Page navigation example">
  <ul class="pagination">
    <li class="page-item"><a class="page-link  <?php if($page == 1 ) echo "disabled"  ?> " href="<?php echo $_SERVER['PHP_SELF']."?page=".($page-1) ?>">Previous</a></li>
    <li class="page-item"><a class="page-link" href="#">1</a></li>
    <li class="page-item"><a class="page-link" href="#">2</a></li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item"><a class="page-link <?php if($page == $numberOfPage ) echo "disabled"  ?>" href="<?php echo $_SERVER['PHP_SELF']."?page=".($page+1) ?>">Next</a></li>
  </ul>
</nav>
</div>