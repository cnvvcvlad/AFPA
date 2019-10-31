<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>CSV</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    </head>

    <body>

        <h1 class="btn-success text-center">Gestionnaire de tache -)</h1>
        <div class="container">
        <div class="row">
        <div class="col-md-6">
        <form action="remove.php" method="post">
            <fieldset>
                <legend class="btn-warning">Taches à réaliser</legend>
                <?php $load = lire(); ?>
                <?php foreach ($load as $key => $value): ?>
                <input type="checkbox" name="index[]" value="<?= $key; ?>">
                <span><?= $value[0]; ?></span><br>
                <?php endforeach ?>
                <button class="btn-primary" name="submit">Supprimer</button>
            </fieldset>
        </form>     
        </div>  

        <div class="col-md-6">
        <form action="" method="post" name="fomulaire">
        <fieldset>
        <legend class="btn-warning">Ajouter une tache</legend>
            Titre : <input type="text" name="title" required><br><br>
            Description : <input type="text" name="description" required><br><br>
            Date : <input type="text" name="date" value="<?php $date=date("d/m/Y");Print("$date"); ?>"> <br><br>        
            <button class="btn-primary" type="submit" name="valider">Valider</button>
            </fieldset>
        </form> 
        </div>
        </div>   
        </div>    



        <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    </body>
</html>

<?php

       // require_once 'add.php';

        if(isset($_POST['valider'])) // Quand on arrive sur la page ça evite d'avoir l'erreur, php essaye de recuperer les données avant de les introduire. 
            {    
                ecrire();
            };
        


        function ecrire()
            {
                $file = fopen("fichier.csv", "a+");
                fputcsv($file, array($_POST['title'], $_POST['description'], $_POST['date'])); // Cette fonction est un alias de : fwrite().
                /*  Pour indiquer le retour à la ligne en
                    Windows   : \r\n  
                    GNU/Linux : \n 
                    MacOS     : \r   */
                fclose($file);
                header("Location: csv.php"); // Evite de réécrire la meme chose lors de l'actualisation de la page
            };


        
       /* $handle = fopen("fichier.csv", "a+");

        fputcsv($handle, array("Vladislav", "Jean"));
        fputcsv($handle, array("Antho", "Tom"));

        fclose($handle);*/

       

        function lire()
            {
                $handle = fopen("fichier.csv", "a+");
                $monArray =[];

                while(true)
                {
                    $resultat = fgetcsv($handle);
                    if(!$resultat)
                    break;
                    array_push($monArray, $resultat);
                }

                fclose($handle);
                return $monArray;
                // var_dump();
            }

?>

