<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Rohit Gupta">
  <title>Palindrome Number</title>
</head>
<body>
  <!-- Defining HTML Form for the Input-->
  <form action="" method="get">
    Enter the Number:  <input type="number" name="num">
    <input type="submit" value="Submit">
  </form>

  <?php
    $num=$_GET["num"];
    $s=$num;
    $revNum=0;
    //Performing operation in loop to reversively
    // assign the value into variable $revNum
    while($s>1){
      $revNum=($revNum*10)+($s%10);
      $s/=10;
    }
    //Checking reverse number is palindrome or not 
    //and printing the result to the Browser
    if($revNum==$num){
      echo $num." is a Palindrome Number.";
    }else{
      echo $num." is not a Palindrome Number.";
    }
  ?>
</body>
</html>