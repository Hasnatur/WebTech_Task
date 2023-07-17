<?php include 'layout.php'; ?>

<!DOCTYPE html>
<html>
<head>
    <title>User Information Form</title>
</head>
<body>
<div id="header2">
<h1>User Information Form</h1>
    </div>
<div id = container>


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
        <div id="main-content">
            <div id = widget>
                <div id = form>
            <h2>Welcome to the User Dashboard</h2>
            <p>This is the main content area of the dashboard.</p>
            
            
            <form action="user_profile.php" method="POST" enctype="multipart/form-data">
        <label for="name">Name:</label>
        <input type="text" name="name" required><br>
        
        <label for="profile_pic">Profile Picture:</label>
        <input type="file" name="profile_pic" required><br>
        
        <label for="occupation">Occupation:</label>
        <input type="text" name="occupation" required><br>
        
        <label for="email">Email:</label>
        <input type="email" name="email" required><br>
        
        <label for="mobile">Mobile Number:</label>
        <input type="tel" name="mobile" required><br>
        
        <label for="gender">Gender:</label>
        <select name="gender" required>
            <option value="male">Male</option>
            <option value="female">Female</option>
            <option value="other">Other</option>
        </select><br><br>
        
        <input type="submit" value="Submit">
    </form>
    </div>

   </div>     </div></div>
    
</body>
</html>
<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data
    $name = $_POST['name'];
    $occupation = $_POST['occupation'];
    $email = $_POST['email'];
    $mobile = $_POST['mobile'];
    $gender = $_POST['gender'];

    // Handle profile picture upload
    $targetDirectory = "uploads/";
    $targetFile = $targetDirectory . basename($_FILES['profile_pic']['name']);
    move_uploaded_file($_FILES['pic.jpg']['tmp_name'], $targetFile);

    // Prepare data as an array
    $data = array(
        'name' => $name,
       // 'profile_pic' => $targetFile,
        'occupation' => $occupation,
        'email' => $email,
        'mobile' => $mobile,
        'gender' => $gender
    );

    // Convert data to JSON
    $jsonData = json_encode($data);

    // Save data to a JSON file
    $jsonFile = 'u_profile.json';
    file_put_contents($jsonFile, $jsonData);

    // Update existing webpage with latest information
    $updatePage = 'user_profile.php';
    file_put_contents($updatePage, $jsonData);

    // Redirect back to the form page
    header("Location: user_profile.php");
    exit();
}
?>
