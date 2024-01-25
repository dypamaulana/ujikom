<?php
session_start();
require_once('DB_connection.php');

if(isset($_POST['update_product'])) {
    $id = $_POST['id'];
    $nama_produk = $_POST['nama_produk'];
    $harga_produk = $_POST['harga_produk'];

    $stmt = $conn->prepare("UPDATE product SET nama_produk = ?, harga_produk = ? WHERE id = ?");
    $stmt->bind_param("sii", $nama_produk, $harga_produk, $id);

    if ($stmt->execute()) {
        if($stmt->affected_rows > 0) {
            echo "Product update succesfully";
         } else  {
            echo "failed to update prodcut";
        }
    }
    $stmt->close();
    $conn->close();
    header('Location ../pages/kasir/manage_product.php');
    exit;
}
?>