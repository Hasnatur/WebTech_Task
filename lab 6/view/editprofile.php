<?php 

require_once '../controller/showuserinfo.php';
$user = fetchUser($_GET["ID"]);

 ?>



<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

 <form action="controller/updateuser.php" method="POST" enctype="multipart/form-data">
  <label for="name">Name:</label><br>
  <input value="<?php echo $user['name'] ?>" type="text" id="name" name="name"><br>
  <label for="surname">Surname:</label><br>
  <input value="<?php echo $user['surname'] ?>" type="text" id="surname" name="surname"><br>
  <label for="username">User Name:</label><br>
  <input value="<?php echo $user['username'] ?>" type="text" id="username" name="username"><br>
  <input type="file" name="image"><br><br>
  <input type="hidden" name="ID" value="<?php echo $_GET['id'] ?>">
  <input type="submit" name = "updateUser" value="Update">
  <input type="reset"> 
</form> 

</body>
</html>

