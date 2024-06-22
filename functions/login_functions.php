<?php 
    include(__DIR__ . "/connection.php"); 

    session_start();
    $error='';
    if($_SERVER["REQUEST_METHOD"] == "POST") {
    
        // username and password sent from form 
        $email = $_POST['email'];
        $pass = $_POST['password'];

        $sql = "SELECT * FROM employee WHERE email = '$email' and password = '$pass'";

        $result = mysqli_query($conn, $sql);      
        $row = mysqli_num_rows($result);      
        $count = mysqli_num_rows($result);

        if($count == 1) {
            // session_register("email");
            $_SESSION['login_user'] = $email;
            header("location: ../welcome.php");
        } else {
            $error = "Your Login Name or Password is invalid";
            dd($error);
        }
    }

    function dd($data) {
        echo '<pre>';
        var_dump($data); // or use print_r($data);
        echo '</pre>';
        die();
    }
?>