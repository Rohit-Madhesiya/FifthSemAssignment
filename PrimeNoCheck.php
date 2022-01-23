<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Rohit Gupta">
  <title>Checking Prime Number</title>
</head>
<body>
  <!-- Defining HTML Form for the Input-->
  <form action="" method="get">
    Enter a Positive Number:  <input type="number" name="num">
    <input type="submit" value="Submit">
  </form>

<?php
  $s=$_GET["num"];
  //Calling the Function prime() which return a string
    echo prime($s);

  //Defining the Function
  function prime($val){
    $flag=0;
    for($i=2;$i<=$val/2; $i++){
      if($val%$i==0){
        $flag=1;
        break;
      }
    }
    if($val==1){
      return "1 is neither a Prime Number nor a Composite Number!";
    }else if($flag==0){
      return $val." is a Prime Number.";
    }else{
      return $val." is not a Prime Number.";
    }
  }
?>
</body>
</html>