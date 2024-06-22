<?php

include("functions/connection.php")
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="create_account.css">
    <title>Open Account</title>
</head>
<body>
    <div>
        <h1>Bank Account Registration Form</h1>
    </div>
    <div class="form">
    <form>
        
<label for="account">Account Type:</label>
<select name="account" id="account">
  <option value="Personal">Personal</option>
  <option value="Savings" selected>Savings</option>
  <option value="Loan">Loan</option>
  <option value="Business">Business</option>
</select>      
<label for="accountnumber">AccountNumber:</label>
<input type="accountnumber" id="accountnumber" name="accountnumber">
<label for="branch">Branch Name:</label>
<input type="text" id="branch" name="branch"> <br><br><br>
  <label for="fname">Full Name:</label>
  <input type="text" id="fname" name="fname">
  <label for="Phone">Phone Number:</label>
  <input type="number" id="Phone" name="Phone">
  <label for="email">Email:</label>
  <input type="email" id="lname" name="email"><br><br>
  <div class="address">  <label for="address">Address:</label><br>
   <textarea name="address" id="" cols="30" rows="5"></textarea><br>
   </div>

   

</form>
    </div>
</body>
</html>