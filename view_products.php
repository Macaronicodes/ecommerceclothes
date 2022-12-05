<html>
<head>
    <title>view_products</title>
    <link rel="stylesheet" href="addproducts.css">
</head>
<body>
<p><h3>products</h3></p>
    
<table>
<tr>
<th>product_id</th>
<th>product_name</th>
<th>product_image</th>
<th>unit_price</th>
<th>available_quantity</th>
<th>subcategory_id</th>
<th>created_at</th>
<th>updated_at</th>
<th>added_by</th>
<th>is_deleted</th>


<th colspan="2" align="center">operations</th>
</tr>

<?php
$conn=mysqli_connect('localhost','root','','Ecommerce');
if($conn->connect_error){
    die('Connection failed:'.$conn->connect_error);
}
    else{echo "Connected successfully";};
$sql = "SELECT * FROM tbl_product";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
            

               while ($row = $result->fetch_assoc()) { 
                ?>
                    <tr>
                    <td><?php echo $row['product_id']; ?> </td>
                    <td><?php echo $row['product_name']; ?></td>

                    <td><?php echo $row['product_image']; ?></td>  
                    <td><?php echo $row['unit_price']; ?></td>
                    <td><?php echo $row['available_quantity']; ?></td>
                    <td><?php echo $row['subcategory_id']; ?></td>
                   
                    <td><?php echo $row['created_at']; ?></td>
                    
                    <td><?php echo $row['updated_at']; ?></td>
                    
                    <td><?php echo $row['added_by']; ?></td>
                    
                    <td><?php echo $row['is_deleted']; ?></td>
                   
                    <td><a class="" href="registration.php">Edit</a></td>
                    <td><a class="" href="#">Delete</a></td>
                </tr>
                <?php
                
            }
}else{
    echo"No results";
}
$conn->close();

            ?>
                

</table>               

    
</body>
</html>