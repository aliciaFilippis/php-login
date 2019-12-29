<?php
if ($_SERVER['REQUEST_METHOD'] != 'POST') {
   die("Not allowed to be here");
}
include("utilities.php");
include("dbUtilities.php");
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
<title>
Login Page
</title>
</head>
<body>
<div class="login">
<?php if ($loggedIn) :?>
You are already logged in.

<?php else :
$con = DB_connect();
// Check if the data from the login form was submitted
if ( !isset($_POST['username'], $_POST['password']) ) {
	die ('Please fill both the username and password field!');
}
// Prepare our SQL
if ($stmt = $con->prepare('SELECT id, password FROM accounts WHERE username = ?')) {
	$stmt->bind_param('s', $_POST['username']);
	$stmt->execute();
	// Store the result
	$stmt->store_result();
}
if ($stmt->num_rows > 0) {
	$stmt->bind_result($id, $password);
	$stmt->fetch();
	// Verify the password.
	if (password_verify($_POST['password'], $password)) {
		// Logged in
		$_SESSION['loggedin'] = TRUE;
		$_SESSION['name'] = $_POST['username'];
		$_SESSION['id'] = $id;
		echo 'Welcome ' . $_SESSION['name'] . '!';
	} else {
		echo 'Incorrect password!';
	}
} else {
	echo 'Incorrect username!';
}
$stmt->close();
?>

<?php
renderMenu();
?>

<?php endif; ?>
</div>
</body>
</html>