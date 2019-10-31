<?php

    const DATAFILE ="fichier.csv";


    if(isset($_POST['valider']))
        {
            $tache = 
            [
                $title = $_POST['title'],
                $desc = $_POST['description'],
                $date = $_POST['date']
            ];

            save($tache);
        }



    function save(array $maTache)
        {
            $file = fopen(DATAFILE, "a+");
            fputcsv($file, $maTache);
            fclose($file);

            header("Location: csv.php");
        }



    function saves(array $newTask){
        $file = fopen(DATAFILE, "w");
        
        foreach($newTask as $key){
            fputcsv($file, $key);

        }
        fclose($file);

        header("Location: csv.php");
    }

    function lire(){
        $handle = fopen(DATAFILE, "a+");

        $monArray =[];

        while(true){
            // récupération du premier tableau
            $resultat = fgetcsv($handle);
            
            // on sort si la lecture est fini
            if(!$resultat)  
            break;
            array_push($monArray, $resultat);
        }
        fclose($handle);

        // renvoie de nouveau
        return $monArray;
    }

?>