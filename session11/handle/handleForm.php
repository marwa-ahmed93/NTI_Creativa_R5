<?php
require_once '../dbc.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

trim(htmlspecialchars(extract($_POST)));
// $username = $_POST['name'] ;


//validation


$query =  "INSERT INTO customers(`first_name`,`last_name`,`email`,`gender`,`money`,`city`, `country`)
VALUES('$first_name' , '$last_name' , '$email' , '$gender' , '$money' , '$city' , '$country')"  ;

$result =  mysqli_query($connection , $query) ;
if($result){
    $_SESSION['success'] = "Data Created Successfully" ;
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

