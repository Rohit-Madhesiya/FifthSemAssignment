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
    Enter a Positive Number:  <input type="number" name="num">
    <input type="submit" value="Submit">
  </form>

  <?php
    $num=$_GET["num"];
    echo "Factors of the given number ".$num." is: ";
//Preforming operation through loops to find the factor and print it to the Browser
    for($i=1;$i<=$num;$i++){
      if($num%$i==0){
        echo $i.", ";
      }
    }

  ?>
</body>
</html>