<!DOCTYPE html>
<html >
<head>
<style>


</style>
    <title>Document</title>
</head>
<body>

        <h1>Welcome to Login</h1> <hr>
  
   
       <ul >
        <li><a href="../index.php">Home</a></li>
        <li><a href="login.php">Login</a></li>
        <li> <a href="registration.php">Registration</a></li>
        </ul>
<hr> <br>
        <form action="../controller/process_login.php" method="post">
        <label for="username">Username:</label>
        <input type="text" id="username" name="username" required>
        <br>
        <label for="password">Password:</label>
        <input type="password" id="password" name="password" required>
        <br>
        <?php 
        $massage = "Invalid username or PAssword "; ?>
        <input type="submit" name = "submit" value="Login">


    </form>



  
</body>
</html>