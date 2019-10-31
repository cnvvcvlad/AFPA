<?php
require('function.php');

$client = listArticle("personne");

//var_dump($client);
echo "<select name='client'>";

foreach ($client as $key => $value) {
    echo "<option value=".$value['id'].">";
        echo $value['prenom']. ' ' .$value['nom'];
    echo "</otpion>";
}

echo "</select>";

echo "<br><br><br>";

foreach ($client as $key => $value) {
    $v = $value['id'];
     echo "<a href='listClient.php?idclient=$v'>" .$value['prenom'].' ' .$value['nom']." </a><br>"; /* On reste sur la meme page */
     
} 
/* L'utilisateur purra supprimer des données dans la bdd */
if (isset($_GET['idclient'])){ 
        $db = connect();
        $query = "DELETE FROM personne WHERE id = :id";
        $sup = $db->prepare($query);

        $sup->bindValue("id", $_GET['idclient'], PDO::PARAM_INT);
        $sup->execute();
        
}



?>