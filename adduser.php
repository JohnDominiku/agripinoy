<?php
require_once('connection.php');
$agritayo->addUser(); // call the addUser method

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   
    <div class="container">
    <h1>Add  User</h1>
        <div class="form-container">
            <form action="" method="post">
            <label for="email">email</label><br>
            <input type="text" id="email" name="email" placeholder="Email" autocomplete="off" required><br>
            
            <label for="firstname">First Name:</label><br>
            <input type="text" id="firstname" name="firstname" placeholder="First Name" autocomplete="off" required><br>

            <label for="lastname">Last Name:</label><br>
            <input type="text" id="lastname" name="lastname"placeholder="Last Name" autocomplete="off"  required><br>

            <label for="mobile">Mobile:</label><br>
            <input type="tel" id="mobile" name="mobile"  placeholder="Mobile" autocomplete="off" required><br>

            <label for="address">Address:</label><br>
            <input type="text" id="address" name="address" placeholder="Address" autocomplete="off" required><br>

            <label for="password">Password:</label><br>
            <input type="password" id="password" name="password" placeholder="Password"  autocomplete="off"required><br>
            


                   <button type="submit" name="create" id="create"> create</button>
                  
            </form>
            </div>
        </div>
    </div>
</body>
</html>