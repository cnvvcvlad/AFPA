<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
    



<form action="php_1_affichage.php" method="post" name="formulaire" id="formulaire">
    <fieldset>
        <legend>Informations sur vous</legend>
            <label for="nom">Nom</label>: <input type="text" name="nom" id="nom" maxlength="25" required><br><br>
            <label for="prenom">Prénom</label>: <input type="text" name="prenom" id="prenom" maxlength="25" required><br><br>
            <label for="codepostal">Code Postal</label>: <input type="number" name="codepostal" maxlength="5" required><br><br>
            <label for="ville">Ville</label>: <input type="text" name="ville" id="ville" maxlength="25" required><br><br>
					
       <br><br>
        <fieldset>
       <legend>Sexe</legend>
       <input type="radio" id="homme" name="sexe" value="homme"><label for="">M</label>
       <input type="radio" id="femme" name="sexe" value="femme"><label for="">F</label>
       </fieldset>

       <br><br>
        <fieldset>
       <legend>Pays : </legend>
       <select name='pays' id="pays">
            <option value="">--Pays--</option>
            <option value="france">France</option>
            <option value="allemagne">Allemagne</option>
            <option value="suisse">Suisse</option>
            <option value="russie">Russie</option>
            <option value="usa">USA</option>
            <option value="congo">Congo</option>
        </select>
        </fieldset>
        <br><br>
        <fieldset>
            <legend>Langues</legend>
            <input type="checkbox" name="langues[]" value="français"><label for="">Français</label>
            <input type="checkbox" name="langues[]" value="anglais"><label for="">Anglais</label>
            <input type="checkbox" name="langues[]" value="russe"><label for="">Russe</label>
            <input type="checkbox" name="langues[]" value="roumain"><label for="">Roumain</label>
            <input type="checkbox" name="langues[]" value="espagnol"><label for="">Espagnol</label>



        </fieldset>

        <br><br>

					

        <input type="submit" value="envoyer" id="envoyer" name="envoyer">
		<p></p>		
	</fieldset>
</form>
<br><br>


</body>
</html>