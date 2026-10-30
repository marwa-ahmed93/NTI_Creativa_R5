<?php
session_start();

//filter 

// $email = "mo@yahoo.com";


// echo filter_var($email  ,FILTER_VALIDATE_EMAIL);  //true   false



// $age = 55 ;

// echo filter_var($age  , FILTER_VALIDATE_INT,['options' => ['min_range'=>10 , 'max_range'=>50]]) ;


// $username = "Zain" ;
// echo filter_var($username , FILTER_VALIDATE_REGEXP ,['options' => ['regexp' =>  '/^[A-Z][a-z]{2,8}/']]);


require_once 'inc/validate.php' ;

if($_SERVER['REQUEST_METHOD'] == 'POST'){

$errors = [];


foreach($validates as $validate_name => $validate_value){
$value =  filter_input(INPUT_POST , $validate_name , $validate_value['filter'], $validate_value['my_options']??null) ;

if(empty($_POST[$validate_name])){
    $errors[$validate_name] = "You must Fill $validate_name";
}elseif($value == false){
$errors[$validate_name]  = $validate_value['error'] ;
}
// if($value== false){
//     $errors[$validate_name] = $validate_value['error'] ;
// }elseif(empty($_POST[$validate_name])){
//      $errors[$validate_name] = "You must Fill $validate_name";
// }


}
if($errors){
 $_SESSION['errors'] = $errors ;  
 header('location:form.php?price_error=1')  ;
 exit();
}


$_SESSION['success'] = "Login success";
header('location:home.php');
exit;




}