<?php
session_start();

if (!isset($_SESSION['username'])) {
    header("Location: ads_login.php");
    exit();
}

$username = $_SESSION['username'];
include 'layout.php';
?>

<!DOCTYPE html>
<html>
<head>
    <title>Admin Dashboard</title>
    
</head>
<body>
    <div id="header">
    <h2>ADMIN DASHBOARD </h2>
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
                <h3>Users</h3>
                <p>Total number of registered users: 100</p>
                <a href="a_users_list.php">View Details</a>
            </div>

            <div class="widget">
                <h3>Ukils</h3>
                <p>Total number of UKILS: 5</p>
                <a href="a_ukil_list.php">View Details</a>
            </div>

            <div class="widget">
                <h3>Pending Pacages</h3>
                <p>Total number of Pending Pacages: 2</p>
                <a href="a_pending_pac.php">View Details</a>
            </div>
            <div class="widget">
                <h3>pacage compleate</h3>
                <p> Total nnumber of compleate Pacages</p>
                <a href="adm_comp_pak.php">View Details</a>
            </div>
           
            <div class="widget">
                <h3>Blocked Users</h3>
                <p> Total nnumber of compleate Pacages</p>
                <a href="a_block_user.php">View Details</a>
            </div>
            <div class="widget">
                <h3>Blocked Ukils</h3>
                <p> Total nnumber of compleate Pacages</p>
                <a href="a_block_ukil.php">View Details</a>
            </div>
        </div>
    </div>
    
    <br><br><br><br><br><br><br><br><br> 
    <br><br><br><br><br><br><br><br>
    <br><br><br><br> <br><br><br> <br><br>
    <br><br><br><br><br><br><br><br><br><br><br><br>
   
    <?php include 'footer.php';?>


</body>
</html>
    