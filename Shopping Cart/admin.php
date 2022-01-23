<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="admin.css">
  <script src="imgShow.js"></script>
  <title>Items Uploading</title>
</head>

<body>
  <h2>Online Shopping</h2>
  <div class="home"> <a href="index.php">HOME</a></div>
  <div class="home"> <a href="admin_stock.php">AVAILABLE STOCKS</a></div>
  <div class="container">
    <h4>Admin Panel</h4>
    <form action="upload_item.php" method="post" enctype="multipart/form-data">
      <div class="itemImg" id="itemImg">
        <input type="file" name="imgInpt" id="imgInpt" required>
        <img src="" id="showImg">
        <span id="hint">Upload Image Here</span>
      </div>
      <div class="itemName">
        <input type="text" name="itemName" id="itemName" placeholder=" " required>
        <label for="itemName">Item Name</label>
      </div>
      <div class="numItem">
        <input type="number" name="tItem" id="tItem" placeholder=" " min='1' required>
        <label for="countItem">Number of Item</label>
      </div>
      <div class="rateDiv">
        <input type="number" name="rateItem" id="rateItem" placeholder=" " min='0' required>
        <label for="rateItem">Per Item Price(Rs.)</label>
      </div>
      <input type="submit" value="Submit" name="submit" class="submit">
    </form>
  </div>
  
</body>

</html>