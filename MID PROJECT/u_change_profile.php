<!DOCTYPE html>
<html>
<head>
    <title>User Profile Picture Upload</title>
</head>
<body>


<div id="header2">
            <h1>User Profile Picture Upload</h1>
    </div>


    <div id="sidebar">
            <ul>
                <li><a href="user_dashbord.php">Dashdoard</a></li><br>
                <li><a href="user_profile.php">Profile</a></li><br>
                <li><a href="u_edit_profile.php">Edit Profile</a></li><br>
                <li><a href="u_packages.php">Pacage For you</a></li><br>
                <li><a href="user_parchased_pac.php">Purchased Package</a></li><br>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </div> <br><br><br><br><br>
       
 <form action="user_profile.php" method="post" enctype="multipart/form-data">
        <input type="file" name="profile_picture" accept="image/*" required>
        <input type="submit" value="Upload">
    </form>
        
   
    <br>
</body>
</html>


<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Check if a file was uploaded
    if(isset($_FILES[""])) {
        $target_dir = "uploads/"; // Directory where the uploaded picture will be stored
        $target_file = $target_dir . basename($_FILES["profile_picture"][""]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

        // Check if the file is an actual image
        $check = getimagesize($_FILES["profile_picture"]["tmp_name"]);
        if($check !== false) {
            $uploadOk = 1;
        } else {
            echo "Error: File is not an image.";
            $uploadOk = 0;
        }

        // Check if file already exists and replace it
        if (file_exists($target_file)) {
            unlink($target_file);
        }

        // Upload the file
        if ($uploadOk == 1) {
            if (move_uploaded_file($_FILES["profile_picture"]["tmp_name"], $target_file)) {
                echo "File uploaded successfully.";
                // Redirect to another page to display the uploaded picture
                header("Location: display_picture.php?image=".urlencode($target_file));
            } else {
                echo "Error uploading file.";
            }
        }
    }
}
?>


<?php
if (isset($_GET['image'])) {
    $image = urldecode($_GET['image']);
    echo "<img src='$image' alt='Profile Picture'>";
} else {
    echo "No image specified.";
}
include 'layout.php'; ?>
?>
