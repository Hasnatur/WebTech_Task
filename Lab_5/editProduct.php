<?php 

require_once 'controller/productInfo.php';
$product = addProduct($_GET['id']);


 include "nav.php";



 ?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateStudent.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $product['name'] ?>" type="text" id="name" name="name"><br>
  <label for="b_price">Buying price:</label><br>
  <input value="<?php echo $product['b_price'] ?>" type="text" id="b_price" name="b_price"><br>
  <label for="s_price">User Name:</label><br>
  <input value="<?php echo $product['s_price'] ?>" type="text" id="s_price" name="s_price"><br>
  <input type="submit" name = "updateProduct" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

