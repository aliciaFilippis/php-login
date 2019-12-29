<?php
?>

<?php
// Verifies if user is logged in
function checkLogin() {
   $cookie_name = "testApp";
   $loggedIn = false;
   if(isset($_COOKIE[$cookie_name])) {
      $loggedIn = true;
   }
   return $loggedIn;
}
// Returns the username
function getUser() {
   $cookie_name = "testApp";
   $username = $_COOKIE[$cookie_name];
   return $username;
}
// Expires cookie.
function zeroCookie() {
   $check = isset($_COOKIE["testApp"]);
   if ($check) {
      $username = $_COOKIE["testApp"];
      setcookie("testApp", $username, time()-300);
   }
}
// Renders navigation menu.
function renderMenu()
{
   echo  "<li><a href=\"logout.php\">Logout.</a></li>"
   . "</ul>";
}
?>