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
    $a = false;
    echo gettype($a) . "<br>";
    
    $b = null;
    echo gettype($b) . "<br>";

    $c = "word";
    echo gettype($c) . "<br>";

    $d = 3.3;
    echo gettype($d) . "<br>";

    $e = 3;
    echo gettype($e) . "<br>";
?>
</body>
</html>