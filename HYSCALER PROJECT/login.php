<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

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
      .black-text {
            color: black;
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
            <form action="login_submit.php" method="post">
              <h2>Login </h2>
              <div class="input_group">
                <label for="username">Username:</label>
                <input type="text" id="username" name="username" maxlength="20" required>
              </div>
              <div class="input_group">
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" maxlength="20" required>
              </div>
              <div class="input_group">
                <label for="select">Choose USERTYPE:</label>
   <select id="usertype" name="usertype" onchange="showDiv('hidden_div', this)">
   <option value="">Select the USER</option>
   <option value="user">USER</option>
      <option value="admin">ADMIN</option>
   </select>
              </div><br>
              <div class="reg_btn">
              <button type="submit" name="submit" class="btn btn-primary" >Login</button>
                <a class="black-text" href="Registrationform.php">New User Register Here</a>
              </div></div>

            </form>
          </div>
    </main>
   </div>
   <script src="./javascript.js"></script>
</body>
</html>
