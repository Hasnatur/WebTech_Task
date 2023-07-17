<!DOCTYPE html>
<html>
<head>
  <title>Purchased Packages</title>
</head>
<body>

<div id="header">
    <h1>Purchased Packages </h1>
    </div> 
    <div class="container">
        <div id="sidebar">
        <ul>
                <li><a href="user_dashbord.php">Dashdoard</a></li><br>
                <li><a href="user_profile.php">Profile</a></li><br>
                <li><a href="u_edit_profile.php">Edit Profile</a></li><br>
                <li><a href="u_packages.php">Pacage For you</a></li><br>
                <li><a href="user_parchased_pac.php">Purchased Package</a></li><br>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div>

        <div class="main-content">
        <h2>Your Purchased Package</h2>

       
        <div id = widget>
            <div id = form>


  <?php
  include 'layout.php';
  // Read the JSON file
  $data = file_get_contents('user_pack_data.json');

  // Convert JSON to PHP array
  $users = json_decode($data, true);

  echo '<table>';
  echo '<tr>
  <th>Name</th>
  <th>Package</th>

  </tr>';
 
  foreach ($users as $user) {
    echo '<tr>';
    echo '<td>' . $user['name'] . '</td><br>';
    echo '<td>' . $user['package'] . '</td>';
    echo '</tr>';
  }

  echo '</table>';
  ?>

  </div></div></div></div>
    <p>Thank you for your purchase! Your package selection has been recorded.</p>

</body>
</html>

 