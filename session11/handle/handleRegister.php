<?php
require_once '../dbc.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

trim(htmlspecialchars(extract($_POST)));
// $username = $_POST['name'] ;


//validation
$password = password_hash($password , PASSWORD_DEFAULT ) ;

$query =  "INSERT INTO users(`name`,`email`,`password`,`salary`)
VALUES('$name' , '$email' , '$password' , '$salary')"  ;

$result =  mysqli_query($connection , $query) ;
if($result){
    $_SESSION['register_success'] = "Register Successfully" ;
    header('location:../login.php');
    exit();
}
else{
    echo "no data inserted ";
    $_SESSION['errors'] = "no data inserted" ;
    header('location:../register.php');
    exit();
}



}else{
    echo "method Should be POST";
}

