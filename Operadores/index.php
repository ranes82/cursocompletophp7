<?php
$page = $_SERVER['PHP_SELF'];
$sec = "10";
?>
<html>
    <head>
    <meta http-equiv="refresh" content="<?php echo $sec?>;">
    </head>
    <body>
	
	<form action='index.php' method='get'>
		<input type="text" name="arquivo" max=5>
		<input type="submit">
	</form>
	
	<?php

	if(isset($_GET['arquivo']))
	{
		include('exemplo-'.$_GET['arquivo'].'.php');
	}
	?>
    </body>
</html>



