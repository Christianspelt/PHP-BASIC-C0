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
$test1 =4;
$test2 =6;

if($test1 && $test2){
    echo "het zijn waarde";
}elseif($test1 || $test2){
    echo "het zijn een of alle bij zijn waarde";
}elseif($test1 xor $test2){
    echo "niet beide waarde";
};


    ?>
</body>
</html>