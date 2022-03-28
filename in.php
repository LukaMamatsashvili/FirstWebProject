<?php
session_start();
$con = mysqli_connect('localhost', 'user', 'user');     //localhost, username, password
mysqli_select_db($con, 'userregistration');
$email = $_POST['email'];
$password = $_POST['password'];
$s = " select * from usertable where email = '$email' && password = '$password'";
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);
if($num == 1)
{
    $_SESSION['email'] = $email;
    echo "<script type='text/javascript'>
    alert('You signed in successfully!')
    window.location = 'home.php'</script>";
}
else echo "<script type='text/javascript'>
alert('Please enter valid email and password')
window.location = 'signin.php'</script>";

?>