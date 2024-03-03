<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Registration</title>
    <link rel="stylesheet" href="./style.css">
    <style>
      body{
        background-image: url('./assets/image_img.gif');
        background-size: cover;
      }
      .registration{
        background-image: url('./assets/nn_img.jpg');
        background-size: cover;
      }

      #hidden_div {
         display: none;
      }

    </style>
</head>

<body>
   <div class="main_body">
    <nav>
        <div class="left_nav">
            <img src="./assets/logo_img.jpg" alt="">
        </div>
    </nav>
    <main>
        <div class="nav_list">
            <div class="list_items">
                <ul>
                    <li><a href="./incentive.html">HOME</a></li>
                    <li><a href="./Aboutus.html">ABOUT US</a></li>
                    <li><a href="./help.html">HELP</a></li>
                    <li><a href="./Contact.html">CONTACT US</a></li>
                </ul>
            </div>
        </div>
        <div class="registration">
            <form action="registration_submit.php" method="post">
       <h1>This is User Panel</h1>
       <?php
       ?>
       <a class="black-text" href="logout.php">Logout</a>

            </form>
            <table>

            <?php
                include 'db.php';

                   session_start();
                   $username=$_SESSION['username'];
                 // echo $username;
            
            $query = "SELECT * FROM users where username='$username' ";
            $result = $conn->query($query);
            
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No Class found</td></tr>";
            }
            
                        ?></table>

          </div>
    </main>
   </div>
   <script src="./javascript.js"></script>
   <script>
      function showDiv(divId, element) {
         document.getElementById(divId).style.display = element.value == "user" ? 'block' : 'none';
      }
   </script>

</body>
</html>
