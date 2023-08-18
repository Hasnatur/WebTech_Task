<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<ul >
        <li><a href="../index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li> <a href="registration.php">Registration</a></li>

        </ul>
  <br><br>
    
   

 <form action="../controller/createuser.php" method="POST" enctype="multipart/form-data">

  <label for="name">Name:</label><br>
  <input type="text" id="name" name="name"><br>
  <label for="surname">Surname:</label><br>
  <input type="text" id="surname" name="surname"><br>
  <label for="username">User Name:</label><br>
  <input type="text" id="username" name="username"><br>
  <label for="password">Password:</label><br>
  <input type="password" id="password" name="password"><br>
  <input type="file" name="image"><br><br>
  <input type="submit" name = "submit" value="Create">
  <input type="reset"> 
</form> 

</body>
</html>

