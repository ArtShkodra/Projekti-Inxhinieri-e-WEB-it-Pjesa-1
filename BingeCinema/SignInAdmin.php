<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="BingeCinema.css">
    <title>BingeCinema/Sign In</title>
</head>
<body>
    <header>
        <a id="LB" href="BingeCinema.html">
            <img src="Logo.PNG" id="L">
        </a>
        <nav>
        <a href="#TVS"><li id="H">TV Shows</li></a>
            <a href="#Movies"><li id="H">Movies</li></a>
            <a href="#Anime"><li id="H">Anime</li></a>
            <a href="#ForKids"><li id="H">ForKids</li></a>
            <a href="#Latest"><li id="H" style="margin-right: 550px;">Latest</li></a>
            <input type="text" placeholder="Search..." name="search" id="SB">
            <button><img src="Search.png" id="S"></button>
            <a href="Sign In.html"><li id="H" style="margin-left: 10px;">Sign In</li></a>
            <p style="color: white;font-size: 30px;margin-top: 10px;padding-right: 18px;">/</p>
            <a href="Sign Up.html"><li id="H">Sign Up</li></a>
            <p style="color: white;font-size: 30px;margin-top: 10px;padding-right: 18px;">/</p>
            <a href="SignInAdmin.php" style="color: white;font-size: 20px;" ><li id="H">Admin</li></a>
        </nav>
    </header>
    <main>
        <div class="slider">
            <div id="SignIn-BOX">
                <form action="/action_page.php">
                    <label for="fname" class="Info" id="Poz1">Username:</label><br>
                    <input type="text" name="username" value="" id="Poz2" style="color: white;"><br>
                    <label for="lname" class="Info" id="Poz3">Password:</label><br>
                    <input type="text" name="password" value="" id="Poz4" style="color: white;"><br><br>
                    <a href="register.php"><input type="signinBtn" value="SIGN IN" class="Info" id="Poz5"></a>
                  </form> 
            </div>
            <div><img src="Logo.PNG" class="Logo"></div>
            <div class="slider-content">
                <img src="Movies.jpg" class="Size">
            </div>
            <div class="slider-content">
                <img src="Cinema.jpg" class="Size">
            </div>
            <div class="slider-content">
                <img src="Popcorn.jpg" class="Size">
            </div>
        </div>
    </main>
    <footer >
        <p style="color: white;margin-right: 40px;margin-left: 350px;">CopyRight</p>
        <h2 style="color: white;padding-right: 55px;">Contact Us</h2>
        <ul style="margin-right: 50px;">
        <a href="#" style="color: white;"><li>anidhalimi@bingecinema.com</li></a>
        <a href="#" style="color: white;"><li>artshkodra@bingecinema.com</li></a>
        </ul>
        <a href="https://www.facebook.com/"><img src="FB.png" id="SM"></a>
        <a href="https://www.instagram.com/"><img src="IG.png" id="SM"></a>
        <a href="https://www.youtube.com/"><img src="YT.jpg" id="SM" style="width: 65px;"></a>
        <a href="https://twitter.com/home"><img src="TW.png" id="SM"></a>
        <a href="https://www.linkedin.com/"><img src="LK.png" id="SM"></a>
    </footer>
    <script src="Slider.js"></script>
</body>
</html>



<?php


if(isset($_POST['registerBtn'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    if(empty($username) || empty($password) ))){
        echo "Fill all fields!";
    }if else($username != "ramiz.hoxha@ubt-uni.net" || $username != "elton.boshnjaku@ubt-uni.net" || $password != "adminadmin"){
        echo "The credentials do not match";

    }else{
       echo "Successfully signed in";


    }
}






?>