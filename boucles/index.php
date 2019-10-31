<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php

$will = array("Adam", "Leila", "Anthony", "Vlad"); // on peut ajouter des valeurs

//echo $will[1];
 // echo count($will);

// Utilisation des boucles
// FOR

for($i = 0; $i < count($will); $i++) { /* fonction count, on peut ajouter des données dans le array */
    echo $will[$i] . ' ';
}

//for($i=1; $i<=100; $i++){ /* dire bonjour 100 fois */
    //echo "<p> bonjour $i fois <p> ";
//}
echo '<br>';

// WHILE

$i = 0;
while($i < count($will)){
    echo $will[$i] . ' ';
    $i++; /* Incrémentation */
}

echo '<br>';


// DO 
$i = 0;
do{ /* on affiche d'abord un parametre, apres on fait l'incrémentation */
    echo $will[$i];
    $i++;
}while($i < count($will));

echo '<br>';


// FOREACH
echo "<br>foreach<br>";

foreach($will as $key){
    echo $key . ' ';
}











?>



</body>
</html>