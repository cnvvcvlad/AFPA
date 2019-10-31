<pre>

<?php

    require 'add.php';

    // print_r($_POST);


    if(isset($_POST['submit']) AND isset($_POST['index']))
    {
        $data = $_POST['index'];
        var_dump($data);

        $load = lire();
        $newTab = remove($load, $data);
        saves($newTab);

        // remove($data);
    }
    else{
        header('location:csv.php');        
    }


    function remove(array $task, array $indexee)
        {
            // $load = lire();
            $newTask = [];

            foreach($task as $key => $value)
                {
                    
                    // si la ligne '$key' n'existe pas dans la table $indexee, on copie          
                    if (!in_array($key, $indexee))
                        {
                            array_push($newTask, $value);
                        }
                }
                    return($newTask);
                    // var_dump($newTask);
        }

    

?>