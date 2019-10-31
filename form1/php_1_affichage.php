
<?php
var_dump($_POST);

if(isset($_POST['envoyer'])){
    echo $_POST['nom'];
    echo '<br>' . $_POST['prenom'];
    echo '<br>' . $_POST['codepostal'];
    echo '<br>' . $_POST['ville'];
    echo '<br>' . $_POST['sexe'];
    echo '<br>' . $_POST['pays'];
    $lang = $_POST['langues'];
    foreach ($lang as $key) {
        echo '<br>' . $key. ' ';

    }

}

?>