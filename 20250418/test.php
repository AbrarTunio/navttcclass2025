<?php 
$name = "Nobody";
$age = 35;
$dept = "NAVTTC";

// echo $name." is ".$age." years old"

//1.  Create variables for name, age, department, and city.
//    Display the details inside an HTML <div> using.

//  2. Create two numeric variables: $num1 = 15, $num2 = 5.
// Calculate and display:
// Sum, Difference, Product, Quotient
// Show the output in HTML using <p> tags. 

// Create variables: $studentName, $courseName, $batchYear.
// Write a sentence like: 
// Welcome Abrar to CIT, batch 2025


$userMarks = 80;

$message = '';

if ( $userMarks >= 70 ){
  // header("Location: index.php");
} else{
  $message = "Satisfied with failure!";
}

?>
<html>
 <head>
  <style>
   .success , .failure {
    text-align: center;
   }
   .success  {
    color: 'green';
    border: 2px solid green;
   }

   .failure {
    color : 'red';
    border: 2px solid red;
   }
  </style>

 </head>
 <body>
  
   <?php if ( $message != '' ){
     echo "<div class='failure'>". $message  ."</div>";
   }
   ?>

 </body>
</html>