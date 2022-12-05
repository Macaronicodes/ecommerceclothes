<?php
require("connector.php");
 $productName = $_POST["product_name"];
 $productID = $_POST["product_id"];
$img = $_FILES['product_image']['name'];
$product_price=$_POST['product_price'];
$subcategory_id=$_POST['subcategory_id'];
$available_quantity=$_POST['available_quantity'];



$sql = "INSERT INTO tbl_products (product_name,product_id,is_deleted) VALUES('$productName','$productID','0')";
 if(mysqli_query($conn,$sql)){
 echo"New record created successfully"."<br/>";

 }
 else{

     echo"Error:" .$sql. "<br/>" .mysqli_error($conn);
 }



?>