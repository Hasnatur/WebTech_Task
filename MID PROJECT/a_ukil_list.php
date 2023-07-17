<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
<div id="header"> 
    <h1>Ukils List</h1>
    </div> 
    <div id="container">
        <div id="sidebar">
            <ul>
            <li><a href="dashbord.php">Dashboard</a></li><br>
                <li><a href="view_profile.php">Admin Profile</a></li><br>
                <li><a href="editprofile.php">Edit Profile</a></li><br>
                <li><a href="changephoto.php">Change Profile Photo</a></li><br>
                <li><a href="changepassword.php">Change Password</a></li><br>
                <li><a href="a_users_list.php">List Of Users</a></li><br>
                <li><a href="a_ukil_list.php">List Of Ukils</a></li><br>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>
<div id="main-content">
            
            <div class="widget">
              <?php
  
        // Read JSON file
        $json = file_get_contents('ukil.json');

        // Convert JSON to array
        $users = json_decode($json, true);

        // Check if data.json file exists and contains data
        if ($users && is_array($users)) {
            // Iterate over users
            foreach ($users as $user) 
            {
               
                echo '<br><br><br><h2>' . $user['name'] . '</h2>'; 
                echo '<h2>' . $user['e-mail'] . '</h2>';
                echo '<h2>' . $user['username'] . '</h2>';
                echo '<h2>' . $user['password'] . '</h2>';
                echo '<h2>' . $user['gender'] . '</h2>';
                echo '<h2>' . $user['dob'] .  '</h2>';
            }
        } 
        else {
            echo '<p>No user data found.</p>';
        } 
        include 'layout.php';
    ?>  
</div>
</div>
</body>
</html>
