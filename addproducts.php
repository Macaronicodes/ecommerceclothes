<?php

@include 'connect.php';

if(isset($_POST['add_product'])){
   $product_id = $_POST['product_id'];
   $product_name = $_POST['product_name'];
   $product_description = $_POST['product_description'];
   $product_image = $_FILES['product_image']['name'];
   $product_image_tmp_name = $_FILES['product_image']['tmp_name'];
   $product_image_folder = 'uploaded_img/'.$product_image;
   $unit_price = $_POST['unit_price'];
   $available_quantity = $_POST['available_quantity'];
   $subcategory_id = $_POST['subcategory_id'];

   $insert_query = mysqli_query($conn, "INSERT INTO `tbl_product`(product_id, product_name,product_description, product_image, unit_price, available_quantity, subcategory_id ) VALUES('$product_id', '$product_name', '$product_description', '$product_image', '$unit_price', '$available_quantity', '$subcategory_id ')") or die('query failed');

   if($insert_query){
      move_uploaded_file($product_image_tmp_name, $product_image_folder);
      $message[] = 'product add succesfully';
   }else{
      $message[] = 'could not add the product';
   }
};

if(isset($_GET['delete'])){
   $delete_id = $_GET['delete'];
   $delete_query = mysqli_query($conn, "DELETE FROM `product` WHERE id = $delete_id ") or die('query failed');
   if($delete_query){
      header('location:admin.php');
      $message[] = 'product has been deleted';
   }else{
      header('location:admin.php');
      $message[] = 'product could not be deleted';
   };
};

if(isset($_POST['update_product'])){
   $update_product_id = $_POST['update_product_id'];
   $update_product_name = $_POST['update_product_name'];
   $update_product_description  = $_POST['update_product_description '];
   $update_p_image = $_FILES['update_p_image']['name'];
   $update_p_image_tmp_name = $_FILES['update_p_image']['tmp_name'];
   $update_p_image_folder = 'uploaded_img/'.$update_p_image;
   $update_unit_price = $_POST['update_unit_price'];
   $update_available_quantity = $_POST['update_available_quantity'];
   $update_subcategory_id  = $_POST['update_subcategory_id '];


   $update_query = mysqli_query($conn, "UPDATE `product` SET product_id = '$update_product_id', product_name = '$update_product_name',product_description  = '$update_product_description ', product_image = '$update_product_image', unit_price = '$update_unit_price', subcategory_id = '$update_subcategory_id'  WHERE id = '$update_p_id'");

   if($update_query){
      move_uploaded_file($update_product_image_tmp_name, $update_product_image_folder);
      $message[] = 'product updated succesfully';
      header('location:admin.php');
   }else{
      $message[] = 'product could not be updated';
      header('location:admin.php');
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>admin panel</title>

   
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

<section>

<form action="product_page.php" method="POST" class="add-product-form" enctype="multipart/form-data">
   <h3>add a new product</h3>
  <input type="number" placeholder="Enter product id" name="product_id" class="box">
   <input type="text" placeholder="Enter product name" name="product_name" class="box">
   <input type="text" placeholder="Write a description of the product" name="product_description" class="box">
   <input type="file" accept="image/png, image/jpeg, image/jpg" name="product_image" class="box">
   <input type="number" placeholder="Enter product price" name="unit_price" class="box">
   <input type="number" placeholder="available quantity" name="available_quantity" class="box">
   <input type="number" placeholder="Enter subcategory id " name="subcategory_id" class="box">
   <input type="submit" value="add the product" name="add_product" class="btn">
</form>

</section>

<section class="display-product-table">

   <table>

      <thead>
         <th>ID</th>
         <th>product name</th>
         <th>product description</th>
         <th>Image</th>
         <th>Price</th>
         <th>Quantity</th>
         <th>Subcategory ID</th>
      </thead>

      <tbody>
         <?php
         
            $select_product = mysqli_query($conn, "SELECT * FROM `tbl_product`");
            if(mysqli_num_rows($select_product) > 0){
               while($row = mysqli_fetch_assoc($select_product)){
         ?>

         <tr>
            <td><?php echo $row['product_id']; ?></td>
            <td><?php echo $row['product_name']; ?></td>
            <td><?php echo $row['product_description']; ?></td>
            <td><img src="uploaded_img/<?php echo $row['product_image']; ?>" height="100" alt=""></td>
            <td>$<?php echo $row['unit_price']; ?>/-</td>
            <td><?php echo $row['available_quantity']; ?></td>
            <td><?php echo $row['subcategory_id']; ?></td>
            <td>
               <a href="addproducts.php?delete=<?php echo $row['product_id']; ?>" class="delete-btn" onclick="return confirm('are your sure you want to delete this?');"> <i class="fas fa-trash"></i> delete </a>
               <a href="addproducts.php?edit=<?php echo $row['product_id']; ?>" class="option-btn"> <i class="fas fa-edit"></i> update </a>
            </td>
         </tr>

         <?php
            };    
            }else{
               echo "<div class='empty'>no product added</div>";
            };
         ?>
      </tbody>
   </table>

</section>

<section class="edit-form-container">

   <?php
   
   if(isset($_GET['edit'])){
      $edit_id = $_GET['edit'];
      $edit_query = mysqli_query($conn, "SELECT * FROM `product` WHERE id = $edit_id");
      if(mysqli_num_rows($edit_query) > 0){
         while($fetch_edit = mysqli_fetch_assoc($edit_query)){
   ?>

   <form action="" method="post" enctype="multipart/form-data">
      <img src="uploaded_img/<?php echo $fetch_edit['product_image']; ?>" height="200" alt="">
      <input type="hidden" name="update_p_id" value="<?php echo $fetch_edit['id']; ?>">
      <input type="number" class="box" required name="update_product_id" value="<?php echo $fetch_edit['product_id']; ?>">
      <input type="text" class="box" required name="update_product_name" value="<?php echo $fetch_edit['product_name']; ?>">
      <input type="text" class="box" required name="update_product_description" value="<?php echo $fetch_edit['product_description']; ?>">
      <input type="number" min="0" class="box" required name="update_unit_price" value="<?php echo $fetch_edit['unit_price']; ?>">
      <input type="file" class="box" required name="update_product_image" accept="image/png, image/jpg, image/jpeg">
      <input type="number" class="box" required name="update_available_quantity" value="<?php echo $fetch_edit['available_quantity']; ?>">
      <input type="number" class="box" required name="update_subcategory_id" value="<?php echo $fetch_edit['subcategory_id']; ?>">
      <input type="submit" value="update the product" name="update_product" class="btn">
      <input type="reset" value="cancel" id="close-edit" class="option-btn">
   </form>

   <?php
            };
         };
         echo "<script>document.querySelector('.edit-form-container').style.display = 'flex';</script>";
      };
   ?>

</section>

</div>

<!-- custom js file link  -->
<script src="js/script.js"></script>
</body>
</html>