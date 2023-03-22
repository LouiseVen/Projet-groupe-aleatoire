<?php
// taille du groupe définitif à récup
$students = [
    'Lilou' => 5,
    'Mimosa' => 5,
    'Pouet' => 4,
    'Manon' => 3,
    'Marina' => 2,
    'Louise' => 2,
    'Emma' => 2,
    'Coline' => 1,
    'Angeline' => 1,
    'Sarah' => 1,
    'Carole' => 1,
    'Oceane' => 1,
];
$studentTotal= 12; //$_POST["nombreParticipants"];
$groupCount = 3; //$_POST["nombreGroupe"];
$studentPerGroup = 3;

function levelRandom($studentTotal, $groupCount, $studentPerGroup, $students)
{
    $finalGroups = []; // pour afficher les groupes créés dans des array
    $NbTotal = 0;
    arsort($students);

    // Répartition : 
    $arrayKey = array_keys($students);
    for ($i = 0; $i < $groupCount; $i++) {
        //boucle principale de creation des groupes
        $NbAffect = 0;
        

        // boucle qui affecte les etudiants par groupes
        for ($j = 0; $j < $studentPerGroup; $j++) {
            // $finalGroups[$i][$j] = $arrayKey[$NbAffect];//$i.$j;
            $finalGroups[$i][$j] = $arrayKey[$i + ($NbAffect * $groupCount)];
            echo 'i = ' . $i . '    -    NbAffect = ' . $NbAffect . '    -    groupCount = ' . $groupCount . PHP_EOL;
            $NbAffect++;
            $NbTotal++;
        }
    }

    //Sil reste des etudiants non affectés
    if ($studentTotal != $NbTotal) {
        $deltaStudent = $studentTotal - $NbTotal;
        
        echo $studentTotal. PHP_EOL;
        echo $NbTotal. PHP_EOL;
        
        echo $deltaStudent. PHP_EOL;


        for ($i = 0; $i < $deltaStudent; $i++) {
            $finalGroups[$i][$groupCount+1] = $arrayKey[$studentTotal-($i+1)];
        }
    }


    print_r($finalGroups);
}

levelRandom(12, 3, 3, $students);
