<?php



///////////////////////////////    Array   //////////////////////////////////////////////////////////
//index array

// $friend1 = 'ahmed' ;
// $friend2 = 'mohmaed' ;
// $friend3 = 'zain' ;

// echo $friend ;

// $x = 10 ;
//             0         1      2         3         4       5 index 
// $doctors = ['ahmed' , 'mona' , 'malik' , 'zain' , true  , 55 , 'red'  ];
// echo  count($doctors) ;

// echo "<pre>";
//   print_r($doctors );

// var_dump($doctors) ;

// echo $doctors[2];

// $doctors = array() ;
// echo gettype($doctors);


// print  "hello" ;

// $doctors[] =  'mohamed' ;
// $doctors[0] =  'mohamed' ;  //update  

// print_r($doctors );



// echo  $doctors[0];
// echo  $doctors[1];
// echo  $doctors[2];
// echo  $doctors[3];
// echo  $doctors[4];

//loop on array

// for($i = 0 ; $i< count($doctors) ; $i++){
//     echo $doctors[$i]." " 
// ;}



////Foreach  

// foreach($doctors  as $doctor){
//      echo $doctor . "<br>" ;

// }




//////////////////////////////// Assoc Array  /////////////////////////////////////////

 //           0     1
// $student = [
//     '1' ,
//      'mm'
//      ];  //index array

// $students = [
// 'key' => 'value' ,
// 'key1' => 'value' ,
// 'key2' => 'value' 

// ];    //assoc array ;


$students  =[

'name' =>  'ahmed' , 
'gender' =>'male' , 
'age' => 25 

];

// echo "<pre>";
// print_r($students) ;
// echo  $students['name'];
// echo  $students['gender'];
// echo  $students['age'];
//////////////////////
//foreach 
// for ($i=0; $i <count($students) ; $i++) { 
//     echo $students[$i] ;
// }
////////////////////
// foreach($students as $key=> $value ){
//     echo "$key is :  $value ";
// }

//////////////////
// $students['fav_color'] = "red";
// echo "<pre>";
// print_r($students) ;



// $students['name'] = "zain";
// echo "<pre>";
// print_r($students) ;




////////////////////////////  Multi diminutions array  /////////////////////////////////////////////////////////////

//           0          1   2          3
// $color = ['red' , 'blue' , 'green' , 'white'];

// print_r($color);


//index array 
// $colors= [
// // 0       1       2          3
// ['red' , 'blue' , 'green' , 'white'] ,    //0
// ['black' , 'tomato' , 'green' , 'white'] ,   //1
// ['red' , 'tan' , 'blue' , 'white'] ,  //2

// ];
// echo "<pre>";
// //print_r($colors[0][2]);

// echo $colors[0][2];





///Assoc 
// $colors= [
//              // 0       1       2          3
// 'a' =>  ['red' , 'blue' , 'green' , 'white'] ,    
// 'b' =>  ['black' , 'tomato' , 'green' , 'white'] ,   
// 'c' =>  ['red' , 'tan' , 'blue' , 'white'] ,  

// ];
// echo "<pre>";
// print_r($colors['b'][3]);

// echo $colors[0][2];



//
// $colors= [

// 'a' => [
//     'name'=> 'ahmed' ,
//      'age'=> 20 , 
//       'gender' => 'male' ,
//       'fav_color' => 'white'] ,  


// ];

// // echo "<pre>";
// // print_r($colors['a']['name']);
// // print_r($colors['a']['age']);

// // echo $colors[0][2];


// foreach($colors as $key => $value){
//    foreach($value as $k=>$v){
//     echo "$k:  $v";
//    }
// }




/////////////////////////// Pass By Value && Pass By References  ////////////////////////////////////////////////////


//value 
// $x = 10 ;

// $y =$x ;


// echo $x ."<br>"; 
// echo $y ."<br>"; 


// $x = 30 ;

// echo $x ."<br>";    //30
// echo $y ."<br>";    //10



//References
// $x = 10 ;

// $y =&$x ;


// echo $x ."<br>"; 
// echo $y ."<br>"; 


// $x = 30 ;

// echo $x ."<br>";    //30
// echo $y ."<br>";    //10




//////////////////////////////////////////////////////////////////////////

////////////////////////////////// Function  reuse code //////////////////////////////////////////////////////









// function calc($rev=500 ,$exp=10 , $taxes=0.14 ,$other_exp=100  ){

// $income = $rev-$exp;
// $incomeWithTaxes = $income *$taxes;
// $incomeAfterTaxes =$income  - $incomeWithTaxes  ;
// $total = $incomeAfterTaxes - $other_exp  ;
// echo $total ;

// }
// $a = 1000  ;

// calc($a , 200 , 0.14 , 30) ;
// echo "<br>" ;
// calc($a , 100 , 0.14 , 20) ;
// echo "<br>" ;
// calc() ;
// echo "<br>" ;
// calc(taxes:0.15) ;
// calc() ;
// calc() ;




// $product = 500 - 100 ;
// $productWithTaxes = $product*0.14 ;
// $productAfterTaxes = $product - $productWithTaxes ;

// $total = $productAfterTaxes - 20 ;

// echo $total ;

// echo "<br>";


// $product2 = 600 - 120 ;
// $productWithTaxes2 = $product*0.14 ;
// $productAfterTaxes2 = $product2 - $productWithTaxes2 ;

// $total2 = $productAfterTaxes2 - 15 ;

// echo $total2 ;


// function calcProduct($price=500 , $ecp=120 , $taxes=0.14 , $order=10){

// $product = $price  - $ecp ;
// $productWithTaxes = $product* $taxes  ;
// $productAfterTaxes = $product - $productWithTaxes ;

// $total = $productAfterTaxes - $order ;

// echo $total ;


// }

// calcProduct(600 , 100 ,0.14 , 15 ) ;
// echo "<br>" ;
// calcProduct(700 , 150 ,0.14 , 14 ) ;
// echo "<br>" ;
// calcProduct(800 , 200 ,0.14 , 15 ) ;
// echo "<br>" ;

// calcProduct( taxes:0.15);




////////////////////////////
/**function
 * void
 * return
 */


// function sum($a ,$b){
//     $result = $a+$b ;   //10 +20 =>30
//     echo $result ;   //void 
// }

// $x =  sum(10, 20);  //30 
// echo $x + 20 ;  //3020



// // echo 5 +5 ;  //10






// function sum($a ,$b){
//     $result = $a+$b ;   //10 +20 =>30
//     echo "hi";
 
//     return $result ;   //return 
// }

// $x =  sum(10, 20);  //30 
// echo $x + 20 ;  //50



// echo 5 +5 ;  //10





/////////////////////////////////////////////////////////////
/////////////////////////////////////// Scope  ////////////////////////////////////////////////////////
/**
 * Global
 * Local
 */



// $x = 20 ;  //global 
// echo $x ; 

//  {  local   }
/*** */


// 1
// function avg($t){

//   $y =10 ;   //local  11
//   echo $y++ ;

//   echo $t ;
// }
// avg($x);  //10
// echo "<br>";
// // avg();   //10
// // echo "<br>";
// // avg();   //10


//2
// $x = 20 ;  //global 
// function avg(){

//   $y =10 ;   //local  11
//   echo $y++ ;

// echo "<br>";
// //2
// //   global $x ;
// //   echo $x ;

// //3
// echo $GLOBALS['x'] ;
// }

// avg();  //10
// echo "<br>";
// avg();   //10
// echo "<br>";
// avg();   //10


// echo "<pre>";
// print_r($GLOBALS['x']);






/******************************** static scope  ********************************************************************/

//static 


//  function age(){
//  static  $y = 10 ;
//     $y++ ;  //11   12   13
//     echo $y ;
// }

// age() ;         //11
// echo "<br>";

// age();         //12
// echo "<br>";

// age();        //13
// echo "<br>";


//////////////////////////////  const   //////////////////////////////////////////////////

// const NAME = "mohamed";

// //define('x' , 10);

// function greet(){
//     echo NAME ;
// }
// greet();


// const NAME = "malik";  //php8

// define('name' , 'ahmed');








/************************************************************************* */

// echo "<pre>";
// print_r($GLOBALS);   

/******************** GET  && Post   **************************** */