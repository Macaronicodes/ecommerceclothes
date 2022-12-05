<?php

@include 'connect.php';

if(isset($_POST['add_to_cart'])){

   $product_id = $_POST['product_id'];
   $product_name = $_POST['product_name'];
   $product_description = $_POST['product_description'];
   $product_image = $_POST['product_image'];
   $unit_price = $_POST['unit_price'];
   $available_quantity = $_POST['available_quantity'];
   $subcategory_id = $_POST['subcategory_id'];

   $select_cart = mysqli_query($conn, "SELECT * FROM `cart` WHERE product_name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($conn, "INSERT INTO `cart`(product_image, product_name, unit_price, quantity, total_price) VALUES('$product_image', '$product_name', '$unit_price', '$quantity', '$total_price')");
      $message[] = 'product added to cart succesfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>products</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="addproducts.css">
</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> <i class="fas fa-times" onclick="this.parentElement.style.display = `none`;"></i> </div>';
   };
};

?>

<?php  ?>

<div class="container">

<section class="products">

   <h1 class="heading">AALIYAH</h1>

   <div class="box-container">

      <?php
      
      $select_product = mysqli_query($conn, "SELECT * FROM `tbl_product`");
      if(mysqli_num_rows($select_product) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_product)){
      ?>

      <form action="cart.php" method="POST">
         <div class="box">
            <img src="uploaded_img/<?php echo $fetch_product['product_image']; ?>" alt="">
            <h3><?php echo $fetch_product['product_name']; ?></h3>
            <div class="unit_price">$<?php echo $fetch_product['unit_price']; ?>/-</div>
            <input type="text" name="product_name" value="<?php echo $fetch_product['product_name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['unit_price']; ?>">
            <input type="hidden" name="product_description" value="<?php echo $fetch_product['product_description']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['product_image']; ?>">
            <input type="submit" class="btn" value="add to cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>

</body>
</html>