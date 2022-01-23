<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Rohit Gupta">
  <title>Grades of a Precentage</title>
</head>
<body>
  <!-- Defining HTML Form for the Input-->
  <form action="" method="get">
    Enter the Obtained Precentage:  
    <input type="number" name="num" placeholder="Percentage">
    <input type="submit" value="Submit">
  </form>

  <?php
    $num=$_GET["num"];
    //Performing operation to print the result to the Browser
    if($num <= 100 && $num >= 80){
      echo "Grade: A";
    }else if($num <= 79 && $num >= 60){
      echo "Grade: B";
    }else if($num <= 59 && $num >= 40){
      echo "Grade: C";
    }else{
      echo "Grade: F";
    }
  ?>
</body>
</html>