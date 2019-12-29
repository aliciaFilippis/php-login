<?php
include("utilities.php");
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
.logout {
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
   <title>Logout Page</title>
</head>
<body>

<?php
   // Execute logout
   zeroCookie();
?>
<div class="logout">
You have logged out.<br><br>
<a href="login.php">Log In</a>
</div>
</body>
</html>