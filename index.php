<?php

// TODO n'oubliez pas de créer votre classe dans le dossier classes.

include "./classes/StrUtils.php";

$str1 = new StrUtils("Bonjour et bienvenu à la formation de chez Up-To Fourmies (59)");

$str1->bold($str1);
$str1->italique($str1);
$str1->underline($str1);
$str1->capitalize($str1);
$str1->uglify($str1);
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StrUtils</title>
    <link rel="stylesheet" href="./css/style.css">
</head>
<body>

</body>
</html>
