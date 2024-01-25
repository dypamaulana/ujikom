<?php
require_once('./db/DB_connection.php');
require_once('./db/DB_login.php');

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>shopiria | Login </title>
    <link rel="stylesheet" href="./assets/style/login.css" >
</head>
<body>
    <div class="container">
        <img src="width: 100px; margin-bottom: 2rem;" src="assets/images/png-clipart-cash-register-pay-text-logo.png" alt="shoria">
        <form method="POST">
            <?php if (isset($error_message)) : ?>
                <div class="error-message"><?php echo $error_message; ?> </div>
                <?php endif; ?>
            <div>
                <label for="username">username</label>
                <input id="username" name="username" type="text" placeholder="username" required>
            </div>
                
            <div>
            <label for="password">password</label>
                <input id="password" name="password" type="password" placeholder="***********" required>
            </div>
               <div>
                <button type="submit">Sign in </button>
               </div>
               <div class="text-center mt-4">
             <p>Dont't have an account? <a href ="./pages/register.php">register here</a></p>
               </div>
        </form>
    </div>
</body>
</html>
