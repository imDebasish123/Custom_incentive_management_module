<?php
include 'db.php';
echo "yyy";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    echo "hghghg";
    // Personal Information
    $username = $_POST["username"];
    $Holiday_name = $_POST["Holiday_name"];
    $Duration= $_POST["Duration"];
    $Destination = $_POST["Destination"];
    $Location = $_POST["Location"];
    $Amenities = $_POST["Amenities"];
        
        $sql_user = "INSERT INTO holiday_pkg (username,Holiday_name,Duration,Location,Destination,Amenities)
                VALUES ('$username','$Holiday_name','$Duration','$Destination','$Location','$Amenities')";
    
        if ($conn->query($sql_user) === TRUE) {
            echo "User  information submitted successfully!";
            header("Location: Holiday_pkg.html"); // Redirect to the student dashboard or home page
    
        } else {
            echo "Error: " . $sql_user . "<br>" . $conn->error;
        }
    }

    

?>
