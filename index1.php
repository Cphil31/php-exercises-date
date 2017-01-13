<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	setlocale (LC_TIME, 'fr_FR','fra');

	date_default_timezone_set('Europe/Paris');
	// --- La setlocale() fonctionnne pour strftime mais pas pour DateTime->format()
	setlocale(LC_TIME, 'fr_FR.utf8','fra');// OK
	// strftime("jourEnLettres jour moisEnLettres annee") de la date courante
	?>
	<div> 
		<?php 
		echo 'exercice 1: '.date("j/m/Y");
		?>
	</div>

	<div>
		<?php 
		echo 'exercice 2: '.date("d-m-y");
		?> 
	</div>

	<div>
		<?php 
		echo 'exercice 3: '.strftime("%A %B %G");
		?> 
	</div>

	<div>
		<?php
		echo 'exercice 4: '.'le timestamp d aujourd hui est : '.strftime("%A %B %G").'.'; 
		?>
		<div>
		<?php 
		echo 'le timestamp le '.strftime("%d %B %g",mktime(0,0,0,8,2,2016)).'h'.strftime("%H",mktime(15,0,0,0,0,0)).".";
		 ?>
		</div> 
		
	</div>
</body>
</html>

