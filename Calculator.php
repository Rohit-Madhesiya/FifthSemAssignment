<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Rohit Gupta">
  <title>Calculator</title>
</head>
<body>
  <!-- Defining HTML Form for the Input-->
  <form action="" method="get">
    <input name="num1" type="text" style="width: 150px; display: inline;">
     <select name="operation">
      <option value="+">+</option>
         <option value="-">-</option>
         <option value="*">*</option>
         <option value="/">/</option>
     </select>
    <input name="num2" type="text" style="width: 150px; display: inline;">
    <input name="submit" type="submit" value="Calculate">
  </form>

  <?php
    $num1=$_GET['num1'];
    $num2=$_GET['num2'];
    $operation=$_GET['operation'];
//Performing Operation after submission of the input from the Browser
  if($_GET['submit']){
    if(is_numeric($num1) && is_numeric($num2)){
        // Calculate total
      if($operation == '+'){
        $total = $num1 + $num2; 
      }
      if($operation == '-'){
        $total = $num1 - $num2; 
      }
      if($operation == '*'){
        $total = $num1 * $num2; 
      }
      if($operation == '/'){
        $total = $num1 / $num2; 
      }
    // Print total to the browser
    echo "Result: ".$num1." ".$operation." ".$num2." = ".$total;  
  }else{
    // Print error message to the browser
      echo 'Numeric values are required';
  }
  }
  ?>
</body>
</html>