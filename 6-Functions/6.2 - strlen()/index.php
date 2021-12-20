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
 $voornaam = " Christian";
 $achternaam =" spelt";
function Mijnnaamis($voornaam, $achternaam){
return $voornaam = " Christian";
return $achternaam =" spelt";
};

$zin = "mijn naam is";

$voornaam = strtoupper($voornaam);
$achternaam = strtoupper($achternaam);
$zin = strtoupper($zin);    
function gehelenaam($zin, $voornaam, $achternaam){
    return $zin . $voornaam . $achternaam;
};
    
echo gehelenaam($zin, $voornaam, $achternaam);   
    ?>
</body>
</html>