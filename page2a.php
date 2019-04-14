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
			$a = 'bonjour1';
			$b = 'bonjour2';
			$c = 'bonjour3';
			$d = 'bonjour4';
			$e = 'bonjour5';
			$f = 'bonjour6';
			?>
			
			<tr>
				<?php echo '<td>' . $a . '</td>';?>
				<?php echo '<td>' . $b . '</td>';?>
			</tr>
        
			<tr>
				<?php echo '<td>' . $c . '</td>';?>
				<?php echo '<td>' . $d . '</td>';?>
			</tr>
        
			<tr>
				<?php echo '<td>' . $e . '</td>';?>
				<?php echo '<td>' . $f . '</td>';?>
			</tr>
        
        </table>

    </body>

</html>
