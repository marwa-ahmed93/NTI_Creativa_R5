<?php
require_once '../dbc.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

trim(htmlspecialchars(extract($_POST)));
// $username = $_POST['name'] ;


//validation

$id = $_GET['id'];


$query =  "UPDATE  customers SET `first_name` ='$first_name' ,
`last_name` ='$last_name'  ,
`email` = '$email',
`gender` ='$gender',
`money` =  '$money' ,
`city` ='$city',
 `country` = '$country'
 WHERE id = $id 
 "  ;

$result =  mysqli_query($connection , $query) ;
if($result){
    $_SESSION['update'] = "Data Updated Successfully" ;
    header('location:../index.php');
    exit();
}
else{
    echo "no data inserted ";
    $_SESSION['errors'] = "no data inserted" ;
    header('location:../createCustomer.php');
    exit();
}



}else{
    echo "method Should be POST";
}

