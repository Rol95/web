<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
	<head>
		<title>Szent Márton</title>
		<link rel="stylesheet" href="site.css" />
	</head>
	<header>
	</header>
	
<body>
   
<nav class="fejlec">
<div class="form">
<h5>Üdv <?php echo $_SESSION['username']; ?>!</h5>
<a href="logout.php">Kijelentkezés</a>
   
   </nav>
   <br>
<nav class="fejlec">
<div>
     <a class="gomb" href="index.php?op=r">Rólunk</a>
     <a class="gomb" href="index.php?op=g">Galéria</a>
     <a class="gomb" href="index.php?op=v">Videóink</a>
	 <a class="gomb" href="index.php?op=k">Kapcsolat</a>
	<a class="gomb" href="tamogat.html">Támogatok!</a>	 
	 </br>
	 <hr>
	<a class="gomb" href="regi.html">Régi weboldal elérhető itt!</a>
  </div>

</nav>
   

  <div class="kozepe">
  <div class="tartalom">
	<?php
		if(isset($_GET["op"]) && $_GET["op"]!="") {
			$op=$_GET["op"];
			if(file_exists("inc/".$op.".php")){
				include_once("inc/".$op.".php");
			} else {
				include_once("inc/404.php");
			}
		} else {
			include_once("main.php");
		}
	?>
</div>	
</div>
<footer class="lablec">
	<a class="lablec" href="ado.html">Adó 1%</a>
</footer>

<footer class="lablec2">
<form action="https://www.google.com/search" method="GET">
	<input type="text" name="q" placeholder="Kereső">
	<input type="submit" value="Keresés">
	</form>
</footer>
</body>
</html>