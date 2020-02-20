<?php
session_start();
include_once('config/connection.php');

if (isset($_POST['edit'])) {

	$product_id = $_POST['product_id'];
	$product_name = $_POST['product_name'];
	$product_status = $_POST['product_status'];



	$sql = "UPDATE product SET product_name = '$product_name', product_status = '$product_status' WHERE product_id = '$product_id'";

	if ($conn->query($sql)) {
		$_SESSION['success'] = 'แก้ไขข้อมูล สำเร็จ !';
	} else {
		$_SESSION['error'] = 'Something went wrong in updating order';
	}
} else {
	$_SESSION['error'] = 'Select order to edit first';
}

header('location: index.php');
