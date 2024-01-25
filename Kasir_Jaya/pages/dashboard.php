<?php 
session_start();
require_once('../db/DB_connection.php');

if (!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !==true) {
    header('location: ../index.php');
    exit;
}
$realname = $_SESSION['nama'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>jaya_kasir</title>
    <link rel="stylesheet" href="../assets/style/dashbord.css">
</head>
<body>
    <h1>hello, <?php echo htmlspecialchars($realname); ?>! Welcome to dashboard</h1>
    <form action="../db/DB_logout.php" method="post">
        <button type="submit" class="btn-logout">Logout</button>
</form>
<div class="dashboard-content">
    <h2>dashboard</h2>
    <p>welcome to jayakasir dashboard. You can manage product and perform other task here. </p>
</div>
<div class="additional-content">
    <h2>Manage product</h2>
    <p>would  you like to manage product?</p>
    <p> <a href="./kasir/manage_product.php" class="text-blue-500 hover:underline">clickhere</a></p>
</div>
</body>
</html>