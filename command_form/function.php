<?php
function connect(){
    $pdo = new PDO("mysql:host=localhost;dbname=commande","root","");
    array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION, PDO::MYSQL_ATTR_INIT_COMMAND
    => 'SET NAMES utf8'); 
    return $pdo;

}
// Effectuer une requete 
function listArticle($art){
    $db = connect();

    $query = $db->prepare("SELECT * FROM $art");

    $query->execute([]);
    $list = $query->fetchAll();
    

    return $list;

}


// On crée une variable $art pour pouvoir utiliser la function listArticle pour les 'article'  et 'client'
/*function listClient(){
    $db = connect();

    $query = $db->prepare("SELECT * FROM personne");

    $query->execute([]);
    $list = $query->fetchAll();
    

    return $list;

}*/



?>