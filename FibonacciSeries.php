<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Rohit Gupta">
  <title>Fibonacci Series</title>
</head>
<body>
  <!-- Defining HTML Form for the Input-->
  <form action="" method="get">
    Enter the length of the Fibonacci Series:  
    <input type="number" name="num">
    <input type="submit" value="Submit">
  </form>

<?php
  $s=$_GET["num"];
  //Printing the first and second value of the Series to the browser
  echo "0 1 ";
  //Calling the Function fibonacci() to find 
  //and Print the remaining values of the Series
  fibonacci($s-2);

  //Defining the Function fibonacci() to perform the operation
  function fibonacci($val){
    $n1=0;
    $n2=1;
    for($i=1;$i<=$val;$i++){
      $n3=$n1+$n2;
      echo $n3." ";
      $n1=$n2;
      $n2=$n3;
  }
}
?>
</body>
</html>