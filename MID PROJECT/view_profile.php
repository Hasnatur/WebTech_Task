<?php include 'layout.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>Profile Page</title>

</head>
<body> 
    
<div id="header">
    <h2>ADMIN PROFILE </h2>
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
        

        <div class="widget">
            <div id = form>

            
        <p><strong>Name           :</strong> John Doe</p> 
            <p><strong>Email          :</strong> john.doe@example.com</p>
            <p><strong>Gender         :</strong> Male</p>
            <p><strong>Date of Birth  :</strong> January 1, 1990</p><br>
        <a href="editprofile.php">EDIT PROFILE</a>
    </div></div></div>

</div>
  
      
    
</body>
</html>


