<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>GET - POST</title>
</head>

<body>

	<form method="post" action="index.php">
	  <input type="text" name="name">
	  <input type="text" name="lang">
	  <input type="submit" value="submit">
	</form>

    <?php
	$name = $_POST['name'];
	$lang = $_POST['lang'];
	echo '<p>' . $name . '</p>';
	echo '<p>' . $lang . '</p>';
?>
<?php
 function greeting() {
    $name = $_POST['name'];
    echo "Hello, " . $name;
 }
 greeting();

?>

</body>

</html>