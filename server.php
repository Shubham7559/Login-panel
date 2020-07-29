<?php
 if(isset($_POST['Register'])){
     $username = $_POST['user'];
     $email = $_POST['email'];
     $pass = $_POST['pass_1'];
     $conn = new mysqli("localhost", "root" , "","registeruser");

 if(!$conn){
    die ("connection failed");
}

$sql = "INSERT INTO users(username,email,password) VALUES('$username','$email','$pass')";

if(mysqli_query($conn,$sql)){
   echo "Register Successfully";
   echo "<a href='login.php'> Login </a>";

}
else 
   echo "error" .$conn->error;

$conn->close();    
   
 }
 else
     header("registration.php");
 
 


?>