<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="site.css" />
</head>
<body>

<?php

require('db.php');
session_start();
if (isset($_POST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `users` WHERE username='$username'
and password='".md5($password)."'";
	$result = mysqli_query($con,$query) or die(mysql_error());
	$rows = mysqli_num_rows($result);
        if($rows==1){
	    $_SESSION['username'] = $username;
	    header("Location: index2.php");
         }else{
	echo "<div class='form'>
<h3>Felhasználó/Jelszó hibás</h3>
<br/>Kattints ide a <a href='login.php'>bejelentkezéshez</a></div>";
	}
    }else{
?>
	<form class="login" action="" method="post" name="login">
    <input type="text" class="login-input" name="username" placeholder="Felhasználó név" autofocus>
    <input type="password" class="login-input" name="password" placeholder="Jelszó">
    <input type="submit" value="Bejelentkezés" name="submit" class="login-button">
  <p class="login-lost">Már tag vagy? <a href="registration.php">Regisztráció</a></p>
  <p>Az oldal megtekintéséhez regisztrálnod kell!</p>
  </form>
 
<?php } ?>
</body>
</html>