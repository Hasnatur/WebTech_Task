


<?php
include "layout.php";
?>

<!DOCTYPE html>
<html>
</head>
<body>
	<div>  
                <div id="h1">
                    <h1> LOGIN </h1><br/>
                </div>                 

<div id = nav>
<ul>
   <a href="index.php">HOME</a>
</ul>
</div> 


<div id= "form">
<form action="<?php echo $_SERVER['PHP_SELF'] ?>" method="post">
	<span>
		
		<?php
		if (isset($msg)) 
		{
			echo $msg;
		}

	 ?>	 	
	 </span>
	 <br>
<h2>
     <?php
session_start();

// Function to check if a user is logged in
function isLoggedIn()
{
    return isset($_SESSION['user']);
}

// Function to check if the logged-in user is an admin
function isAdmin()
{
    return isset($_SESSION['user']) && $_SESSION['user']['role'] === 'admin';
}

// Function to validate login credentials
function validateLogin($username, $password)
{
    // Read the JSON file
    $usersData = file_get_contents("admin.json");
    $users = json_decode($usersData, true);

    // Check if the user exists and the password is correct
    if (isset($users[$username]) && $users[$username]["password"] === $password) {
        // Store user information in session
        $_SESSION['user'] = $users[$username];
        return true;
    }

    return false;
}

// Handle the login request
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    if (validateLogin($username, $password)) {
        // Redirect to appropriate page after successful login
        if (isAdmin()) {
            header("Location: dashbord.php");
            exit();
        } else {
            header("Location: ukil_dashbord.php");//ukil er jonno dashboard boshano lagbo
            exit();
        }
    } else {
        // Invalid login credentials
        echo "Invalid username or password";
    }
}

// Handle logout request
if (isset($_GET["logout"])) {
    // Destroy the session and redirect to login page
    session_destroy();
    header("Location: login.php");
    exit();
}
?> </h2>


	Username:
	<input type="text" name="username">
	<br>
	Password:
	<input type="password" name="password">
	<br>
	<br>

	<input type="submit" name="login" value="Login">
	

    <a href="forgot_pass.php"> forget password</a> <br><br>

	
</form>


</div>

</body>
</html>
<?php include 'footer.php';   ?>