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
			?>
			
			<tr>
				<?php echo '<td>' . $tab[0] . '</td>';?>
				<?php echo '<td>' . $tab[1] . '</td>';?>
			</tr>
        
			<tr>
				<?php echo '<td>' . $tab[2] . '</td>';?>
				<?php echo '<td>' . $tab[3] . '</td>';?>
			</tr>
        
			<tr>
				<?php echo '<td>' . $tab[4] . '</td>';?>
				<?php echo '<td>' . $tab[5] . '</td>';?>
			</tr>
        
        </table>

    </body>

</html>
