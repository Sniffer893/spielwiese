<?php include 'model/gewand.class.php';?>
<?php include 'inc/session.php';?>

<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Frameset//EN">

<html lang="en">
<head>

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
<title>Mein Kleiderkasten</title>

<!-- Bootstrap -->
<link rel="stylesheet"
	href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css"
	integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7"
	crossorigin="anonymous">
<!-- Custom CSS -->
<link rel="stylesheet" href="css/customstyle.css">

<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script
	src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js">
</script>

<script
	src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"
	integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa"
	crossorigin="anonymous"></script>

</head>

<body>
	<?php include 'inc/navbar.php';?>
	
	<?php
	
	if (isset ( $_GET ['section'] )) {
		// => if ($_GET['section']=='ks') einzelner Parameter
		switch ($_GET ['section']) {
			case "ks" :
				include 'inc/inhalt.php';
				break;
			case "admin" :
				include "inc/admin.php";
				break;
		}
	}
	else {include 'inc/start.php';}
	
	?>
</body>
</html>