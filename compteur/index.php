
<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Bienvenue</title>
    </head>

    <body>

        <!--Afficher le ficihier-->

        <?=lire(); // On affiche les infos introduites par method post ?> 
    
        <form action="" method="post">
            Prénom : <input type="text" name="n"><br><br>
            Nom : <input type="text" name="p"><br><br>
            <button type="submit" name="valider">Valider</button>
        </form>
    </body>
</html>


    <?php

        /*$file = fopen("monfichier.txt", "a+"); //fopen() crée une ressource nommée, spécifiée par le paramètre filename, sous la forme d'un flux.
        fputs($file, "Anthony");
        fclose($file); //fclose — Ferme un fichier*/

        //var_dump($file);

        /*$file = fopen("monFicihier.txt", "r");
        $resultat = fgets($file) // on récupère le résultat dans cette variable*/
        //fclose($file);*/


        //var_dump($resultat);  

        if(isset($_POST['valider'])) // Quand on arrive sur la page ça evite d'avoir l'erreur, php essaye de recuperer les données avant de les introduire. 
            {    
                ecrire();
            };


            function ecrire()
                {
                    $file = fopen("monfichier.txt", "a+"); //a+	Ouvre le fichier en lecture et écriture et place le pointeur à la fin du fichier
                    fputs($file, $_POST['p']. ' ' .$_POST['n']. "\r\n"); // Cette fonction est un alias de : fwrite().
                    fclose($file);
                    header("Location: index.php"); // Evite de réécrire la meme chose lors de l'actualisation de la page
                };



        
        /*function lire() // I methode
            {
                $lines = fopen("monfichier.txt", "r"); // r	Ouvre le fichier en lecture seule et place le pointeur au début du fichier
                $resultat = fread($lines, filesize("monfichier.txt")); //fread — Lecture du fichier en mode binaire
                fclose($lines);
                return $resultat;
            };*/


         function lire() // II methode
            {
                $lines = fopen("monfichier.txt", "r");
                $resultat = ""; 
                filesize("monfichier.txt");

                while(!feof($lines)){
                    $resultat .= fgets($lines);
                }
                fclose($lines);
                return $resultat;
            };

        


    ?>

    
