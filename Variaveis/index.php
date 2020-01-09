<form action='index.php' method='post'>
	<input type="text" name="arquivo" max=5>
	<input type="submit">
</form>
<?php

if(isset($_POST['arquivo']))
{
	include('exemplo-'.$_POST['arquivo'].'.php');
}
?>