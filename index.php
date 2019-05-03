<!DOCTYPE html>
<html>
	<head>
		<title>Szent Márton</title>
		<link rel="stylesheet" href="site.css" />
	</head>
	
<body>

<nav class="fejlec">
   <a class="menupont" href="regi.html">A régi weboldal még elérhető itt!</a>
   </nav>
   <br>
<nav class="fejlec">
<div>
     <a class="gomb" href="index.php?op=r">Rólunk</a>
     <a class="gomb" href="index.php?op=g">Galéria</a>
     <a class="gomb" href="index.php?op=v">Videóink</a>
	 <a class="gomb" href="index.php?op=k">Kapcsolat</a>
	 <a class="gomb" href="index.php?op=ü">Üzenetek</a>	 
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