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
$test1 = 10;
$test2 = 6;

if($test1 == $test2){
    echo "gelijk";
}
else{
    echo "ongelijk";
};

if($test1 === $test2){
    echo "identiek";
}
else{
    echo " niet identiek";
};

if($test1 > $test2){
    echo " test1 is groter dan test2";
}
else{
    echo " test1 is kleiner dan test2.";
};

if($test1 >= $test2){
    echo " test1 is groter of gelijk aan test2";
}
else{
    echo " test1 is kleiner of gelijk aan test2";
};


    ?>
</body>
</html>