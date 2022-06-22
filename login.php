<?php
 include("phpfile.php");
    if(isset($_GET['username'])){
        $username = $_GET['username'];
        $password = $_GET['password'];
        $result = mysqli_query($mysqli,"SELECT * FROM register WHERE username='$username' AND password='$password'");
        if(mysqli_num_rows($result)==1){
            echo "Login Successful";
        }
        else{
            echo "Login Failed";
        }
    }
 ?>