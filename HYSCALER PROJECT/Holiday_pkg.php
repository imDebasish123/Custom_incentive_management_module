<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Holiday package</title>
    <link rel="stylesheet" href="./style.css">
    <style>
        footer{
            text-align: center;

        }
        body{
            text-align: center;

        }
    </style>
</head>

<body>
   <div class="main_body">
    <nav>
        <div class="left_nav">
            <img src="./assets/logo_img.jpg" alt="">
        </div>
        <div class="right_nav">
            <button onclick="display_login()">Logout</button>
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
       
        <div class="Holiday_pkg">    



            <form action="holiday_submit.php" method="post">
              <h2>Holiday Package-</h2>
              <div class="input_group">
                <label for="username">Username:</label>
                <select id="classes" name="username" required>
                    <option value="">Select USERNAME</option>
                    <?php
        
                    include 'db.php';
                    // Query to retrieve data from the database
                    $query = "SELECT * FROM users where target_sales>=50000 ";
        
                    // Execute the query
                    $result = $conn->query($query);
        
                    // Check if the query was successful
                    if ($result->num_rows > 0) {
                        // Output data of each row
                        while ($row = $result->fetch_assoc()) {
                            echo "<option value='" . $row["username"] . "'>" . $row["username"] . "</option>";
                        }
                    } else {
                        echo "<option value=''>No classes found</option>";
                    }
        
                    // Close connection
                    $conn->close();
                    ?>
                </select>
        
                      </div>
              <div class="input_group">
                <label for="Holiday_name">Holiday name:</label>
                <select name="Holiday_name">
                    <option value=""></option>
                    <option value="Baku">Baku</option>
                    <option value="paro">paro</option>
                    <option value="Bali">Bali</option>
                    <option value="Abu Dhabi">Abu Dhabi</option>
                    <option value="Bentota">Bentota</option>
                    <option value="Hanoi">Hanoi</option>
                    <option value="Maldives">Maldives</option>
                </select>
              </div>
              <div class="Location_inp">
                <label for="Location">Location:
                <select name="Location"> </label>
                    <option value=""></option>
                    <option value="America">America</option>
                    <option value="Dubai">Dubai</option>
                    <option value="Africa">Africa</option>
                    <option value="London">London</option>
                    <option value="Srilanka">Srilanka</option>
                    <option value="Bangladesh">Bangladesh</option>
                    <option value="Qatar">Qatar</option>
               
                </select>
                </div>
                <div class="Destination">
                    <label for="Destination">Destination:
                    <select name="Destination"> </label>
                        <option value=""></option>
                        <option value="America">America</option>
                        <option value="Dubai">Dubai</option>
                        <option value="Africa">Africa</option>
                        <option value="London">London</option>
                        <option value="Srilanka">Srilanka</option>
                        <option value="Bangladesh">Bangladesh</option>
                        <option value="Qatar">Qatar</option>
                   
                    </select>
                    </div>
                <label for="Duration">Duration:</label>
                <input type="number" name="Duration">
                <label for="Amenities">Amenities</label>
                <input type="text area" name="Amenities">
                <br>
                <br>
              <div class="hpb_btn"><button type="submit" name="submit">Submit</button>
                <a href="#"></a>
              </div>
              <br>
              <br>
              <footer>
                <p>&copy; 2024 Custom Incentive Management Module</p>
              </footer>
            </form>
          </div>
    </main>
   </div>
   <script src="./javascript.js"></script>
</body>
</html>
