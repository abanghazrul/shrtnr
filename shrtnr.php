<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title><?php echo ucfirst($_SERVER['SERVER_NAME']) ?></title>
</head>
<body>
	<form action="index.php?create=true" method="post" accept-charset="utf-8">
		<label for="link">Give Long URL:</label>
		<input type="text" name="link" value="http://" id="link">
		<input type="submit" value="Continue &rarr;">
	</form>
</body>
</html>
