<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Rohit Gupta">
  <title>Smallest and Greatest Number of the Array</title>
</head>
<body>
  <?php
  //Defining Array with some elements to the variable $numbers
$numbers=array(34,23,54,32,54,565,3432,45435,32344,44243,7686,567,98867,102303,1020230,443,464,7688);
    $min=$max=$numbers[0];
    //Performing operation into the array to find minimum 
    //and maximum value among them and assign it to the variable $min and $Max
      foreach($numbers as $val){
        if($val<$min){
          $min=$val;
        }
        if($val>$max){
          $max=$val;
        }
      }
    //Print the Result to the Browser
      echo "Smallest value among the numbers is ".$min." and Greatest value among the number is ".$max;
  ?>
</body>
</html>