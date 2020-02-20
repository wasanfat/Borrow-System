<?php
session_start();
include_once('config/connection.php');

if (isset($_POST['delete'])) {

    $product_id = $_POST['product_id'];




    $sql = "DELETE FROM product WHERE product_id = '$product_id'";

    if ($conn->query($sql)) {
        $_SESSION['success'] = 'ลบสำเร็จ !';
    } else {
        $_SESSION['error'] = 'Something went wrong in updating ';
    }
} else {
    $_SESSION['error'] = 'Delete fail';
}

header('location: index.php');
