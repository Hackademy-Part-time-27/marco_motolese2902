<?php

$users = [
    ['name' => 'Gianni', 'surname' => 'Rivera', 'gender' =>  'M'],

    ['name' => 'Giovanni', 'surname' => 'Ferraro', 'gender' =>  'M'],

    ['name' => 'Emanuele', 'surname' => 'Cimino', 'gender' =>  'M'],

    ['name' => 'Gabriele', 'surname' => 'Maggio', 'gender' => 'M'],
    
    ['name' => 'Alberto', 'surname' => 'Cuteri', 'gender' =>  'M'],

    ['name' => 'Antonio', 'surname' => 'Schiazzano', 'gender' => 'M'],

    ['name' => 'Amu', 'surname' => 'Kina', 'gender' => 'F'],

    ['name' => 'Sonia', 'surname' => 'Consoli', 'gender' => 'F'],

];

var_dump ($users);

foreach ($users as $user) {
    if ($user['gender'] == 'M') {
        echo 'Salve signor ' . $user['name'] . ' '. $user['surname'] . " è uomo" . "\n";
    } else if ($user['gender'] == 'F') {
        echo 'Salve signora ' . $user['name'] . ' '. $user['surname'] . " è donna" . "\n";
    } else {
        echo 'Buongiorno ' . $user['name'] . ' '. $user['surname'] . "\n";
    }
}


//array numerico




// ciclo for
// $arrayNumerico= [1, 8, 3, 16, 5, 12, 7, 8, 9,14];
// $somma = 0;
// $conteggio = 0;

// for ($i = 0; $i < count($arrayNumerico); $i++) {
//   if($arrayNumerico[$i] % 2 == 0){
//         $somma += $arrayNumerico[$i];
//        $conteggio++;
  
//     }
// }


// if ($conteggio > 0) {
//     $mediaNumeriPari = $somma / $conteggio;
//     echo "La media dei numeri pari è: $mediaNumeriPari\n";
// }



// for each


$arrayNumerico = [1, 8, 3, 16, 5, 12, 7, 8, 9, 14];
$somma = 0;
$conteggio = 0;

foreach ($arrayNumerico as $numero) {
    if ($numero % 2 == 0) {
        $somma += $numero;
        $conteggio++;
    }
}

if ($conteggio > 0) {
    $mediaNumeriPari = $somma / $conteggio;
    echo "La media dei numeri pari è: $mediaNumeriPari\n";
}


// 

//esercizio 3

for ($i = 1; $i <= 100; $i++) {
    if ($i % 3 == 0 && $i % 5 == 0) {
        echo "HACKADEMY\n";
    } elseif ($i % 3 == 0) {
        echo "PHP\n";
    } elseif ($i % 5 == 0) {
        echo "JAVASCRIPT\n";
    } else {
        echo $i . "\n";
    }
}
?>



