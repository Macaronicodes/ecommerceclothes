<?php

require("connect.php");

print_r($_POST);
$first_name=$_POST["first_name"];
$surname=$_POST["surname"];
$email=$_POST["email"];
$password=$_POST["password"];

$sql= "INSERT INTO register_client(first_name, surname, email, password)
VALUES('$first_name', '$surname',  '$email', '$password')";

if(mysqli_query($conn,$sql)){
	echo"User Registered successfully";
}else{
	echo "Error".mysqli_error($conn);
}

?>