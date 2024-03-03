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
                    <li><a href="./index.php">HOME</a></li>
                    <li><a href="./Aboutus.html">ABOUT US</a></li>
                    <li><a href="./help.html">HELP</a></li>
                    <li><a href="./Contact.html">CONTACT US</a></li>
                    <li><a href="./logout.php">LOG OUT</a></li>
                </ul>
            </div>
        </div>
        <div class="registration">
            <form action="registration_submit.php" method="post">
            <h1>This is Admin Panel</h1>

            </form>
            <br><br><br>


            <table class="table table-striped">
    <thead>
        <th>Username</th>
        <th>Gender</th>
        <th>Email</th>
        <th>Action</th>
    </thead>
    <tbody>
    <?php
        include 'db.php';
            $query1 = "SELECT * FROM users";
            $result1 = $conn->query($query1);
            if ($result1->num_rows > 0) {
                $a=0;
                while ($row1 = $result1->fetch_assoc()) {
                    if($a==0){
                        //echo $a;
    
                 // echo $row1['target_sales']."<br>";
                  $target_sales1=$row1['target_sales'];

                  if($target_sales1 >=50000) { 
                    $a=$a+1;
                   // echo $a;
                    ?>
                  <a class="black-text" href="Holiday_pkg.php"><b>Register In Holiday pkg Scheme</b><br><br>
                
                </a>             <h1> USER DETAILS</h1>

<?php }
                }
            }
            } else {
                echo "<tr><td colspan='4'>No Class found</td></tr>";
            }
        ?>
        <?php
            $query = "SELECT * FROM users";
            $result = $conn->query($query);
            if ($result->num_rows > 0) {
                while ($row = $result->fetch_assoc()) {
                    echo "<tr>";
                    echo "<td>" . $row['username'] . "</td>";
                    echo "<td>" . $row['gender'] . "</td>";
                    echo "<td>" . $row['email'] . "</td>";
                    echo "<td>
                            <a class='btn btn-info btn-sm' href='edit_view_user.php?edit_id=" . $row['id'] . "'>Edit</a>
                            &nbsp;
                            <a class='btn btn-danger  btn-sm'  href='index.php?delid=" . $row['id'] . "' title='Delete' data-toggle='tooltip' onclick='return confirm(\"Do you really want to Delete ?\");'>
                                <i class='material-icons'>delete</i>
                            </a>
                          </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='4'>No Users found</td></tr>";
            }
        ?>
    </tbody>
</table>

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
