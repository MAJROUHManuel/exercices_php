<!DOCTYPE html>

<html>

    <head>

        <meta charset="utf-8" />

        <link rel="stylesheet" href="page2.css" />

        <title>page2.html</title>

    </head>


    <body>
		
		<table>
			 
			<?php
			$tab=array("bonjour1","bonjour2","bonjour3","bonjour4","bonjour5","bonjour6");
			
			/* Il y a trois façons différentes d'afficher le tableau qui sont présentées dans cette balise php: 
			 * nous pouvons afficher les lignes les unes après les autres, les cellules seront affichées 2 par 2 */  
			echo "<tr><td>$tab[0]</td><td>$tab[1]</td></tr>";
			echo "<tr><td>$tab[2]</td><td>$tab[3]</td></tr>";
			echo "<tr><td>$tab[4]</td><td>$tab[5]</td></tr>";
			
			// Cette boucle for donne le même résultat mais en plus condensé: les lignes seront affichées les unes après les autres et les cellules 2 par 2
			for ($i=0; $i<3; $i++){
				echo "<tr><td>{$tab[2*$i]}</td><td>{$tab[2*$i+1]}</td></tr>";
			}
			
			/* Pour cette boucle for, nous affichons les cellules les unes après les autres et nous testons si nous sommes en début ou en fin de ligne. 
			 * A la fin de la boucle, nous auront affiché le tableau comme dans les deux autres cas, c'est-à-dire une ligne après l'autre et les cellules 2 par 2	*/
			for ($i=0; $i<6; $i++){
				if ($i == 0 ||  $i==2 || $i==4)
					echo "<tr>";
					
				echo "<td>$tab[$i]</td>";
				
				if ($i == 1 ||  $i==3 || $i==5)
					echo "</tr>";
			}
					
			?>
			
        </table>

    </body>

</html>
