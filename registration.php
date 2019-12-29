<?php?>
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
.register {
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
   <title>Registration Page</title>
   <script type="text/javascript" src="clientSide.js"></script>
</head>
<body>
<div class="register">
Please fill out the following form to register.<br><br>
<form  method="post" action="registrationProcess.php" onsubmit="return validateRegInput();">

<table>
<tr><td>Username:</td><td><input type="text" name="username" id="username" maxlength="10"></td></tr>
<tr><td>Password:</td><td><input type="password" name="password" id="password" maxlength="10"></td></tr><br>
<tr><td>Confirm Password:</td><td><input type="password" name="confirmPassword" id="confirmPassword" maxlength="10"></td></tr><br>
<tr><td>Email:</td><td>  <input type="text" name="email" id="email" maxlength="30"></td></tr>
<tr><td>Confirm Email:</td><td>  <input type="text" name="confirmEmail" id="confirmEmail" maxlength="30"></td></tr>
</table>

<input type="submit">
</form>
<p id="validationResults"></p>
</div>
</body>