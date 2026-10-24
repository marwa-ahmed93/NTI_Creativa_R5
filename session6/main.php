
<?php

// echo "Hello World";
// echo "<br>";

// echo "Hello Worl <br>" ;
// echo "Hello Worl <br>" ;
// echo "Hello Worl <br>" ;
// echo "Hello Worl <br>" ;
// echo "Hello Worl <br>" ;
// echo "Hello Worl <br>" ;



// echo 5+5 ;   //10

/******************* Variables ***************************************************************** */
// int x = 5+5;    boolean isActive = true ;   string username = "moamed" // strongly type


//loosely type  php    $x=5+5   $x = "malik"    $x=false    php js  var x = 10  



// $x = 5+5 ;  //10  integer
// echo $x + 20 ;
// echo gettype($x);
echo "<br>";

$x = "malik";   //string
//  echo $x ;
// echo gettype($x);
//  echo "<br>";

/**   $variable_name  = variable_value  ;   */




/****************    PHP Data Types    ************************************************************************** */

/**
 * string (text values)   $username = "ahmed" 
 * int (whole numbers)     $num = 20 ;
 * float (decimal numbers)  $num = 2.3 ;
 * bool (true or false)    $isActive = true
 * array (multiple values)   $students = [] ;    $students = array() ;
 * object (stores data as objects)  {}
 * null (empty variable)    $x = null
 * 
 */






/*************************  Casting  ********************************************************************* */
/**
 * automatic casting   =>   "5" + 5   => 10
 * manual casting     =>   (int)"mm" + 20
 */


// $number = "5" + 5 ;   // 5+5  =>  10   
// echo $number ;



// $number = (int) "mm" + 20 ;  //  0 + 20  => 20 
// echo $number ;




// $number = (int) 5.5 + 20 ;  //  5 +20  =>  25
// echo $number ;



// $num = 5 . 55 ;                //concat
// echo $num ;




/*****************************************  IF statement    ******************************************************************* */

// $age = 10 ;

// if($age > 18 ){   //true
// echo "You Can Register";
// }
// else{
//     echo "not valid age";
// }


// $gender = 'male' ;

// if($gender == 'male'){
//     echo "welcome mr" ;
// }

// elseif($gender == 'female'){
//     echo "Hello";
// }

// else{
//     echo "invalid";
// }



/*******************  Nested if ************************ */
// if($age > 20){

//  echo "Welcome at Summer tanning   <br>";

//     if($gender == 'male'){
//          echo "welcome mr" ;
//     }

// }


///////////////////////////////////////////////////

// $gender = 'male' ;

// if($gender == 'female'){
//     echo "Welcome";
// }

// else{
//     echo "invalid";
// }

////////////////////////////// ternary operator  Short if //////////////////////////////////////////

// $age = 10 ;

// if($age >= 19 ){
//     echo "hi";
// }
// else{
//     echo "invalid age";
// }

// echo   $age >= 19 ? "hi"  : "invalid age" ;


/*************************************************************************** */

// if(' '){    // default true
//     echo "hi" ;
// }
// else{
//     echo "invalid";
// }


////////////////////////////////////////////////////


// if(false){    // false
//     echo "hi" ;
// }
// else{
//     echo "invalid";
// }

// $error = [] ;

// if($error){  

// }


// if(){   //  syntax error,

// }

///////////////////////////////  PHP if Operators  //////////////////////////////////////////////
/**
 * ==   value  
 * ===   value datatype
 * !=    value
 * !==    value datatype
 */

// $gender = "male" ;

// if($gender == "female"){

// }

// $x = 50;    //datatype=>  integer   value => 5

// $y = '5';   //datatype=>  string    value => 5

//  if($x <> $y){
//     echo "Equal" ;
//  }

// else{
//       echo "Not Equal" ; 
// }

// $username = 'r';

// echo gettype($username);   





/////////////////////////////  PHP Logical Operators    ///////////////////////////////////////////////////////////

// $age = 13 ;
// $gender = 'male' ;

// if($age >15 || $gender == 'male'){
//     echo "true ";
// }



// $a = 5;
// //   false  ||   false  || false ||    true  ||   false ||   false     => true
// if ($a == 2 || $a == 3 || $a == 4 || $a == 5 || $a == 6 || $a == 7) {
//   echo "$a is a number between 2 and 7";
// }



////////////////////////////////////// PHP switch Statement  /////////////////////////////////////////////////////////////////


// $day = 1;

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


//////////////////////////////

// $day = 3;
// switch($day){
//     case 1 :
//          echo "Saturday";
//          break ;

//              case 2 :
//           echo "Sunday";
//          break ;

//              case 3 :
//          echo "monday";
//          break ;

//              case 4 :
//          echo "thr";
//          break ;

//             case 5 :
//          echo "wed";
//          break ;

//             case 6 :
//            echo "tu";
//          break ;

//             case 7 :
//            echo "fri";
//          break ;

//          default:
//           echo "invalid";
// }


////////////  DRY   don`t repeat yourself ////////////////////////////////////////

// $fruit = 'apple';

// switch($fruit){

// case 'apple' : 

// case 'orange' : 

// case 'mango' : 
//    echo "this is a fruit" ;
//    break ;   


// case 'tomato' : 

// case 'botato' : 
//    echo "this is a vegetable" ;
//    break ;   


//   default:
//   echo "invalid"; 

// }









// echo "welcome";

// $username = 'said';
// echo gettype($username) . "<br>";
// $username = 55;
// echo $username ."<br>";

// echo gettype($username);

// if(''){

// }else{

// }

// switch(''){}


/**
 * 90 100  A+
 * 80  90  B+
 * 70   80  c+
 * 60   70  D
 * 50  60   F
 */



// $grade = 89;


// if($grade >=90  &&  $grade<= 100){
//     echo "A+";
// }
// elseif($grade >=85){
//     echo "A";
// }
// elseif($grade >=80){
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



////////////////////////////////////  Operators   //////////////////////////////////////////////////////////

// $x = 5;
// $x %= 2    ;                         //$x = $x+1 ;
// echo $x ;

///////////////////////////////  Increment / Decrement  ///////////////////////////////////////////
/**
 * post Increment    $i++ 
 * pre Increment    ++$i
 */


///////////////post
// $i = 5 ;
// echo $i++ ;   // 5
// echo $i ;   //6


/////////////pre
// $i = 5 ;
// echo ++$i ;   // 6
// echo $i ;   //6





////////////////////////////////////////////////////////////

// $i = 5 ;  //6
// //    5     2      7 
// $y = $i++  +2   +  ++$i  ;
// echo $y ;   //14


//////////////////////////////////////////////
// $a = 10 ;

// $b = $a ;

// echo $a ."<br>";   //10
// echo $b ."<br>";    //10





// $a = 10 ;   //11

// $b = $a++ ;   //10

// echo $a ."<br>";   //11
// echo $b ."<br>";    //10



// $a = 10 ;   //11

// $b = ++$a ;   //10

// echo $a ."<br>";   //11
// echo $b ."<br>";    //11


/////////////////////////////////////////////

// $x = 6 ;   //7   8
// //    6     4    7    + 3   9 
// $y = $x++  +4 + $x++  + 3 + ++$x ;
// echo $y ;  //29


///////////////////////////////////   LOOP     ///////////////////////////////////////////////////////////
/**
 * for
 * while
 * do while
 * foreach
 */

////////////////////  FOR LOOP
// echo "Hello";

// for($i=10  ;  $i >= 0   ; $i--  ){
//       echo "Hello  $i <br>";
// }

// for(  ;   ;   ){
//     echo "HI";
// }
/**
 * syntax error
 * one 
 * infinite  loop
 */



// for($i=0 ; $i<= 10 ; $i++){
//     echo "welcome $i  <br>";
// }

/////////////////////////////WHILE LOOP

// $i=0  ;
// while($i<= 10){
//     echo "welcome $i  <br>";
//     $i++;
// }


// $correctPin = 1278 ;
// $enterPin = null ;

// while($correctPin != $enterPin ){
//     echo "Please Your Pin" ;
//     $enterPin = 1278 ;
// }



///////////////////////////////////Do while

// $i=0  ;
// while($i<= 10){
//     echo "welcome $i  <br>";
//     $i++;
// }


///
// do{
//      echo "welcome $i  <br>";
//     $i++;
// }while($i<= 10);



$age = 18 ;
// while($age > 20){
//     echo "Hello";
// }


// do{
//     echo "Hello"; 
// }while($age > 20);



///////////////////////// two words  ///////////////////////////////////////////////////
/**
 * Break 
 * Continue
 */

// for($i = 1 ; $i<= 10 ; $i++){
//     if($i == 6){
//         continue ;
//     }
// echo $i ."<br>";
// }

/***
 * 1  => 50   1234 BOOM   6789 BOOM 11 12 13 14 BOOM   41 42 43 44 BOOM  46 47 48 49  BOOM
 * 
 * 
 */

// for($i=1 ; $i<=50 ; $i++){
//    if($i % 5 == 0){
//     echo "BOOM <br>";
//     continue ;
//    }
//   echo $i ."<br>";

// }




///////////////////////////////    Array   //////////////////////////////////////////////////////////
/**
 * Indexed array 
 * 
 * 
 */

// $students1 = 'ahmed';
// $students2 = 'zain';
// $students4 = 'mailk';
// $students = 'ahmed';




// $students = array();
// echo gettype($students);


////////////index array
//            0          1        2         3         4      5   6       7
// $students = ['mona' , 'malik' , 'ahmed' , 'omar' , 'amr'  , 'eman'  ]  ;

// $students[4] = 'tariq';

// print_r($students);


// echo count($students);
//  echo "<pre>";
//  echo $students ;

//  print_r($students);
// var_dump($students);

// echo $students[0];
// echo $students[1];
// echo $students[2];
// echo $students[3];


// echo "welocme" ," nti" , "PHP";
// print "welocme" ;

// for($i=0 ; $i < count($students) ; $i++){
//     echo $students[$i] ."<br>";
// }




// $x = 50 ;

// echo  $x . "<br>";    //string
// print $x . "<br>";    //string
// print_r($x) . "<br>";  //array

//var_dump($x) ;  //array


// $user_name = "ahmed";
// var_dump($user_name);


////////////////////////////////////////FOREACH   loop 

// foreach($students as $student){

//     echo $student ."<br>";

// }




//////////////////////////////// Assoc Array  /////////////////////////////////////////
/**
 * [
 * $key => $value ,
 * $key => $value ,
 * $key => $value
 * ]
 * 
 */

// $person = [

// 'name' => 'zain' ,
// 'age' => '20'   ,
// 'gender' => 'male',
// 'fav_color' => 'red'

// ];

// $person['name'] = 'ah';
// $person['fav_color'] = 'red';
// $person['name'] = 'ahmed';
// echo "<pre>";
// print_r($person);

// echo $person['name'];   //zain
// echo $person['age'];   //zain
// echo $person['gender'];   //zain

// foreach($person as $x => $y){
// echo "$x  : $y <br>" ;
// }










////////////////////////////  Multi diminutions array  /////////////////////////////////////////////////////////////
//            0       1      2
// $students = ['a0' , 'mm' , 'op'];

// $students = [
// //  0      1    2
// ['ahmed' , 24 , 'male'],   //index 0
// //  0      1       2
// ['mona' , 22 , 'female'],   //index 1
// // 0       1      2
// ['nour' , 20 , 'female'],    //index 2

// ];

echo"<pre>";
// print_r($students[1][0]);

// print_r($students[1]);

// echo $students[1][0] ;



// $students = [
//            //  0      1    2
// 'a' =>  ['ahmed' , 24 , 'male'],   
//          //  0      1       2
// 'b' =>  ['mona' , 22 , 'female'],   
//          // 0       1      2
// 'c' =>   ['nour' , 20 , 'female'],    

// 'd' =>   ['name'=>'malik' , 'age'=>10 , 'gender'=> 'male']

// ];

// // print_r($students['a']);
// echo $students['d']['name'];





// $students = [
  

// 'a' =>   ['name'=>'malik' , 'age'=>10 , 'gender'=> 'male'] ,
// 'b' =>   ['person'=>'mona' , 'age'=>20 , 'gender'=> 'female'] ,
// 'c' =>   ['st'=>'asmaa' , 'age'=>22 , 'gender'=> 'female'] ,

// ];

// foreach($students as $key=>$value){
//    foreach($value as $k=> $v){
//     echo " $k  :  $v  <br>";
//    }
// }


/////////////////////////// Pass By Value && Pass By References  ////////////////////////////////////////////////////

// $x = 10 ;

// echo $x ."<br>" ;   //10


// $y = &$x ;

// echo $y ."<br>" ;    // 10


// $x =20 ;

// echo $x ."<br>" ;      //  20  

// echo $y ."<br>" ;    // 10




////////////////////////////////// Function  reuse code //////////////////////////////////////////////////////

// $income = 600-200;
// $incomeWithTaxes = $income *0.14;
// $incomeAfterTaxes =$income  - $incomeWithTaxes  ;
// $total = $incomeAfterTaxes - 20 ;
// echo $total ;

// function calc($rev=700 , $exp=100  , $taxesRate =0.14 , $otherExp = 15){

// $income = $rev-$exp;
// $incomeWithTaxes = $income *$taxesRate;
// $incomeAfterTaxes =$income  - $incomeWithTaxes  ;
// $total = $incomeAfterTaxes - $otherExp ;
// echo $total ;

// }

// $a = 600 ;
// $b = 250 ;
// $c = 0.14 ;
// $d = 10 ;

// calc($a, $b , $c , $d);
// echo "<br>";

// calc(700, 230 , 0.14 , 20);
// echo "<br>";

// calc(750, 222 , 0.14 , 18);
// echo "<br>";

// calc(taxesRate:0.15 , otherExp:20);

// calc();
// calc();
// calc();
// calc();


////////////////////////////
/**function
 * void
 * return
 */

// function sum($a , $b){  //void function
//     $result = $a+$b ;  //10 +30  40
//     echo $result ;  //40
// }
// //  //sum(10,30);   40
//  $x =  sum(10 , 30);  // 40      $x = 40     echo $x ;  //40
//  echo $x ;
// // echo $x + 60 ;      //4060

////////////////////// return  //////////////////////////

// function sum($a , $b){  //return function
//     $result = $a+$b ;   //30
//      echo $result ;
//      return $result ;
    
// }
// $x =  sum(50 ,30); 
// echo "<br>";
// echo $x +200;
// $x = sum(10 ,20);
// echo $x ;
// sum(10,40);
//  $x =  sum(10 , 30);  // 40
// echo $x + 60 ;      //100

// function greet($name){
//     return "$name";
// }
// $x =  greet('marwa');
// echo "Welocme ya $x" ;




//////////////////////////////////////////////////////////////////////

// $arr =  [1 ,5 ,6 ,8];
// //write function that take  an array of numbers and return the total of them 
// //write function that return the max numbers of an array 





// function sumArray($arr){
//     $sum =0 ;
//     for($i =0 ; $i< count($arr) ; $i++){
//              $sum += $arr[$i];
//     }
//     return $sum ;
// }


// //////////////////////////

// function maxArr($arr){
//     $max = $arr[0] ;
//     for($i =0 ; $i< count($arr) ; $i++){
//         if($arr[$i] > $max ){
//             $max = $arr[$i];
//         }
//     }
//     return $max ;
// }




/////////////////////////////////////// Scope  ////////////////////////////////////////////////////////
/**
 * Global
 * Local
 */


// $x = 20 ;    //Global
// // echo $x ."<br>";

// function age($var){
//     $y = 10;     //local
//     $y++ ;
//     echo $y ."<br>" ;
//     echo $var ."<br>";

// }

// age($x);         //11
// echo "<br>";

// age();         //11       
// echo "<br>";
// age();         //11





////////////////////////

// $x = 20 ;    //Global
// echo $x ."<br>";

// function age(){
//     $y = 10;     //local
//     $y++ ;
//     echo $y ."<br>" ;
//     // global $x ;
//     // echo $x ."<br>";
//     echo $GLOBALS['x'];

   

// }

// age();         //11
// echo "<br>";
// echo age() ;
// echo "<br>";



// age();         //11
// echo "<br>";

// echo age() ;
// echo "<br>";


// echo age();         //11
// echo "<br>";



///////////////////////  Super Global Variables   //////////////////////////////////////////////////////////

// print_r($GLOBALS);
// echo $GLOBALS['x'];



/******************************** static scope  ********************************************************************/


// function age(){
//   static $y = 10 ;
//     $y++ ;  //11   12   13
//     echo $y ;
// }

// age() ;         //11
// echo "<br>";

// age();         //12
// echo "<br>";

// age();        //13
// echo "<br>";

// function tarckVisit(){
// static $count = 0 ;
// $count++ ;
// echo $count ;
// }
// tarckVisit();
// tarckVisit();
// tarckVisit();
// tarckVisit();


//////////////////////////////  const   //////////////////////////////////////////////////

// const NAME = "mohamed";

// // define('x' , 10);

// function greet(){
//     echo NAME ;
// }
// greet();