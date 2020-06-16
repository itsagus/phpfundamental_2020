<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?php 
	$_SESSION["favcolor"] = "green";
	$_SESSION["favanima"] = "cat";

	echo "Session variables are set.";

	 ?>

</body>
</html>