<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HOME PAGE</title>
    <link rel="stylesheet" href="./style.css">
</head>

<body>
   <div class="main_body">
    <nav>
        <div class="left_nav">
            <img src="./assets/logo_img.jpg" alt="">
        </div>
        <div class="right_nav">
            <button onclick="display_login()">Login</button>
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
        <div class="body_container">
        <form action="login_submit.php" method="post">

           <img src="./assets/project_gif.gif" alt="">
            <!-- <img src="assets/image_img.gif" alt=""> -->

            <div class="login_body" id="login_body">
                <div id="login"><h1>Login form</h1></div>
                <div class="close_button" onclick="close_form()">X</div>
               <div class="form_body">
                    <div class="input_block">
                        <label for="email">Username :</label>
                        <input type="email" name="username" id="email" required>
                    </div>
                    <div class="input_block">
                        <label for="password">Password :</label>
                        <input type="password" name="password" id="password" required>
                    </div>
                    <div class="btn">
                        <button onclick="form_data()">Login</button>
                        <p>Not a Member ? <a href="./Registrationform.html">Sign Up Here..</a></p>
                    </div>
               </div>
            </div>
        </div>
</form>
    </main>
   </div>
   <script src="./javascript.js"></script>
</body>
</html>
