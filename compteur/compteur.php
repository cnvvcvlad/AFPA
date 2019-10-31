 <!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Document</title>
    </head>
    <body>
        <?php compteur(); ?>


    </body>
</html>


    <?php

        function compteur()
            {
                $handle = fopen("compteur.txt", "r+");
                $compt = (int)fgets($handle, 10);
                $compt +=1;
                fseek($handle, 0);
                fputs($handle, $compt);
                fclose($handle);
                echo $compt. " Visites !!";
            }

        
        function lire()
            {
                $handle = fopen("compteur.txt", "r");
                $compt = fgets($handle);
                fclose($handle);

                return $compt;
            }




    ?>