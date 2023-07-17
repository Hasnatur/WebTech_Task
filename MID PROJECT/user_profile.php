<!-- <!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
    

  <div id = header2>
            <h4>PROFILE</h4>
        </div>

<div class="container">
        <div id="sidebar">
        <ul>
                <li><a href="user_dashbord.php">Dashdoard</a></li><br>
                <li><a href="user_profile.php">Profile</a></li><br>
                <li><a href="u_edit_profile.php">Edit Profile</a></li><br>
                <li><a href="u_packages.php">Pacage For you</a></li><br>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <div class="main-content">
       
        <div id = widget>
            <div id = form>

            
            <p><strong>Email:</strong> <?php //echo $email; ?></p>
            <p><strong>Mobile:</strong> <?php //echo $mobile; ?></p>
            <p><strong>Gender:</strong> <?php //echo $gender; ?></p>
            <?php
/*include 'layout.php';
    // Read the JSON file and decode its contents
    $jsonFile = 'data.json';
    $jsonData = file_get_contents($jsonFile);
    $profileData = json_decode($jsonData, true);
    // Read JSON file
    $json = file_get_contents('data.json');
  
    // Convert JSON to array
    $users = json_decode($json, true);
  
    // Check if data.json file exists and contains data
    if ($users && is_array($users)) 
     

    foreach ($users as $user) 
    {
          echo ' <div class="widget"> <tr>';
          echo '<td>' . $user['name'] . '</td>';
          echo '<td>' . $user['gender'] . '</td>';
          echo '<td>' . $user['e-mail'] . '</td>';
          //echo '<td>' . $user['dob'] . '</td>';
          echo '</tr> </div>';
    } else {
        echo '<p>No user data found.</p>';
    } 
    include 'layout.php';*/
    ?>
        </div>
        </div>
    </div>
</div>



</body>
</html>
 -->
<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>
</head>
<body>

<div id="header2">
    <h4>PROFILE</h4>
</div>

<div class="container">
    <div id="sidebar">
        <ul>
            <li><a href="user_dashboard.php">Dashboard</a></li><br>
            <li><a href="user_profile.php">Profile</a></li><br>
            <li><a href="u_edit_profile.php">Edit Profile</a></li><br>
            <li><a href="u_packages.php">Package For You</a></li><br>
            <li><a href="logout.php">Logout</a></li>
        </ul>
    </div>

    <div class="main-content">
        <div id="widget">
            <div id="form">
                <?php
                include 'layout.php';

                                // Start the session
                session_start();

                // Read the JSON file and decode its contents
                $jsonFile = 'data.json';
                $jsonData = file_get_contents($jsonFile);
                $profileData = json_decode($jsonData, true);

                // Retrieve the logged-in user's email (change it with your session variable name)
                if (isset($_SESSION['e-mail'])) {
                    $email = $_SESSION['e-mail'];

                    // Search for the user by email in the profile data
                    $user = null;
                    foreach ($profileData as $profile) {
                        if ($profile['e-mail'] === $email) {
                            $user = $profile;
                            break;
                        }
                    }

                    if ($user) {
                        echo '<p><strong>Email:</strong> ' . $user['e-mail'] . '</p>';
                        echo '<p><strong>Name:</strong> ' . $user['name'] . '</p>';
                        echo '<p><strong>Gender:</strong> ' . $user['gender'] . '</p>';
                    } else {
                        echo '<p>User profile not found.</p>';
                    }
                } else {
                    echo '<p>Session email not set. Please log in.</p>';
                }
                ?>
            </div>
        </div>
    </div>
</div>

</body>
</html>
