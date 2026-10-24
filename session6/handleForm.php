<?php

// echo "<pre>";
// print_r($_GET);  //


// echo "Welcome ". $_GET['username'];   
// $_GET['password'];   



// echo "<pre>";
//  print_r($_POST);

// echo "Welcome ". $_POST['username'];  

//db
// $arr = [
//     'name' => 'ahmed' , 
//     'password' => '123456'
// ];


// if(isset($_POST['submit'])){

// $username =   $_POST['username'] ;  //mo
// $password =   $_POST['password'] ;  //123456

// if($username == $arr['name'] && $password == $arr['password']){
//      echo "Welcome ". $_POST['username'];  
// }
// else{
//     echo "Enter valid data";
//       header('location:form.php');
// }
 
// // echo "Welcome ". $_POST['username'];  



// }else{
//     // echo "login";
//     header('location:form.php');
// }



////////////////////////////////////////

// if(isset($_POST['submit'])){

// // trim(htmlspecialchars(extract($_POST)));
// $num1 = $_POST['num1'];
// $num2 = $_POST['num2'];
// $operations = $_POST['operations'] ;


// switch($operations){
//     case '+' :
//      echo $num1 + $num2 ;
//      break ; 
     
//       case '-' :
//      echo $num1 - $num2 ;
//      break ;  

//       case '*' :
//      echo $num1 * $num2 ;
//      break ;  

//       case '/' :
//      echo $num1 / $num2 ;
//      break ;  


//      default:
//       echo "invalid" ;
// }





// }else{
//     header('location:form.php');
// }







/////////////////////////////  Cookie && session   /////////////////////////////////////



// $username = '';
// $password = '';
if(isset($_POST['submit'])){


// print_r($_POST);
    $username = $_POST['username'];
    $password = $_POST['password'];

//    echo "welcome $username";  

//store cookie 
if(isset($_POST['rem_me'])  &&
 $_POST['rem_me'] == true){
setcookie('username' ,  $username , time()+60 );
setcookie('password'  ,  $password , time()+60 );

echo $_COOKIE['username' ];
}




}