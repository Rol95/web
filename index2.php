<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="site.css" />
</head>
<body>
<div class="form">
<h1 >Üdv <?php echo $_SESSION['username']; ?>!</h1>
<p><a href="index.php">Az oldalt itt találod!</a></p>
<a href="logout.php">KIjelentkezés</a>
</div>
</body>
</html>