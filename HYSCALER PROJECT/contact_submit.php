<?php
include 'db.php';
//echo "yyy";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Personal Information
    $email = $_POST["email"];
    $name = $_POST["name"];
    $message= $_POST["message"];
        $sql_user = "INSERT INTO contact(email,name,message) VALUES ('$email','$name','$message')";
    
        if ($conn->query($sql_user) === TRUE) {
            echo "User  information submitted successfully!";
            header("Location: Contact.html"); // Redirect to the student dashboard or home page
    
        } else {
            echo "Error: " . $sql_user . "<br>" . $conn->error;
        }
    }

    

?>
