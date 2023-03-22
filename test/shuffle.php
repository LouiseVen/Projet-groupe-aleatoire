<?php

// $studentCount = $_POST["nombreParticipants"];
// $groupCount = $_POST["nombreGroupe"];

// $students = $_POST["students"];
// $studentCount = 6;
// $groupCount = 2;
// $students = ['A', 'B', 'C', 'D', 'E', 'F'];

function pureRandom($studentCount, $groupCount, $students)
{
    shuffle($students); // Shuffle les participants en amont ;)

    // Répartition : 

    $studentPerGroup = floor($studentCount / $groupCount); // nombre d'étudiants par groupes en nombre entier (->$j)
    $lonelyStudent = $studentCount % $groupCount; // -> pour connaitre le nombre d'étudiants solos à re-répartir

    $finalGroups = []; // pour afficher les groupes créés dans des array

    // function will see ;)
    if ($lonelyStudent == 0) { // si le nombre d'étudiants  est répartissable strictement équitablement
        for ($i = 0; $i < $groupCount; $i++) {
            for ($j = 0; $j < $studentPerGroup; $j++) {
                $finalGroups[$i][$j] = $students[0]; // ajoute le premier participant dans les tableaux finaux
                array_shift($students); // supprime le premier élements du tableau d'origine
            }
        }
    } elseif ($lonelyStudent !== 0) { // si le nombre d'étudiants n'est pas répartissable de façon strictement équitablement
        for ($i = 0; $i < $groupCount; $i++) {
            for ($j = 0; $j < $studentPerGroup; $j++) {
                $finalGroups[$i][$j] = $students[0]; // ajoute le premier participant dans les tableaux finaux
                array_shift($students); // supprime le premier élements du tableau d'origine
            }
        }
        for ($i = 0; $i < $lonelyStudent; $i++) { // réparti le restant (on part de 1 sinon cela créé un groupe en plus...)
            array_push($finalGroups[$i], $students[0]); // déplace les étudiants restants du tableau principal aux tableaux secondaires
            array_shift($students); // supprime le premier élements du tableau d'origine
        }
    }

    //Affichage des participants
    foreach ($finalGroups as $groupe => $student) {
        echo "Dans le groupe " . $groupe + 1 . "<br>";
        foreach ($student as $studentName) {
            echo $studentName . "<br>";
        }
    }
}
 // input 3 : student names in array -> limité à 25 entrées par exemple.
// echo pureRandom(6,2,['A','B','C','D','E','F']);