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
    <title>Ukil Dashboard</title>
    
</head>
<body>
    <div id="header">
    <h2>Ukil Dashboard</h2>
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
            <h2>Welcome, Ukil</h2>
          
            <div class="widget">
                <h3>Pending Pacages</h3>
                <p>Total number of Pending Pacages: 2</p>
                <a href="ukil_pending_pac.php">View Details</a>
            </div>
            <div class="widget">
                <h3>pacage compleate</h3>
                <p> Total nnumber of compleate Pacages</p>
                <a href="ukil_comp_pak.php">View Details</a>
            </div>

        </div>
    </div>
    
   
    <?php include 'footer.php';?>


</body>
</html>
    