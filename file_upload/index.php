<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Uploader</title>
</head>
<body>
    
    <form action="" method="post" enctype="multipart/form-data"> <!-- 
        Lorsque la valeur de l'attribut method est post, cet attribut définit le type MIME qui sera utilisé pour encoder les données envoyées au serveur, 
        la valeur utilisée par un élément <input> dont l'attribut type vaut "file". -->
        <label for="">Prénom</label>
        <input type="text" name="personne">
        <label for="">Fichier</label>
        <input type="file" name="fichier">
        <input type="submit" name="valider">
    </form>

    
</body>
</html>


<?php
    if(isset($_FILES['fichier']) AND $_FILES['fichier']['error'] == 0){
        if($_FILES['fichier']['size'] <= 1000000){

            //extention autorisée
            $extension_autorisee = ["jpg", "jpeg", "png", "gif"];

            //nom et extention
            $info = pathinfo($_FILES['fichier']['name']); // pathinfo — Retourne des informations sur un chemin système
            // retourne des informations sur le chemin path, sous forme de chaine ou de tableau associatif, ceci dépend du paramètre options
            
            //extention de notre fichier
            $extension_uploadee = $info['extension'];

            // on vérifie l'extention
            if(in_array($extension_uploadee, $extension_autorisee) // in_array — Indique si une valeur appartient à un tableau
            ){
                $nom = $_FILES['fichier']['name'];

                // Déplacer un fichier téléchargé
                move_uploaded_file($_FILES['fichier']['tmp_name'], 'img/'.$nom); // d'abord créer un dossier avec le nom "img"
                echo "fichier transféré avec succes";
            }
            else{
                echo "Cette extention n'est pas autorisée";
            }


        } else{
            echo "votre fichier est trop volumineux";
        }
    }


?>
