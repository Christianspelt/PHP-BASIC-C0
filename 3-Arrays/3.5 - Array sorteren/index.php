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
    
    $getallen=array(676,5345,78657,3,46,21,47); 
    $laag_hoog=asort($getallen);
    print_r($getallen);
    $hoog_laag=arsort($getallen);
    print_r($getallen);
?>
</body>
</html>