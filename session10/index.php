<?php

require_once 'dbc.php' ;

$query = "SELECT * FROM `customers`";  //

$result =  mysqli_query($connection , $query) ;  //

//$customers =  mysqli_fetch_all($result ,MYSQLI_ASSOC) ;  //default index array

 //$customers =  mysqli_fetch_assoc($result) ;  //one row

// echo "<pre>" ;
// print_r($customers);

?>


<?php 
require_once 'inc/header.php' ;
?>





<table class="table table-dark table-striped">
  <thead>
    <th>index</th>
    <th>first_name</th>
    <th>email</th>
    <th>Money</th>
    <th>country</th>
    <th>city</th>
  </thead>


<tbody>
   <?php 
   $cont = 1;
  // foreach($customers as $customer){
    while($row = mysqli_fetch_assoc($result)){
?>
 <tr>
     <td><?php echo $cont++ ?></td>   
     <td><?php echo $row['first_name'] ?></td>   
     <td><?php echo $row['email'] ?></td>   
     <td><?php echo $row['money'] ?></td>   
     <td><?php echo $row['country'] ?></td>   
     <td><?php echo $row['city'] ?></td>   
    </tr>

    <?php

   }
   ?>
</tbody>


</table>