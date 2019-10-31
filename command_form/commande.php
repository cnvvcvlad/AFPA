<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Formulaire</title>
</head>
<body>
<?php

require ('function.php');
/*$list = listArticle();*/

?>


<h1>Passer une commande</h1>


<form action="" method="post" name="formulaire" id="formulaire">
    <fieldset>
        <legend>Commander</legend>
        <fieldset>
        <legend>Article : </legend>
            <select name='article' id="article">
                <option value="">--Article--</option>
                    <?php $list = listArticle('article');
                    foreach($list as $key => $value): 
                    ?>            
                <option value="<?=  $value['id']; ?>"><?php echo $value['article'];?></option>  
                    <?php endforeach;?>      
            </select>
                <label for="qte">Quantité</label>: <input type="number" name="qte" id="qte" maxlength="25" required><br>
        </fieldset>
        <br><br>    
        
        <fieldset>
            <legend>Type de livraison : </legend>
                <select name='typeLivraison' id="typeLivraison">
                    <option value="">--Type--</option>
                    <option value="rapide">rapide</option>
                    <option value="standart">standart</option>
                    <option value="express">express</option>
                </select>
        </fieldset>
        <br><br>

        <fieldset>
        <legend>Lieu de livraison : </legend>
        <select name='lieuLivraison' id="lieuLivraison">
            <option value="">--Lieu--</option>
            <option value="dommicile">dommicile</option>
            <option value="bureau">bureau</option>
            <option value="relai">relai</option>
        </select>
        </fieldset>
        <br><br>
        <fieldset>
            <legend>Client : </legend>
            <select name='client' id="client">
                <option value="">--Client--</option>
                <?php $list = listArticle('personne');
                        foreach($list as $key => $value): 
                        ?>   
                <option value="<?=  $value['id']; ?>"><?php echo $value['prenom'] . ' ' . $value['nom'];?></option>
                        <?php endforeach;?> 
                
            </select>
        </fieldset>
        <br>				

        <input type="submit" value="envoyer" id="envoyer" name="envoyer">
		<p></p>		
	</fieldset>
</form>
<br><br>

<?php

var_dump($_POST);
    if(isset($_POST['envoyer'])){
        /*echo $_POST['client'];*/
        $db = connect();
        $insert = $db -> prepare('INSERT INTO
             commande(numCmde, dateCmde, typeLivraison, lieu, art, qte, id_client) /* La liste des titres pour la table commande, dans la bdd */
             values(?, now(), ?, ?, ?, ?, ?)');

        $date = date("Y-m-d");
        $numCmde = $_POST['client']. '_' . $date;

       $insert->execute([$numCmde, /*Les attributs doivent correspondre au données du formulaire "name" */
                        $_POST['typeLivraison'],
                        $_POST['lieuLivraison'],
                        $_POST['article'],
                        $_POST['qte'],
                        $_POST['client']]);


    //redirection
header("Location:index.php");
                    
    }
?>



</body>
</html>