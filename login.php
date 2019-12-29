<?php
include("utilities.php");
$loggedIn = checkLogin();
?>
<style>
    * {
    box-sizing: border-box;
    font-family: -apple-system, BlinkMacSystemFont, "segoe ui", roboto, oxygen, ubuntu, cantarell, "fira sans", "droid sans", "helvetica neue", Arial, sans-serif;
    font-size: 16px;
    -webkit-font-smoothing: antialiased;
    -moz-osx-font-smoothing: grayscale;
}
body {
    background-color: #a1b1c9;
}
.login {
    text-align: center;
    color: #000000;
    font-size: 24px;
    padding: 20px 20px 20px 20px;
    border-bottom: 1px solid #dee0e4;
    width: 400px;
    background-color: #ffffff;
    box-shadow: 0 0 9px 0 rgba(0, 0, 0, 0.3);
    margin: 100px auto;
    padding: 20px 20px 20px 20px;
}
</style>
<html>
<head>
   <title>Login Page</title>
</head>
<body>
<div class="login">
<?php if($loggedIn) :?>
You are already logged in.<br>

<?php else : ?>
<form action="loginProcess.php" method="post">
Username:</td><td><input type="text" name="username"><br><br>
Password:</td><td><input type="password" name="password"><br><br>
<input type="submit"><br><br>
Not a member? <a href="registration.php">Register here!</a>
</form>

<?php endif; ?>
</div>
</body>
</html>