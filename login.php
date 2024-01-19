<?php
require_once('connection.php');
$agritayo->login();


//print_r($users);
 
?>

 
 
 
 <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="form-container">
            <form action="" method="post">
                <div class="form-input">
                  <label >username</label>
                  <input type="email" name =" email" id="email">

                  <label >password</label>
                  <input type="password" name =" password" id="password">

                   <button type="submit" name="submit" id="submit"> Log in</button>
                  
            </form>
            </div>
        </div>
    </div>
</body>
</html>