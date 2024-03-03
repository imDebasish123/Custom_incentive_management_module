<?php
include 'db.php';
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Personal Information
    $username = $_POST["username"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $dob = $_POST["dob"];
    $gender = $_POST["gender"];
    $usertype = $_POST["usertype"];
    $target_sales = $_POST["target_sales"];
    $inc_per = 0;
    $bonus = 0;
    $hol_pck_elg = 0;
    if($target_sales==10000){
        $inc_per=1.5;
        $bonus="None";
        $hol_pck_elg="No";
    }
    if($target_sales==20000){
        $inc_per=3;
        $bonus="None";
        $hol_pck_elg="No";
    }
    if($target_sales==30000){
        $inc_per=3.5;
        $bonus="$1000";
        $hol_pck_elg="No";
    }
    if($target_sales >50000){
        $inc_per=5;
        $bonus="None";
        $hol_pck_elg="Yes";
    }

    // Insert data into the database
    if($usertype=='user'){
        
        $sql_user = "INSERT INTO users (username,email, password,dob,gender,usertype,target_sales,inc_per,bonus,hol_pck_elg)
                VALUES ('$username','$email','$password','$dob','$gender','$usertype','$target_sales','$inc_per','$bonus','$hol_pck_elg')";
    
        if ($conn->query($sql_user) === TRUE) {
            echo "User  information submitted successfully!";
            header("Location: Registrationform.php"); // Redirect to the student dashboard or home page
    
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }

    if($usertype=='admin'){
        
        $sql_admin = "INSERT INTO admins (username,email, password,dob,gender,usertype)
                VALUES ('$username','$email','$password','$dob','$gender','$usertype')";
    
        if ($conn->query($sql_admin) === TRUE) {
            echo "Admin  information submitted successfully!";
            header("Location: Registrationform.php"); // Redirect to the student dashboard or home page
    
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
    
}

?>
