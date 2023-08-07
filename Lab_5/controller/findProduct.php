<!DOCTYPE html>
<html>
<head>
    <title>Searched Product</title>
</head>
<body>
    <h1>Product Search</h1>
	
<?php


 foreach ($product as $id => $product): ?>
	<tr>
		<!-- <td><a href="showProduct.php?id=<?php echo $product['p_id'] ?>"><?php echo $product['name'] ?></a></td> -->
		<td><?php echo $product['name'] ?></td>
		<td><?php echo $product['b_price'] ?></td>
		<td><?php echo $product['s_price'] ?></td>
		<td><?php echo $product['profit'] ?></td>
		<td><a href="editProduct.php id= <?php echo $product['p_id'] ?>">Edit</a>&nbsp
		
		<a href="controller/deleteProduct.php?id=<?php echo $product['p_id'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a>
	</td>
		
	</tr>
<?php endforeach; ?>




</body>
</html>
