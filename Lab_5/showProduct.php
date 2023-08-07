<?php  
require_once 'controller/productInfo.php';

$student = fetchProduct($_GET['p_id']);


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<tr>
		<th>Name</th>
		<th>Surname</th>
		<th>Username</th>
		<th>Password</th>
		<th>Image</th>
	</tr>
	<tr>
	<td> <a href="showProduct.php?id=<?php echo $product['p_id'] ?>">
		<?php echo $product['name'] ?></a>
	</td>
		<td><?php echo $product['b_price'] ?></td>
		<td><?php echo $product['s_price'] ?></td>
		<td><?php echo $product['profit'] ?></td>
		
	</tr>

</table>


</body>
</html>