
<!DOCTYPE html>
<html>
<head>
  <title>Change Password</title>
</head>
<body>
<div id =header >
  <h2>CHANGR PASSWORD</h2>

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

<br><br><br>

<div id = form>
 <form method="POST" action="changepassword.php">
    <label for="currentPassword">Current Password     :</label>
    <input type="password" id="currentPassword" name="currentPassword" required>
    <br>
    <label for="newPassword">New Password       :</label>
    <input type="password" id="newPassword" name="newPassword" required>
    <br>
    <label for="Retype New Password">Retype New Password: </label>
    <input type="password" id="newPassword" name="Retype New Password" required>
    <br><br>
    <input type="submit" value="Change Password">
  </form>
</div>
 </div>
</body>
</html>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $currentPassword = test_input($_POST["currentPassword"]);
  $newPassword = test_input($_POST["newPassword"]);

  if (strlen($currentPassword) < 8 || !preg_match('/[@#$%]/', $currentPassword)) {
    $currentPasswordErr = "Current password must be at least eight characters long and contain at least one of the special characters (@, #, $, %)";
  }

  if (strlen($newPassword) < 8 || !preg_match('/[@#$%]/', $newPassword)) {
    $newPasswordErr = "New password must be at least eight characters long and contain at least one of the special characters (@, #, $, %)";
  }

  if (empty($currentPasswordErr) && empty($newPasswordErr)) {
    header("Location: passwordchanged.json");
    exit();
  }
}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

include 'layout.php';
?>






<br><br>
<?php include 'footer.php';   ?>