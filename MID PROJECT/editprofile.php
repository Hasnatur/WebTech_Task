<?php include 'layout.php' ; ?>

<!DOCTYPE html>
<html>
<head>
    <title>User Form</title>

<style>
    .widget_2 {
            background-color: #fff;
            border: 1px solid #ddd;
            padding: 20px;
            margin-bottom: 20px;
            align-self: start;
            text-align: center;
    }
</style>
</head>
<body>
    
<div id="header">
    <h2>EDIT PROFILE </h2>
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
      
<br><br>
 <div id = "main-content">
    <form method="post" action="">

    <h2>Welcome, Admin</h2>
   
   <div id = form> 
    <div class="widget_2" >
        <label for="name">Name:</label>
        <input type="text" name="name" id="name" required><br><br>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" required><br><br>
        <label for="gender">Gender:</label>
        <select name="gender" id="gender" required>
            <option value="Male">Male</option>
            <option value="Female">Female</option>
            <option value="Other">Other</option>
        </select><br><br>
        <label for="dob">Date of Birth:</label>
        <input type="date" name="dob" id="dob" required><br><br>
        <input type="submit" name="submit" value="Submit">
    
    </div>
    </form> <br>
    
</div>
</div>

    <?php
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $name = $_POST['name'];
        $email = $_POST['email'];
        $gender = $_POST['gender'];
        $dob = $_POST['dob'];

        $data = array
        (
            'name' => $name,
            'email' => $email,
            'gender' => $gender,
            'dob' => $dob
        );

        $json_data = json_encode($data);

        $file_path = 'edit_profile.json';
        file_put_contents($file_path, $json_data);

        echo "Data saved successfully. "; 
        

    }
    ?>
    <br> <br> <br>
    
    <div class="home">

    
    
    
    
</body>
</html>
