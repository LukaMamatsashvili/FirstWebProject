<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Mukta:wght@300&display=swap" rel="stylesheet">
    <link rel="shotcut icon" type="image/x-icon" href="images/depositphotos_402532106-stock-illustration-computer-science-vector-icon-logo.jpg">
    <link  rel="stylesheet" href="signin.css">
    <title>Sign In</title>
</head>
<body>
        <header>
            <ul>
                <img src="images/depositphotos_402532106-stock-illustration-computer-science-vector-icon-logo.jpg" class="logo">
                <li><a href="index.php">Home</a></li>
                <li><div class="dropdown">
                        <span>Information</span>
                        <div class="dropdown-content">
                            <a href="desktop.php">Desktop Development</a><br>
                            <a href="web.php">Web Development</a><br>
                            <a href="mobile.php">Mobile Development</a><br>
                            <a href="game.php">Game Development</a><br>
                            <a href="data.php">Data Science</a><br>
                            <a href="machine.php">Machine Learning</a><br>
                            <a href="vrar.php">VR/AR</a>
                        </div>
                    </div>
                </li>
                <li><a href="companies.php">Companies</a></li>
                <li><a href="about.php">About us</a></li>
                <li><a href="signin.php"><b>Sign in</b></a></li>
                <li><a href="signup.php">Sign up</a></li>
            </ul>
        </header>
        
        <main>
            <img src="images/background.png" class="mainphoto1">
            <h1>Sign In</h1>
            <form action="in.php" method="post">
                <div class="container">
                    <div>
                        <label for="email"><b>Enter Email:</b></label>
                        <input type="email" placeholder="" name="email" required>
                    </div>
                    <div>
                        <label for="password"><b>Enter Password:</b></label>
                        <input type="password" placeholder="" name="password" required>
                    </div>
                    <p>If you don't have an account <a href="signup.php" style="color:dodgerblue">Click here to sign up!</a></p>
                    <a href="#"><button type="submit" class="signupbtn">Sign In</button></a>
                </div>
            </form>
        </main>

        <footer>
            <div class="up">
                <a href="#top" src=""><img src="images/direction.png" class="arrow"></a>
            </div>
            <div class="contacts">
                <h1>Contacts</h1>
                <div id="p3">
                    <div class="left">
                        <p>Mobile number: +995 555 12 34 56</p>
                        <p>Office number: 032 222 12 34 56</p>
                    </div>
                    <div class="right">
                        <p>E-mail: lukamamacshvili87@gmail.com</p>
                        <p>Location: Tbilisi, Georgia</p>
                    </div>
                </div>
            </div>
            <div class="socials">
                <a href="https://www.facebook.com/" target="__blank"><img src="images/icons8-facebook-48.png"></a>                
                <a href="https://www.instagram.com/" target="__blank"><img src="images/icons8-instagram-48.png"></a>
                <a href="https://www.gmail.com/" target="__blank"><img src="images/gmail.png"></a>
                <a href="https://www.github.com/" target="__blank"><img src="images/github.png"></a>
            </div>
        </footer>
</body>
</html>