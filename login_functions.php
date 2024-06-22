<?php 
    include("connection.php");

    session_start();
    $error='';
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    
        // username and password sent from form 
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM customer WHERE email = '$email' and password = '$pass'";

        $result = mysqli_query($conn, $sql);      
        $row = mysqli_num_rows($result);      
        $count = mysqli_num_rows($result);

        if($count == 1) {
        
            // session_register("email");
            $_SESSION['login_user'] = $email;
            header("location: index.php");
        } else {
            $error = "Your Login Name or Password is invalid";
        }
    }
?>