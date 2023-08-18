

<!DOCTYPE html>
<html lang="en">
<head>
  
    <title>Registration Success</title>

	<style>

		.text{
			text-align: center;
		}
	</style>
   
</head>
<body>
    <div class="text">
		<h1>Registration Successful</h1>
	</div>
        
       
		<h3>
		<p>Thank you for registering! Your information has been successfully submitted.</p>

		<p> Please return to the Home page And try to Login with user name or password.  </p>
        </h3><hr>
        
        <p>Your registration details:</p>
        <ul >
        <li><a href="../index.php">Home</a></li>
        <li><a href="../view/login.php">Login</a></li>
        <li> <a href="../view/registration.php">Registration<a> </li>
        </ul>
        
        


<?php  
require_once '../model/model.php';


if (isset($_POST['submit'])) {
	$data['name'] = $_POST['name'];
	$data['surname'] = $_POST['surname'];
	$data['username'] = $_POST['username'];
	$data['password'] = password_hash($_POST['password'], PASSWORD_BCRYPT, ["cost" => 12]);
	$data['image'] = basename($_FILES["image"]["name"]);

	$target_dir = "../uploads ";
	$target_file = $target_dir . basename($_FILES["image"]["name"]);

	if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
    echo "The file ". basename( $_FILES["image"]["name"]). " has been uploaded.";
  } else {
    echo "Sorry, there was an error uploading your file.";
  }

  if (addUser($data)) {
  	echo 'Successfully added!!';
  }
} else {
	echo 'You are not allowed to access this page.' ;
	
}

?>


</body>
</html>