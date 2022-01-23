<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="index.css">
  <title>Available Stocks</title>
</head>
<body>
<h2>Online Shopping</h2>
  <div class="home"> <a href="index.php">HOME</a></div>
  <div class="home"> <a href="admin.php">BACK</a></div>

<div class="tab-container">
  <table>
    <tr>
      <th>IMAGE</th>
      <th>NAME</th>
      <th>PER ITEM PRICE</th>
      <th>AVAILABLE ITEMS</th>
      <th>TOTAL PRICE</th>
    </tr>
  <?php
  include("db_connection.php");
  session_start();
  $query="SELECT * FROM `item_details`";
  $res=mysqli_query($con,$query);
  $count=mysqli_num_rows($res);
  $total_amount=0;

  if($count>0){
    
    while($row=mysqli_fetch_array($res,MYSQLI_ASSOC)){
      $id=$row['id'];
      $name=$row['name'];
      $items=$row['no_of_items'];
      $per_price=$row['price'];
      $img=$row['image'];
      $targetFolder="/php_assignment/Shopping Cart/items/";
      $imgSrc=$targetFolder.$img;
      $total_price=$items*$per_price;
      $total_amount+=$total_price;
$html= "<tr><td><img src='$imgSrc' class='image' alt='item img $id'></td><td>$name</td><td>Rs. $per_price</td><td>$items UNIT</td><td>Rs. $total_price</td></tr>";
      echo $html;
    }
  }else{
    echo "<tr><td colspan='5' style='font-size:22px;font-weight:800; color:gray;text-align:center;'>Stock is Empty!</td></tr>";
  }
  ?>
  </table>
</div>
  <h3 class='tAmtHead'>Total Funds: Rs. <?php echo "$total_amount"; ?></h3>
</body>
</html>