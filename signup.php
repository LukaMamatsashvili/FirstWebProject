<?php
    error_reporting(0);
    session_start();
    $con = mysqli_connect('localhost', 'user', 'user');
    mysqli_select_db($con, 'userregistration');
    $email = $_POST['email'];
    $password = $_POST['password'];
    $password_confirm = $_POST['password_confirm'];
    $s = " select * from usertable where email = '$email'";
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);
    if($num == 1) echo "This email is already used!";
    else if($password_confirm != $password) 
    echo '<script>alert("Confirm the password correctly!")</script>';
    else if($num == 0)
    {
        $reg = "insert into usertable(email, password, password_confirm) values ('$email' , '$password', '$password_confirm')";
        mysqli_query($con, $reg);
        echo "<script type='text/javascript'>
        alert('You signed up successfully!')
        window.location = 'signin.php'</script>";
    }
?>
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
    <link  rel="stylesheet" href="Signup.css">
    <title>Sign Up</title>
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
                <li><a href="signin.php">Sign in</a></li>
                <li><a href="signup.php"><b>Sign up</b></a></li>
            </ul>
        </header>
        
        <main>
            <img src="images/background.png" class="mainphoto1">
            <h1>Sign Up</h1>
            <form action="signup.php" method="post">
                <div class="container">
                    <div>
                        <label for="email"><b>Enter Email:</b></label>
                        <input type="email" placeholder="" name="email" required>
                    </div>
                    <div>
                        <label for="password"><b>Enter Password:</b></label>
                        <input type="password" placeholder="" name="password" required>
                    </div>
                    <div>
                        <label for="password_confirm"><b>Confirm Password:</b></label>
                        <input type="password" placeholder="" name="password_confirm" required>
                    </div>
                    <label>
                        <input type="checkbox" checked="checked" name="remember" style="margin-top:15px">Remember me
                    </label>       
                    <p>By creating an account you agree to our <a href="#" style="color:dodcgerblue">Terms & Privacy</a>.</p>
                    <button type="submit" class="signupbtn">Sign Up</button>
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
        <script src="checkvalue.js"></script>
</body>
</html>



