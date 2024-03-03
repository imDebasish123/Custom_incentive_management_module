<?php
include 'db.php';
// Process student login form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];
    $userType = $_POST["usertype"]; // Retrieve the user type from the hidden input field
print_r($username);
echo $username;

if($userType=="admin"){
    // Validate student credentials
    $sql = "SELECT * FROM admins WHERE username = '$username' && password='$password' and usertype='$userType'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        $row = $result->fetch_assoc();
            session_start();
            $_SESSION["username"] = $username;
            $_SESSION["userType"] = $userType;
            header("Location: admin_dashboard.php"); // Redirect to the student dashboard or home page
            exit();
            session_destroy();

        } else {
            // Invalid password
            header("Location: login.php?error=invalid_password");
            exit();
        }
    }
    if($userType=="user"){


        $sql_user = "SELECT * FROM users WHERE username = '$username' && password='$password' and usertype='$userType'";
        $result_user = $conn->query($sql_user);
    
        if ($result_user->num_rows > 0) {
            $row_user = $result_user->fetch_assoc();
                session_start();
                $_SESSION["username"] = $username;
                $_SESSION["userType"] = $userType;
                header("Location: user_dashboard.php"); // Redirect to the student dashboard or home page
                exit();
            } else {
                // Invalid password
                header("Location: login.php?error=invalid_password");
                exit();
            }
    
        }    

    } 


// Close the database connection
$conn->close();
?>
