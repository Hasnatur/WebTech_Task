<?php  
require_once 'controller/productInfo.php';

$products = fetchAllProducts();


    include "nav.php";



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>b_price</th>
			<th>s_price</th>
			<th>profit</th>
			<!-- <th>Image</th> -->
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($products as $id => $product): ?>
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
		

	</tbody>
	

</table>


</body>
</html>