<html>
<head>
    <title>Users</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<p><h3>Users</h3></p>
    
<table>
<tr>
<th>FIRST Name</th>
<th>surrname</th>
<th>Email</th>

<th colspan="2" align="center">operations</th>
</tr>

<?php
$conn=mysqli_connect('localhost','root','','Ecommerce');
if($conn->connect_error){
    die('Connection failed:'.$conn->connect_error);
}
    else{echo "Connected successfully";};
$sql = "SELECT first_name,surname, email, password FROM register_client";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
            

               while ($row = $result->fetch_assoc()) { 
                ?>
                    <tr>
                    <td><?php echo $row['first_name']; ?> </td>
                    <td><?php echo $row['surname']; ?></td>

                    <td><?php echo $row['email']; ?></td>  

                   
                    <td><?php echo $row['password']; ?></td>
                   
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