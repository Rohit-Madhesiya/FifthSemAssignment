<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="author" content="Rohit Gupta">
  <title>Sorting Array Using Different Algorithm</title>
</head>
<body>
<?php
  //Selection Sort Function Definition
  function SelectionSort($arr, $n){
    for($i = 0; $i < $n ; $i++){
      $low = $i;
      for($j = $i + 1; $j < $n ; $j++){
        if ($arr[$j] < $arr[$low]){
          $low = $j;
        }
      }
      // swap the minimum value to $ith node
      if ($arr[$i] > $arr[$low]){
        $tmp = $arr[$i];
        $arr[$i] = $arr[$low];
        $arr[$low] = $tmp;
      }
    }
    return $arr;
  }
  //Bubble Sort Function Definition
  function BubbleSort($arr, $n){
    // Traverse through all array elements
    for($i = 0; $i < $n; $i++){
      // Last i elements are already in place
      for ($j = 0; $j < $n - $i - 1; $j++){
        // traverse the array from 0 to n-i-1
        // Swap if the element found is greater
        // than the next element
        if ($arr[$j] > $arr[$j+1]){
          $t = $arr[$j];
          $arr[$j] = $arr[$j+1];
          $arr[$j+1] = $t;
        }
      }
    }
    return $arr;
  }
  //Insertion Sort Function Definition
  function InsertionSort($arr, $n){
    for ($i = 1; $i < $n; $i++){
      $key = $arr[$i];
      $j = $i-1;
      // Move elements of arr[0..i-1],
      // that are    greater than key, to
      // one position ahead of their
      // current position
      while ($j >= 0 && $arr[$j] > $key){
        $arr[$j + 1] = $arr[$j];
        $j = $j - 1;
      }
      $arr[$j + 1] = $key;
    }
    return $arr;
  }
  //Output the Array to the Browser
  function printArray($arr){
    $len=count($arr);
    echo "After Sorting Elements are: ";
    foreach($arr as $val){
      echo $val." "; 
    }
    echo "<br>";
  }
  //Main Program Starts From Here
  $type=$_GET["algo"];
  //Defining Array with some Values
  $numbers=array(34,23,54,32,54,565,3432,45435,32344,7686,567,98867,102303,1020230,443,464,7688);
  $len=count($numbers);
  //Iterating Array Before Sorting
  echo "Array Before Sort: ";
  foreach($numbers as $val){
    echo $val.", ";
  }
  echo "<br>";
  //Applying Algorithms to Sort the Array and then Printing it to the Browser
  switch($type){
    case 'algo1':
      echo "Sorting done by Selection Sort:";
      printArray(SelectionSort($numbers,$len));
      echo "Time Complexity: O(n<sup>2</sup>) <br>Space Complexity: O(1)<br>";
      break;
    case 'algo2':
      echo "Sorting done by Bubble Sort:";
      printArray(BubbleSort($numbers,$len));
      echo "Time Complexity: O(n<sup>2</sup>) <br>Space Complexity: O(1)<br>";
      break;
    case 'algo3':
      echo "Sorting done by Insertion Sort:";
      printArray(InsertionSort($numbers,$len));
      echo "Time Complexity: O(n<sup>2</sup>) <br>Space Complexity: O(1)<br>";
      break;
    default:
      echo "You have not Selected any Algorithm to Sort the Array!";
  }
?>
  <form action="" method="get">
    Choose the Algorithm to sort the Arrays: 
    <select name="algo" id="algo">
      <option value="none" Selected>--Choose--</option>
      <option value="algo1">Selection Sort</option>
      <option value="algo2">Bubble Sort</option>
      <option value="algo3">Insertion Sort</option>
    </select>
    <input type="submit" value="Submit">
  </form>
</body>
</html>