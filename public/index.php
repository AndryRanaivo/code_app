<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8"
    <title>Docker PHP Hello World</title>
  </head>
  <body>
	<?php
		echo "LOGIN IN"; echo getenv('ENVNAME'); echo "namespace: "; echo getenv("LOGIN");
		echo "PASSWORD IN"; echo getenv('ENVNAME'); echo "namespace: "; echo getenv("PWD");
		echo getenv('path');
	?>
  </body>
</html>
