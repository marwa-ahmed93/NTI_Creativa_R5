<?php 

// echo "hello world";

// print "hello world" ;



/*****************************  variables   ********************************************* */


// echo "hello" ;
// echo "hello" ;
// echo "hello" ;
// echo "hello" ;
// echo "hello" ;
// echo "hello" ;
// echo "hello" ;
// echo "hello" ;

// echo 5 + 5 ; //10

//  int  x=10 ; int  x = "op"  strongly type  java c++ 
//  string username = "marwa";  

//var x = 10 ;   x = "mm"   loosely type  js  php

// $x = 10 ; //number

// echo  gettype($x)."<br>";

// $x = "mm";  //string  value , data type
// echo  gettype($x)."<br>";
// echo $x ;
// echo $x +20 ;
// $is_active = true ;
// echo  gettype($is_active)."<br>";



// $name = "fullstack php";

// echo 'welcome '.$name;








/********************************Data Types************************************************* */

/*
string (text values)
int (whole numbers)
float (decimal numbers)
bool (true or false)
array (multiple values)
object (stores data as objects)
null (empty variable)
 */

// $x = null;  
// echo gettype($x)
// ;


/*************************  Casting  ********************************************************************* */
/*
 * automatic casting   =>   "5" + 5   => 10
 * manual casting     =>   (int)"mm" + 20
 */
// $x = 10 +10 ;

// echo $x ;


// $x = '10' + 10 ; // 20

// echo $x ;


// $name = (int)"m" + 20 ;  //0+20
// echo $name ;

// $y = (int)5.5 + 20 ;
// echo $y ;


// $z = (int) "eman"  ; 
// echo $z ;

// $x = (string)10 ;
// echo gettype($x) ;





/*****************************************  IF statement    ******************************************************************* */


// $age = 18 ;

// if($age >= 18){
//     echo "you can register" ;
// }else{
//     echo "sorry you can`t" ;
// }


// $gender = 'male' ; 
// // $gender = "female" ;

// if($gender == 'female'){
//     echo "equal" ;
// }
// // if($gender == 'male'){
// //     echo "welcome male" ;
// // }elseif($gender == 'female'){
// //         echo "welcome female" ;
// // }
// else{
//     echo "not valid";
// }




// $x = 10 ;
// $y = "10" ;

// if($x === $y)
// {
//     echo "equal" ;
// }
// else{
//     echo "not equal" ;
// }

// if(" "){  //default true 
//     echo "hi" ;
// }
// else{
//     echo "invalid" ;
// }

// $errors = [] ;
// if($errors){

// }



/*******************  Nested if ************************ */
// $age = 15  ;
$gender = 'female';
//  if($age >= 20){

//  echo "Welcome at Summer tanning   <br>";

//     if($gender != 'male'){
//          echo "welcome mr" ;
//     }

// }
 


//  if($gender != 'male'){  //false
//          echo "welcome mr" ;
//     }else{
// echo "not equal ";
//     }
// $x = 10 ;
// $y = '10';

//  if($x !== $y){  //false
//          echo "welcome mr" ;
//     }else{
// echo "not equal ";
//     }





/******************PHP Logical Operators************************************** */

// $a = 200;
// $b = 33;
// $c = 500;

// if ($a > $b && $a < $c ) {
//   echo "Both conditions are true";
// }



// $a = 5;
//  //   false      false       false     true        flase     false    =>true  
// if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
//   echo "$a is a number between 2 and 7";
// }







////////////////////////////// ternary operator  Short if //////////////////////////////////////////

//$age = 20 ;

// if($age >= 19 ){
//     echo "hi";
// }
// else{
//     echo "invalid age";
// }

// echo   $age >= 19 ? "hi"  : "invalid age" ;
// echo $x ;
// echo   $age >= 19 ? "hi"  : "invalid age" ;


// if($age == 20):
// echo "equal 20 ";  
//   endif







$day = 3;

// if ($day == 1) {
//     echo "Saturday";
// } elseif ($day == 2) {
//     echo "Sunday";
// } elseif ($day == 3) {
//     echo "monday";
// } elseif ($day == 4) {
//     echo "thr";
// } elseif ($day == 5) {
//     echo "wed";
// } elseif ($day == 6) {
//     echo "tu";
// } elseif ($day == 7) {
//     echo "fri";
// } else {
//     echo "invalid";
// }

/*********************** switch  ********************************************* */

// switch ($day) {
//     case 1:
//         echo "Saturday";
//         break;

//     case 2:
//         echo "Sunday";
//         break;

//     case 3:
//         echo "monday";
//         break;

//     case 4:
//         echo "thr";
//         break;

//     case 5:
//         echo "wed";
//         break;


//     case 6:
//         echo "tu";
//         break;

//     case 7:
//         echo "fri";
//         break;

//     default:
//         echo "you data invalid";
// }




/****************DRY  don`t rep yourself ******************* */

// $fruit = 'tomato';   

// // $prin = "fruit" ;

// switch($fruit){

//     case "orange" :
//      case "apple"   :
//         echo "fruit" ; 
//         break ;

//       case "tomato" :
//       case "carrot" :
//          echo "vegetable"   ;
//       break ;


//       default:
//         echo "not valid"   ;

// }



// $grade = 110;


// if($grade >=90  &&  $grade<= 100){
//     echo "A+";
// }
// elseif($grade >=85 && $grade < 90){
//     echo "A";
// }
// elseif($grade >=80 ){
//     echo "B+";
// }
// elseif($grade >=75){
//     echo "B";
// }
// elseif($grade >=70){
//     echo "C+";
// }
// elseif($grade >=65){
//     echo "c";
// }
// elseif($grade >=60){
//     echo "D+";
// }
// elseif($grade >=50){
//     echo "D";
// }
// else{
//     echo "F";
// }


/************************************************************* */


////////////////////////////////////  Operators   //////////////////////////////////////////////////////////

// $x = 20;
// $x %=  5;
// echo $x ;


// $x %= 2    ;                         //$x = $x+1 ;
// echo $x ;



///////////////////////////////////////////////////////////////////////

/**
 * post Increment    $i++ 
 * pre Increment    ++$i
 */

///////////////post
// $x = 5 ;
// echo $x++;  //5   6
// echo $x ;  //6



/////////////pre
// $x = 5 ;
// echo ++$x;  //   6
// echo $x ;  //6

// $i = 5 ;  //6
// //      5   2        7
//  $y = $i++  +2   +  ++$i  ;
//  echo $y ;






// $a = 10 ;
// $b = ++$a ;


// echo $a ."<br>";   //11
// echo $b ."<br>";    //10

// $x = 6 ;   //7  8 
// //    6      4     7     3    9
// $y = $x++  + 4 + $x++  + 3 + ++$x ;
// echo $y ;






////////////////  LOOP /////////////////////////////////////////////////
/**
 * for
 * while
 * do while
 * foreach
 */



// echo "ww";


// for( $i = 100  ;  $i >0   ; $i--   ){

// echo "Hello  $i <br>";

// }

// for(  ;  ;  ) {

// }


///////////////////////////////while  

// for($i = 0 ; $i<10 ; $i++){
//     echo $i ."<br>" ;
// }

// $i = 0  ;
// while($i<10){
// echo $i ."<br>" ;
// $i++ ;
// }

// $correct_pin = 7895 ;
// $enter_pin = null ;


// while($correct_pin  != $enter_pin ){
//     echo "please enter you pin" ;
//     $enter_pin = 7895;
// }


//////////////////////////////////do while 
// $i = 0  ;
// do{
//  echo $i ."<br>" ;
// $i++ ;   
// }while($i<10);



// $age = 10 ;

// // while($age >20 )
// // {
// // echo "hi";

// //     }


//     do{
//        echo "hi"; 
//     }while($age >20 );


///////////////////////// two words  ///////////////////////////////////////////////////


for($i = 1 ; $i<20 ; $i++){
 
    if($i %2 == 0){
continue ;

}
       echo $i."<br>";
}