<?php  
require_once '../controller/showuserinfo.php';

$user = fetchUser($_GET['ID']);



?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<h2>Welcome to Your Profile</h2>
     
           
<ul >
        <li><a href="dashboard.php">Dashboard</a></li>
        
        <li><a href="viewalluser.php">View Profile</a></li>
        <li> <a href="editprofile.php">Edit Profile</a></li>
        <li> <a href="changeprofile.php">Change Password</a></li>
         <li> <a href="loguot.php">Loguot</a></li>
        </ul>
      

<table>
	<tr>
		<th>Name</th>
		<th>Surname</th>
		<th>Username</th>
		<th>Password</th>
		<th>Image</th>
	</tr>
	<tr>
		<td><a href="showuserinfo.php? ID =<?php echo $user['ID'] ?>"><?php echo $user['name'] ?></a></td>
		
		<td><?php echo $user['surname'] ?></td>
		<td><?php echo $user['username'] ?></td>
		<td><?php echo $user['password'] ?></td>
		<td><img width="100px" src="uploads/<?php echo $user['name'] ?>"></td>
	</tr>

</table>


</body>
</html>