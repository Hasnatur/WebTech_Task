
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style>
		table,td,th{
			border:1px solid black;
		}
	</style>
</head>
<body>

<?php 
    include "nav.php";

?>

<table> 
	<thead>
		<tr>
			<th>Id</th>
			<th>Name</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($allSearchedProduct as $id => $user): ?>
			<tr>
				<td><a href="../showProduct.php?id=<?php echo $user['id'] ?>"><?php echo $user['id'] ?></a></td>

				<td><?php echo $user['name'] ?></td>

				<td><a href="../editProduct.php?id=<?php echo $user['id'] ?>">Edit</a>&nbsp<a href="deleteProduct.php?id=<?php echo $user['p_id'] ?>">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>