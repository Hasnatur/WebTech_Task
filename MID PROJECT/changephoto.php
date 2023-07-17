<?php include 'layout.php'; ?>

<!DOCTYPE html>
<html>
  <head>
    
  </head>
<body>


<div id="header">
    <h2>CHANGE PHOTO </h2>
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
<div id = "main-content">
 
<h2>Welcome, Admin</h2>
  
<div id = widget>
  <div id = form>
  

  
<form action="upload.php" method="post" enctype="multipart/form-data">
  Select image to upload:
  <input type="file" name="fileToUpload" id="fileToUpload"><br>
  <input type="submit" value="Upload Image" name="submit">
</form>

</div>
</div>
</div>
</div>
</body>
</html>


<?php include 'footer.php';   ?>







