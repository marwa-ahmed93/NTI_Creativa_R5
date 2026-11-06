<?php
require_once '../dbc.php';

if($_SERVER['REQUEST_METHOD'] == 'POST'){

trim(htmlspecialchars(extract($_POST)));
// $username = $_POST['name'] ;


//validation
// $password = password_hash($password , PASSWORD_DEFAULT ) ;
// password_verify($password , );

$query =  "SELECT * FROM `users` WHERE email = '$email' "  ;

$result =  mysqli_query($connection , $query) ;
$user =  mysqli_fetch_assoc($result) ; 
$hash_password =  $user['password'] ;

 $is_verify =  password_verify($password , $hash_password);


if($is_verify ){
    $_SESSION['login_success'] = "login Successfully" ;
    $_SESSION['user_id'] = $user ;
    header('location:../index.php');
    exit();
}
else{
    echo "no data inserted ";
    $_SESSION['errors'] = "no data inserted" ;
    header('location:../login.php');
    exit();
}



}else{
    echo "method Should be POST";
}

