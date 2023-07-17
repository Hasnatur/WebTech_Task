create the package with featers 
Demo code 


<!DOCTYPE html>
<html>
<head>
    <title>Select Options</title>
</head>
<body>
    <h1>Select Package and Features</h1>
    
    <form action="process_form.php" method="post">
        <label for="package">Select a Package:</label>
        <select name="package" id="package">
            <option value="basic">Basic</option>
            <option value="medium">Medium</option>
            <option value="premium">Premium</option>
        </select>
        
        <br><br>
        
        <label for="features">Select Features:</label>
        <select name="features[]" id="features" multiple>
            <option value="feature1">Feature 1</option>
            <option value="feature2">Feature 2</option>
            <option value="feature3">Feature 3</option>
            <option value="feature4">Feature 4</option>
        </select>
        
        <br><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $selectedPackage = $_POST['package'];
    $selectedFeatures = $_POST['features'];
    
    // Process the selected package and features as needed
    // ...
    
    // Example: Display the selected options
    echo "<h1>Selected Options</h1>";
    echo "<p>Package: $selectedPackage</p>";
    echo "<p>Features: " . implode(", ", $selectedFeatures) . "</p>";
} else {
    // Handle invalid request method
    header('HTTP/1.1 405 Method Not Allowed');
    exit('Invalid request method');
}
?>

</body>
</html>
