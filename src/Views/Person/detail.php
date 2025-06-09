<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
	ESTE ES EL DETALLE DE LA PERSONA<br>
	ID: <?php echo $data["person"]->id() ?><br>
	NAME: <?php echo $data["person"]->name() ?><br>
	SURNAME: <?php echo $data["person"]->surname() ?><br>
	DNI: <?php echo $data["person"]->dni() ?><br>
</body>
</html>