
<?php
// session_start();

// if(isset($_SESSION['success'])){
//     echo '<div class="alert alert-success">';
//     echo $_SESSION['success'];
//     echo '</div>';

//     unset($_SESSION['success']);
// }

// include('inc/header.php');

// echo "HI";





//files 

// readfile('test.txt');


//  rwa
//  $file =  fopen('test.txt' ,'r') ;   //Resource 
//  echo  fread($file ,filesize('test.txt')/2 );
//  fclose($file);

//   $file =  fopen('test.txt' ,'w') ;   //Resource 
//  echo  fwrite($file , "welcome nti fullstack php" );
//  fclose($file);




   $file =  fopen('test.txt' ,'r') ;   //Resource 



//echo fgets($file);

while($line = fgets($file) ){
    echo $line ;
}


?>