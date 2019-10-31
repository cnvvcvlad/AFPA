<?php
// Multiplication 
function multiplication($v1){
    for($i = 1; $i <= 10; $i++){
         echo ($i * $v1).' ';
    }

}

// multiplication(5);
echo '<br>';


//Division 

function division($a, $b){
    $d = 0;
    $r = 0;

    while($a >= $b){
        $a = $a - $b;
        $d++;
    }
    $r = $a;
}

// division(10, 2);
?>