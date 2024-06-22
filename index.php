<?php 
    include "functions/connection.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div>
        <form id="loginForm" method="POST" action="functions/login_functions.php" onsubmit="return isValid()">
            <h1>Login Form</h1>
            <div>
                <label>Email</label>
                <input type="email" placeholder="Email" id="email" name="email" />
            </div>
            <div>
                <label>Password</label>
                <input type="password" placeholder="Password" id="password" name="password" />
            </div>
            <div>
                <button type="submit">Login</button>
            </div>
        </form>
    </div>
    <script>
        function isValid(){
            var email = document.getElementById('email').value;
            var password = document.getElementById('password').value;

            if(email === "" || password === ""){
                alert("Email or Password field is empty");
                return false;
            }
            return true; // Return true if the form is valid
        }
    </script>
</body>
</html>
