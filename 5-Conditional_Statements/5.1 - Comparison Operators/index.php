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
$test1= 12;
$test2= "gewoon tekst";

echo var_dump($test1 == $test2);
echo var_dump($test1 === $test2);
echo var_dump($test1 != $test2);
echo var_dump($test1 > $test2);
echo var_dump($test1 < $test2);
echo var_dump($test1 <> $test2);
echo var_dump($test1 >= $test2);
echo var_dump($test1 <= $test2);
    ?>
</body>
</html>