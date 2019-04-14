<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <link rel="stylesheet" href="page2.css" />

        <title>page2.html</title>

    </head>


    <body>
		
		<?php
		
		// Utilisation de la fonction Krumo disponible sur le net
		include("krumo/class.krumo.php");
		
		$tab=array("bonjour1","bonjour2","bonjour3","bonjour4","bonjour5","bonjour6");
		
		// Affichage du contenu du tableau avec la fonction krumo
		krumo($tab);
		
		?>

    </body>

</html>
