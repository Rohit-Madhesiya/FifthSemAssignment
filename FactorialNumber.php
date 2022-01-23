
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Rohit Gupta">
  <title>Factorial Number</title>
</head>
<body>
  <!-- Defining HTML Form for the Input-->
  <form action="" method="get">
    Enter the Number:  <input type="number" name="num">
    <input type="submit" value="Submit">
  </form>
<?php
  $s=$_GET["num"];
  //Calling the function factorial to Find and Print output to the Browser
    echo factorial($s);

  //Defining Function factorial with Recursive Approach
  function factorial($val){
  //It returns 1 if value is less than 1
    if($val<=1){
      return 1;
    }
  //Recursively Calling the Function
    return $val*factorial($val-1);
  }
?>
</body>
</html>


