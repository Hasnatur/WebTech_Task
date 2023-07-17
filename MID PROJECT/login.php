<?php

if (!empty($_POST['remember'])) {
		setcookie("username", $_POST['username'], time()+(86400*30));
		setcookie("password", $_POST['password'], time()+(86400*30));	
	} else {
        setcookie("username", "");
        setcookie("password", "");
    }
    
    session_start();
    $username = $password ="";
    if(isset($_POST['username']) && isset($_POST['password'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        $data = file_get_contents("data.json");  
        $data = json_decode($data, true);

        if(isset($data)){
            $flag = false;
            foreach($data as $user){
                if($user["username"]==$username && $user["password"]==$password){
                    $_SESSION['username'] = $username;
                    header("location:user_dashbord.php");
                    $flag = true;
                    break;
                }
            }
            if(!$flag) $msg = "username or password invalid";
        }
    }
?>


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
   <a href="regristration.php">REGISTRATION</a><br> 
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