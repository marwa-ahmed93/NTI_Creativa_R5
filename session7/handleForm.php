<?php

  session_start();


//  print_r($_POST);


// echo $_POST['email'];
// $_POST['password'];

// if(isset($_POST['submit'])){

// //  $email =   trim(htmlspecialchars($_POST['email']));
// //   $password =  trim(htmlspecialchars($_POST['password']));

// trim(htmlspecialchars(extract($_POST)));
// // $user_password =  trim(htmlspecialchars($_POST['password']));

// //cookies
// // echo $_COOKIE['user_email'];
//   if(isset($_POST['remember_me']) && $_POST['remember_me'] == true) {
//     setcookie('user_email' , $name , time()+60);
//     setcookie('password' , $password , time()+60);

//   }


//   //sessions 
//   session_start();
//   $_SESSION['name'] = $name;
//   $_SESSION['password'] = $password;


//   header('location:index.php');
//   exit();



// }else{
//     header('location:form.php');
// }





//validation




// if(isset($_POST['submit'])){
//    trim(htmlspecialchars(extract($_POST)));
//     $errors =[] ;
//   //sessions 
//   $_SESSION['name'] = $name;
//   $_SESSION['password'] = $password;



// //valid username  
// if(empty($name)){
//     $errors['name'] =  "you must fill name" ;
// } 
// elseif(strlen($name) <3 || strlen($name)> 12){
//  $errors['name'] =  "len between 3 and 12" ;
// }
// elseif(!is_string($name)){
//    $errors['name'] =  "name must be string" ;
// }

// //valid pass
// if(empty($password)){
//     $errors['password'] =  "you must fill name" ;
// } 
// elseif(strlen($password) <3 || strlen($password)> 12){
//  $errors['password'] =  "password between 3 and 12" ;
// }


// //valid age
// if(empty($age)){
//     $errors['age'] =  "you must fill age" ;
// } 
// elseif($age < 10 || $age > 60){
//  $errors['age'] =  "age between 10 and 60" ;
// }
// elseif(!is_numeric($name)){
//    $errors['age'] =  "age must be numeric" ;
// }



// if($errors){
//   // var_dump($errors);
//   $_SESSION['errors'] = $errors ;
//    header('location:form.php');
//    exit();
// }


//   header('location:index.php');
//   exit();

//   }
//   else{
//     header('location:form.php');
// }



// if(isset($_POST['submit'])){
//   //$_FILES
// //image upload
// $errors = [];

// echo "<pre>";

// print_r($_FILES);

// $image =  $_FILES['image'] ;
// $image_name = $image['name']  ;  //$_FILES['image'] ['name'];
// $tmp_name = $image['tmp_name'] ;
// //ext
// $ext =  pathinfo($image_name  , PATHINFO_EXTENSION) ;  
// $image_new = uniqid().".".$ext;  
// //move 
// move_uploaded_file($tmp_name , $image_new );

// //error 
// $image_error= $image['error'] ;

// $image_size = $image['size']/(1024*1024) ;
// //valid image   

// if($image_error != 0){
//    $errors[] = "you have an error" ;
// }
// elseif($image_size >1 ){
//  $errors[] = "le than 1" ;
// }

// elseif(!in_array($ext , ['jpg' , 'png' , 'jpeg'])){
//   $errors = "ext not correct" ;
// }



// if($errors){
//   $_SESSION['errors'] = $errors;
//   header('location:form.php');
// }



// }
// 


// echo "<pre>" ;
// print_r($_SERVER);





if($_SERVER['REQUEST_METHOD'] == 'POST'){
   
print_r($_REQUEST);  //get post
$_REQUEST['username'];
$_REQUEST['username'];



}else{
  header('location:form.php') ;
}
