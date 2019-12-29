<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
   die("Not allowed to be here.");
}
include("dbUtilities.php");
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
</head>
<body>
<div class="register">
<?php
$con = DB_connect();
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	$stmt->store_result();
	// Store the result
	if ($stmt->num_rows > 0) {
		echo 'Username exists, please choose another!';
	} else {
		if ($stmt = $con->prepare('INSERT INTO accounts (username, password, email) VALUES (?, ?, ?)')) {
			$password = password_hash($_POST['password'], PASSWORD_DEFAULT);
			$stmt->bind_param('sss', $_POST['username'], $password, $_POST['email']);
			$stmt->execute();
			echo 'You have successfully registered, you can now login!';
		} else {
			echo 'Could not prepare statement!';
		}
	}
	$stmt->close();
} else {
	echo 'Could not prepare statement!';
}
$con->close();
?>

<a href="login.php">Log In</a>
</div>
</body>
</html>