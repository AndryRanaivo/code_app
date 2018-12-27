<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"
    <title>PRINT ENV VARS </title>
  </head>
  <body>
	<p>
	<?php
		echo "\n LOGIN in "; echo getenv('ENVNAME'); echo " namespace is: "; echo getenv('APPLOGIN'); echo "<br>\r\n";
		echo "\n  PASSWORD in "; echo getenv('ENVNAME'); echo " namespace is: "; echo getenv('APPPWD'); echo "<br>\r\n";
		echo "\n PATH VARIABLE: "; echo getenv('path'); echo "\r\n";
	?>
	</p>
  </body>
</html>
