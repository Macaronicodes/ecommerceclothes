<?php

//print_r($_POST);

include("connect.php");
$surname=$_POST["surname"];
$password=$_POST["password"];

      
        //to prevent from mysqli injection  
        $surname = stripcslashes($surname);  
        $password = stripcslashes($password);  
        $surname = mysqli_real_escape_string($conn, $surname);  
        $password = mysqli_real_escape_string($conn, $password);  
      
        $sql = "select * from register_client where surname = '$surname' and password = '$password'";  
        $result = mysqli_query($conn, $sql);  
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);  
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            session_start();
            //On page 1
            $_SESSION['surname'] = "$surname";
            echo "<h1><center> Login successful </center></h1>";  
            header("Location: product_page.php");
            exit();
        }  
        else{  
            echo "<h1> Login failed. Invalid Username or Password.</h1>";
            echo "<h1> Kindly Try Again.</h1>";   
        }     

       

mysqli_close($conn);
?>