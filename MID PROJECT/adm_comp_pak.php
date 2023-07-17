<?php include 'layout.php'; ?>

<!DOCTYPE html>
<html>
<head>
    
</head>
<body>
    <div id="header">
    <h2>Complete Package</h2>
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
<h2>Welcome, Admin</h2>
            

            <?php
  
  // Read JSON file
  $json = file_get_contents('user_pack_data.json');

  // Convert JSON to array
  $users = json_decode($json, true);

  // Check if data.json file exists and contains data
  if ($users && is_array($users)) 
   {
      // Iterate over users
      foreach ($users as $user) 
      {
            echo ' <div class="widget"> <tr>';
            echo '<td>' . $user['name'] . '</td><br>';
            echo '<td>' . $user['package'] . '</td><br>';
            echo '</tr> </div> <br><br>';
      }
  } 
  else {
      echo '<p>No user data found.</p>';
  } 
  include 'layout.php';
?>  
        </div>
    </div>
    
  
    <br><br><br><br><br><br><br><br><br><br><br><br>
   
    <?php include 'footer.php';?>


</body>
</html>