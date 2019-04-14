<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <link rel="stylesheet" href="page2.css" />

        <title>page2.html</title>

    </head>


    <body>
		
		<?php
		
		$tab=array("bonjour1","bonjour2","bonjour3","bonjour4","bonjour5","bonjour6");
		
		// Affichage du contenu du tableau avec la fonction print_r(), mais de manière plus visible grâce aux balises <pre> et </pre>
		echo '<pre>';
		print_r($tab);
		echo '</pre>';
		
		?>

    </body>

</html>
