<!DOCTYPE html>
<html>
        <head>
            <title>Welcome to 'My Diary'</title>
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script> -->
        </head>
    <body>
        <header>
            <div class="main">
                <div class="logo">
                    <img src="css/photos/logo.png">
                 
                </div>
                <ul>
                <li class="active"><a href="#">Login</a></li>
                <li><a href="entriespage.php">Entries</a></li>
                <li><a href="aboutpage.html">About</a></li>
                </ul>
                </div>    
        </header>
        <div class="form-box">
            <div class="button-box">
                <div id="btn"></div>
                <button type="button" class="toggle-btn" onclick="login()">Log In</button>
                <button type="button" class="toggle-btn" onclick="register()">Register</button>
            </div>
            <div class="social-icons">
            <img src="css/photos/twitter_icon.png">
            <img src="css/photos/tumblr_icon.png">
            </div>
        
        
            
        <form id="login" class="input-group" action="validation.php" method="post">
            <input type="text" class="input-field" name="userID" placeholder="Username"required>
            <input type="password" class="input-field" name="password" placeholder="Password"required>
            <input type="checkbox" class="check-box"><span>Remember Password</span>
            <button type="submit " class="submit-btn">Log In</button>
        </form>
        <form id="register" class="input-group" action="registration.php" method="post">
            <input type="text" class="input-field" name="userID" placeholder="Username"required>
            <input type="email" class="input-field" name="email" placeholder="Email"required>
            <input type="password" class="input-field" name="password" placeholder="Password"required>
            <input type="checkbox" class="check-box"><span>I agree to terms & conditions</span>
            <button type="submit" class="submit-btn">Register</button>
        </form>
        </div>


        <script>
            var x= document.getElementById("login");
            var y= document.getElementById("register");
            var z= document.getElementById("btn");

        function register(){
            x.style.left = "-400px";
            y.style.left = "50px";
            z.style.left = "110px";
        }
        function login(){
            x.style.left = "50px";
            y.style.left = "450px";
            z.style.left = "0px";
        }
        </script>


        </body>
</html>
