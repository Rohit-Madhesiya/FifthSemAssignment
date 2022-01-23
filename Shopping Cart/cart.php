<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Cart</title>
</head>
<body>
  <h2>Online Shopping</h2>
  <div class="home"> <a href="index.php">HOME</a></div>

<div class="tab-container">
  <table>
    <tr>
      <th>IMAGE</th>
      <th>NAME</th>
      <th>Per Item Price</th>
      <th>No. of Items</th>
      <th>PRICE</th>
    </tr>
  <?php
  include("db_connection.php");
  session_start();
  $temp=0;
  $query1="SELECT * FROM `cart_detail`";
  $res=mysqli_query($con,$query1);
  $count=mysqli_num_rows($res);

if($count>0){
  while($row = mysqli_fetch_assoc($res)){
    $cart_id=$row['id'];
    $id=$row['item_id'];
    $buyItm=$row['no_of_item'];
  
    $query2="SELECT * FROM `item_details` WHERE id=$id";
    $res2=mysqli_query($con,$query2);
    $row2=mysqli_fetch_array($res2,MYSQLI_ASSOC);
    $targetFolder="/php_assignment/Shopping Cart/items/";
  
    $img=$row2['image'];
    $imgSrc=$targetFolder.$img;
    $name=$row2['name'];
    $totalItm=$row2['no_of_items'];
    $price=$row2['price'];
    $tPrice=$price*$buyItm;
    $temp+=$tPrice;
      
      echo "<tr><td><img src='$imgSrc' class='image' alt='item img $id'></td><td>$name</td><td>Rs. $price</td><td>$buyItm UNIT</td><td>Rs. $tPrice</td></tr>";
  }
}else{
  echo "<tr><td colspan='5' style='font-size:22px;font-weight:800; color:gray;text-align:center;'>Cart is Empty!</td></tr>";
}

  ?>
  </table>
  <?php
echo "<form action='buy_item.php' method='post' enctype='multipart/form-data'>
<div class='final'>
  <label for='totalAmt'>Total Amount (Rs.) $temp</label>
  <input type='submit' value='BUY' name='submit'>
</div>
</form>";
  ?>
</div>




</body>
</html>