<?php
include('db_connection.php');

$count=$_POST['tItem'];
$price=$_POST['rateItem'];
$name=$_POST['itemName'];

if(isset($_POST['submit'])){
  $tmpImg=$_FILES["imgInpt"]["tmp_name"];
  $targetFolder="F:/Installation/XAMP/htdocs/php_assignment/Shopping Cart/items/";
  $itemImg=$targetFolder.basename($_FILES["imgInpt"]["name"]);
  $ImgExt=pathinfo($itemImg,PATHINFO_EXTENSION);
  $img=basename($_FILES["imgInpt"]["name"],$ImgExt);

try{
$query="INSERT INTO item_details(name,no_of_items,price,image) VALUES ('$name',$count,$price,'$img$ImgExt')";
$res=mysqli_query($con,$query);
if(move_uploaded_file($tmpImg,$itemImg)){
  header("refresh:0; url=admin.php");
  exit;
 }else{
   echo "Failed to upload image";
 }

}catch(Exception $e){
  echo "$e";
}



}
?>