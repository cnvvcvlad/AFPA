<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
    



<form action="" method="post" name="formulaire" id="formulaire">
    <fieldset>
        <legend>Informations sur vous</legend>
            <label for="nom">Nom</label>: <input type="text" name="nom" id="nom" maxlength="25" required><br><br>
            <label for="prenom">Prénom</label>: <input type="text" name="prenom" id="prenom" maxlength="25" required><br><br>
            <label for="numRue">Nr de la rue</label>: <input type="number" name="numRue" id="numRue" maxlength="25" required><br><br>
            <label for="nomRue">Nom de la rue</label>: <input type="text" name="nomRue" id="nomRue" maxlength="25" required><br><br>
            <label for="cp">Code postale</label>: <input type="number" name="cp" id="cp" maxlength="25" required><br><br>
            <label for="ville">Ville</label>: <input type="text" name="ville" id="ville" maxlength="25" required><br><br>
            <label for="mail">Email</label>: <input type="email" name="mail" id="mail" maxlength="25" required><br><br>
            <label for="tel">Téléphone</label>: <input type="number" name="tel" id="tel" maxlength="25" required><br><br>
            
        <input type="submit" value="envoyer" id="envoyer" name="envoyer">
		<p></p>		
	</fieldset>
</form>
<br><br>


<?php

var_dump($_POST);

require('function.php');

if(isset($_POST['envoyer'])){
    $db = connect();
    $insert = $db -> prepare('INSERT INTO
             personne(nom, prenom, numrue, nomrue, cp, ville, mail, tel)
             values(:n, :p, :num, :nr, :cp, :v, :m, :t)');

    $insert->execute(['n' => $_POST['nom'],
                    'p' => $_POST['prenom'],
                    'num' => $_POST['numRue'],
                    'nr' => $_POST['nomRue'],
                    'cp' => $_POST['cp'],
                    'v' => $_POST['ville'],
                    'm' => $_POST['mail'],
                    't' => $_POST['tel']]);

sleep(2);                    
//redirection
header("Location:index.php");
}

?>


</body>
</html>