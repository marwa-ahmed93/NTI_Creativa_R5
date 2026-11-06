<?php

require_once 'dbc.php';


if(isset($_GET['id'])){
    $id = $_GET['id'] ;

 $query =  "DELETE FROM customers WHERE id = $id" ;

$result =   mysqli_query($connection , $query) ;

if($result){  // 
if(mysqli_affected_rows($connection)){
header('location:index.php');
   exit();
}
else{
    echo "enter valid id" ;
}
  
}
// if($result){
//     header('location:index.php');
//     exit();
// }


// if(mysqli_num_rows($result) == 0){

// }

}