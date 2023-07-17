<!DOCTYPE html>
<html>
<head>
    <title>User List</title>
</head>
<body>
<div id="header"> 
    <h1>Packages List</h1>
    </div>    
  <div id="container">
        <div id="sidebar">
          
        <ul>
            <li><a href="ukil_dashbord.php">Dashboard</a></li><br>
                <li><a href="ukils_profile.php">Ukil Profile</a></li><br>
                <li><a href="ukil_pending_pac.php">Pending pacage</a></li><br>
                <li><a href="ukil_comp_pak.php">Compleate pacage</a></li><br>
                <li><a href="logout.php">Logout</a></li>
            </ul>
            
        </div>
<div id="main-content">
<h2>Welcome, UKIL</h2>
                      <?php
  
        // Read JSON file
        $json = file_get_contents('user_pack_data.json');

        // Convert JSON to array
        $users = json_decode($json, true);

        // Check if data.json file exists and contains data
        if ($users && is_array($users)) {
            // Iterate over users
            foreach ($users as $user) 
            {
    echo ' <div class="widget"> <tr>';
    echo '<td>' . $user['name'] . '</td><br>';
    echo '<td>' . $user['package'] . '</td><br>';

    echo '</tr> </div>';
            }
        } 
        else {
            echo '<p>No user data found.</p>';
        } 
        include 'layout.php';
    ?>  
</div>

</body>
</html>
