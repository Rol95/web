<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="site.css"/>
</head>
<body>
<?php
require('db.php');
if (isset($_REQUEST['username'])){
	$username = stripslashes($_REQUEST['username']);
	$username = mysqli_real_escape_string($con,$username); 
	$email = stripslashes($_REQUEST['email']);
	$email = mysqli_real_escape_string($con,$email);
	$password = stripslashes($_REQUEST['password']);
	$password = mysqli_real_escape_string($con,$password);
	$trn_date = date("Y-m-d H:i:s");
        $query = "INSERT into `users` (username, password, email, trn_date)
VALUES ('$username', '".md5($password)."', '$email', '$trn_date')";
        $result = mysqli_query($con,$query);
        if($result){
            echo "<div class='form'>
<h3>Sikeresen regisztráltál</h3>
<br/>Kattints ide a <a href='login.php'>bejelentkezéshez</a></div>";
        }
    }else{
?>
	<form class="login" action="" method="post">
		<input type="text" class="login-input" name="username" placeholder="Felhasználónév" required />
    <input type="text" class="login-input" name="email" placeholder="e-mail cím">
    <input type="password" class="login-input" name="password" placeholder="Jelszó">
    <input type="submit" name="submit" value="Regisztráció" class="login-button">
  <p class="login-lost">Már regisztráltál? <a href="login.php">Jelentkezz be</a></p>
  </form>
 
<?php } ?>
</body>
</html>