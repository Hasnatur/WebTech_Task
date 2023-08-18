<?php  
require_once '../controller/showuserinfo.php';

$users = fetchAllUser('ID');
?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Welcome to All User List</h2>
     
           
	 <ul >
 <li><a href="dashboard.php">Dashboard</a></li>
 <li><a href="viewprofile.php">View Profile</a></li>
 <li><a href="viewalluser.php">View All User</a></li>
 <li> <a href="editprofile.php">Edit Profile</a></li>
 <li> <a href="changeprofile.php">Change Password</a></li>
  <li> <a href="loguot.php">Loguot</a></li>
 </ul>

<table>
	<thead>
		<tr>
			<th>Name</th>
			<th>Surname</th>
			<th>Username</th>
			<th>Password</th>
			<th>Image</th>
			<th>Action</th>
		</tr>
	</thead>
	<tbody>
		<?php foreach ($users as $i => $user): ?>
			<tr>
				<td><a href="showStudent.php?ID=<?php echo $user['ID'] ?>"><?php echo $user['name'] ?></a></td>
				<td><?php echo $user['surname'] ?></td>
				<td><?php echo $user['username'] ?></td>
				<td><?php echo $user['password'] ?></td>
				<td><img width="100px" src="uploads/<?php echo $user['image'] ?>" alt="<?php echo $user['name'] ?>"></td>

				<td><a href="editprofile.php?id=<?php echo $user['ID'] ?>">Edit</a>&nbsp<a href="./viewalluser.php?php echo $user['ID'] ?>" onclick="return confirm('Are you sure want to delete this ?')">Delete</a></td>
			</tr>
		<?php endforeach; ?>
		

	</tbody>
	

</table>


</body>
</html>