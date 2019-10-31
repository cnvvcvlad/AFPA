<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<?php /* La fonction d'affichage des paramètres avec for */
$will = array("Adam", "Leila", "Anthony", "Vlad"); // on peut ajouter des valeurs

function affichage($monTab){
    for($i = 0; $i < count($monTab); $i++) { /* fonction count, on peut ajouter des données dans le array */
        echo $monTab[$i] . ' ';
    }
}
affichage($will);

echo '<br>';

 /* La fonction d'affichage des paramètres avec while */
$will = array("Adam", "Leila", "Anthony", "Vlad"); // on peut ajouter des valeurs

function afficher($données){$i = 0;
    while($i < count($données)){
        echo $données[$i] . ' ';

        $i++; /* Incrémentation */
    }

}
afficher($will);

echo '<br>';

 /* La fonction d'affichage des paramètres avec foreach */
$will = array("Adam", "Leila", "Anthony", "Vlad"); // on peut ajouter des valeurs

function afficherTab($table){foreach($table as $key){
    echo $key . ' ';
}
}
afficherTab($will);

echo '<br>';
echo '<br>';

/* La fonction d'ajouter des paramètres */
$will = array("Adam", "Leila", "Anthony", "Vlad"); // on peut ajouter des valeurs

function addParam(&$table, $prenom){
    $table[] = $prenom;

}
afficherTab($will);
addParam($will, "Jean");
echo '<br>';

afficherTab($will);
echo '<br>';

addParam($will, "John");
afficherTab($will);
echo '<br>';

addParam($will, "Kevin"); /* on appelle la fonction avec un nouveau paramètre */
afficherTab($will);


// Fonction pour afficher le tableau
echo '<br>';

function afficheTableau($table){
    foreach ($table as $key => $value) {
        echo $key . ' : ' . $value . "<br>";
    }
}


/*function afficheTableau($table){
    $value = " ";
    foreach ($table as $key) {
         $value .= $key." ";
    }
}*/


// Trier les paramètres dans un tableau
$will = array(10, 5, 50, 30, 20);

function TrieTable(&$tableau){
    for($i = 0; $i < count($tableau); $i++) {
        for($j = $i+1; $j < count($tableau); $j++){
            if($tableau[$i] > $tableau[$j]){
                $temp = $tableau[$i];
                $tableau[$i] = $tableau[$j];
                $tableau[$j] = $temp;

                
            }
        }
       
        
    }

}


// Multiplication 
function multiplication($v1){
    for($i = 1; $i <= 10; $i++){
         echo ($i * $v1).' ';
    }

}


echo afficheTableau($will);
TrieTable($will);
echo '<br>';

echo afficheTableau($will);

multiplication(5);


echo '<br>';

// Division


function diviser($v1, $v2){
    $t = 0;
    $j = $v1;
    $text = $v1.'/'.$v2." = ";

    for($i = 1; $i <= $j; $i++){
        if($v1 >= $v2){
            $t++;
            $v1 -= $v2;
        }
    }
    return $text .$t;
}

echo diviser(10, 2);
echo '<br>';
echo diviser(15, 3);
echo '<br>';


// Premier nombre I

function premiernombre($p){
    for($i = 2; $i < $p; $i++){
        if($p % $i == 0)
            return false;
    }
    return true; // on retient dans la memoire le nombre premier
}

// premiernombre(11);


if(premiernombre(48)){
    echo "premier";
}
else{
    echo "pas premier";
}



echo '<br>';
echo '<br>';

// Premier nombre II
function Premier( $p ){
  
    //Pour i = 2, et i inférieur au nombre demandé, je regarde si mon nombre est divisible dans N.
   
    for ($i = 2; $i < $p; $i++){
      if ($p % $i == 0){
        $test = 1;
      }
    }
   
    if (isset($test)) { //Check si la variable existe.
      echo "$p n'est pas un nombre premier";
    }
    else{ //Elle n'existe pas, donc c'est premier.
      echo "$p est un nombre premier";
    }
        
  }
   
  Premier(17); //11 est un nombre premier.
  echo "<br/>";
  Premier(10); //10 n'est pas un nombre premier.

  echo "<br/>";


// Les 100 premiers nombres premiers

function centPremier(){
    $compteur = 0;
    $nombre = 2;

    while($compteur < 100){
        if(premiernombre($nombre)){
            $compteur++;
            echo $nombre .' ';
        }
        $nombre++;
    }
}

centPremier();

?>



</body>
</html>