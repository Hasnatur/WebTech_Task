<?php  
require_once '../model/model.php';


if (isset($_POST['updateProduct'])) {
	$data['name'] = $_POST['name'];
	$data['s_price'] = $_POST['s_price'];
	$data['b_price'] = $_POST['b_price'];
	$data['profit'] = $_POST['profit'];
	$data['display'] = $_POST['display'];

	/*$target_dir = "../uploads/";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);*/


  if (updateProduct($_POST['id'], $data)) {
  	echo 'Successfully updated!!';
  	//redirect to showStudent
  	header('Location: ../showProduct.php?id=' . $_POST["id"]);
  }
} else {
	echo 'You are not allowed to access this page.';
}


?>