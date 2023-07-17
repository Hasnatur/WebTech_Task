<?php include 'layout.php'; ?>


<!DOCTYPE html>
<html>
<head>
  <title>Package Selection</title>
</head>
<body>

<div id="header">
  <h1>Package Selection</h1>
</div>

<div class="container">
  <div id="sidebar">
    <ul>
      <li><a href="user_dashbord.php">Dashboard</a></li><br>
      <li><a href="user_profile.php">Profile</a></li><br>
      <li><a href="u_edit_profile.php">Edit Profile</a></li><br>
      <li><a href="u_packages.php">Package For You</a></li><br>
      <li><a href="logout.php">Logout</a></li>
    </ul>
  </div>

  <div id="main-content">
    <h2>Purchase your package</h2>

    <div id="widget">
      <div id="form">
        <form method="POST">
          <label for="name">Name:</label>
          <input type="text" name="name" required><br>

          <label for="package">Package:</label>
          <select name="package" required>
            <option value="Package A">Banking and Finance = 80$</option>
            <option value="Package B">VAT & TAX = 99$</option>
            <option value="Package C">Notary, Contract vetting & Translation = 50$</option>
            <option value="Package D">Trademark & IP = 100$</option>
          </select><br>

          <input type="submit" value="Submit">
        </form>
      </div>
    </div>

    <?php
    // Read the JSON file
    $data = file_get_contents('user_pack_data.json');

    // Convert JSON to PHP array
    $users = json_decode($data, true);

    // Check if form is submitted
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
      // Get form data
      $name = $_POST['name'];
      $package = $_POST['package'];

      // Create a new user object
      $user = [
        'name' => $name,
        'package' => $package
      ];

      $users[] = $user;


      file_put_contents('user_pack_data.json', json_encode($users));

      //header("Location: user_dashbord.php");
      exit();
    }
    ?>

    <p>Thank you for your purchase! Your package selection has been recorded.</p>
  </div>
</div>

</body>
</html>
