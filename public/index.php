<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"
    <title>PRINT ENV VARS </title>
  </head>
  <body>
	<?php
		echo "<br> LOGIN in "; echo getenv('ENVNAME'); echo " namespace is: "; echo getenv('APPLOGIN'); echo "<br>\r\n";
		echo "<br> PASSWORD in "; echo getenv('ENVNAME'); echo " namespace is: "; echo getenv('APPPWD'); echo "<br>\r\n";
		echo "<br>PATH VARIABLE: "; echo getenv('path'); echo "\r\n";
	?>
  </body>
</html>
