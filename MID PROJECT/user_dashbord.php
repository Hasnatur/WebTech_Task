
<?php include 'layout.php' ; ?>
<!DOCTYPE html>
<html>
<head>
    <title>User Dashboard</title>
<body>
    <div id="header2">
        <h1>User Dashboard</h1>
    </div>

    <div id="container">
        <div id="sidebar">
            <ul>
                <li><a href="user_dashbord.php">Dashdoard</a></li><br>
                <li><a href="user_profile.php">Profile</a></li><br>
                <li><a href="u_edit_profile.php">Edit Profile</a></li><br>
                <li><a href="u_packages.php">Pacage For you</a></li><br>
                <!-- <li><a href="user_parchased_pac.php">Purchased Package</a></li><br> -->
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <div id="main-content">
            <h2>Welcome to the User Dashboard</h2>
            <p>This is the main content area of the dashboard.</p>
        </div>
    </div>

    

         <?php include 'footer.php'; ?> 
   
       


</body>
</html>







