<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"
    <title>Docker PHP Hello World</title>
  </head>
  <body>
	<?php
		echo "LOGIN IN"; echo getenv('ENVNAME'); echo " namespace is: "; echo getenv('APPLOGIN'); echo "<br>\r\n";
		echo "PASSWORD IN"; echo getenv('ENVNAME'); echo " namespace is: "; echo getenv('APPPWD'); echo "<br>\r\n";
		echo "PATH VARIABLE"; echo getenv('path'); echo "\r\n";
	?>
  </body>
</html>
