<?php
    session_start();
     if(isset($_POST['login'])){
        $username = $_POST['user'];
        $password = $_POST['pass_1'];    
        $conn = new mysqli("localhost", "root" , "","registeruser"); 

        $sql = "select *from users where username = '$username' and password = '$password'";  
        $result = mysqli_query($conn, $sql);   
        $count = mysqli_num_rows($result);  
          
        if($count == 1){  
            echo "login successful";
            header("Location: home.php");  
            $_SESSION['user'] = $username;        }  
        else{  
            echo "<h1> Login failed. Invalid username or password.</h1>";
            header("Location: login.php");  
        } 
     }
?>