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
                </ul>
            </div>
        </div>
        <div class="registration">
            <form action="registration_submit.php" method="post">
              <h2>Register for a New Account</h2>
              <div class="input_group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" maxlength="30" required>
              </div>
              <div class="input_group">
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" maxlength="30" required>
              </div>
              <div class="input-group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" maxlength="10" required>
              </div>
              <div class="input-group">
                <label for="dob">Date of Birth:</label>
        <input type="date" id="dob" name="dob">
              </div>
              <div class="gender">
                <h3>Gender-</h3>
            Male<input type="radio" name="gender" value="Male">
            Female<input type="radio" name="gender" value="Female">
              </div>
              <div class="input-group">
              <label for="select">Choose USERTYPE:</label>
   <select id="usertype" name="usertype" onchange="showDiv('hidden_div', this)">
   <option value="">Select the USER</option>
   <option value="user">USER</option>
      <option value="admin">ADMIN</option>
   </select>
    </div>
    <div id="hidden_div">

    <div class="input-group">
                <label for="confirm_password">Target Sales:</label>
                <input type="text" id="target_sales" name="target_sales" maxlength="10" >
              </div>
    </div>

              <div class="reg_btn"><button type="submit"name="submit">Register</button>
              </div>
            </form>
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
