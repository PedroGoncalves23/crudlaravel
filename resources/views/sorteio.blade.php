<?php

// TRASFORMANDO OS DADOS DO BANCO EM UM ARRAY
foreach ($pessoas as $pessoa) {
    $a[] = $pessoa['nome'];
    $b = $a;
}


//     for ($i = 0; $i < count($a); $i++) {
    
//     {
//         if ($a[$i] == $b[$i]) {
//         shuffle($a);
//     }
//     }

// }

$bb = Array();
foreach (array_combine($a, $b) as $a => $b) {
    if ($a == $b)
    {
        $sla = $a;
        array_push($bb, $sla);
        
  
    } else {
        {
            echo "ok";
        }
    }
}
shuffle($bb);
dd($bb);



foreach (array_combine($a, $b) as $a => $b) {
    echo $a . ' sorteou o amigo ' . $b . "\n\r<br>";
}

?>
