<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$mydognames =["ruffus","bo","vlekkie"] ;

echo "<ul><li>". $mydognames[0] . "</li><li>" . $mydognames[1] . "</li><li>" . $mydognames[2] . "</li</lu>";

$mydognames[1] = "tessa" ;

echo "<ul><li>". $mydognames[0] . "</li><li>" . $mydognames[1] . "</li><li>" . $mydognames[2] . "</li</lu>";
?>
</body>
</html>