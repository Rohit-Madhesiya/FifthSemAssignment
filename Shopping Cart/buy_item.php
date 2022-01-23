<?php
include('db_connection.php');
session_start();

if(isset($_POST['adder'])){
  $id=$_POST['id'];
  $count=$_POST['noItem'];
  // if selected item is less than 1
  if($count<=0){
    header("refresh:0; url=index.php");
    exit;
  }
  // query for inserting item id and no. of items to buy in cart_detail table
  $query="INSERT INTO cart_detail(item_id, no_of_item) VALUES($id,$count)";
  if(mysqli_query($con,$query)){
    header("refresh:0; url=index.php");
    exit;
  }else{
    echo "Failed!";
  }
}



if(isset($_POST['submit'])){
  $query="SELECT * FROM cart_detail";
  $res1=mysqli_query($con,$query);
  $num1=mysqli_num_rows($res1);
  echo $num1;

  while($row1=mysqli_fetch_array($res1,MYSQLI_ASSOC)){
    $item_id=$row1['item_id'];
    $id=$row1['id'];
    $count=$row1['no_of_item'];
      $sql="SELECT no_of_items FROM item_details WHERE id=$item_id";
      $res2=mysqli_query($con,$sql);
      $row2=mysqli_fetch_array($res2,MYSQLI_ASSOC);

    $count=$row2['no_of_items']-$count;
    $delQuery="DELETE FROM cart_detail WHERE id=$id";
    $sql="UPDATE item_details SET no_of_items=$count WHERE id=$item_id";
      if(mysqli_query($con,$sql)==TRUE&&mysqli_query($con,$delQuery)==TRUE){
        echo "Sucess!<br>";
        echo "$item_id available items: $count";
      }else{
        echo "Failed";
      }
  }
}
?>