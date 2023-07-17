<?php include 'layout.php'; ?>
<!DOCTYPE html>
<html>
<head>
    <title>Forget password</title>
</head>
<body>

<div>  
                <div id="h1">
                    <h1>  FORGOT PASSWORD </h1><br/>
                </div>                 
<div id = nav>

   <a href="index.php">HOME</a>
   <a href="regristration.php">REGISTRATION</a><br> 

</div>

     <div id="form">
    <form method="post" action="">
      
     <h4>Enter your recovery Email:</h4>
    
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required> <br><br>
        <input type="submit" name="submit" value="Submit">
    </form></div>
</body>
</html>

<?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];

    // Validate the email address
    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Email is received " ;
        // Process further or save to a database
   
    } else {
        echo "Invalid email address.";
    }
}
?>

<br><br><br>
<?php include 'footer.php';   ?>