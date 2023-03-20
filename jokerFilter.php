<?php


// $studentCount = 7;

// $students = ["1", "2", "3", "4", "5", "6", "7"];
// $excludedStudents = ["1", "3"];

// $groupCount = 2;




function generateGroupsJoker($studentCount, $groupCount, $students, $excludedStudents)

{
    $finalGroups = [];
    shuffle($students);

    for ($i = 0; $i < count($excludedStudents); $i++) {
        for ($j = 0; $j < $studentCount; $j++) {
            if ($students[$j] == $excludedStudents[$i]) {
                unset($students[$j]);
                $studentCount--;
            }
        }
        $students = array_values($students);
    }


    $studentPerGroup = floor(count($students) / $groupCount);
    $lonelyStudent = count($students) % $groupCount;


    if ($lonelyStudent == 0) { // si le nombre d'étudiants  est répartissable strictement équitablement
        for ($i = 0; $i < $groupCount; $i++) {
            for ($j = 0; $j < $studentPerGroup; $j++) {
                $finalGroups[$i][$j] = $students[0]; // ajoute le premier participant dans les tableaux finaux
                array_shift($students); // supprime le premier élements du tableau d'origine
            }
        }
        for ($i = 0; $i < $groupCount; $i++) {
            for ($j = 0; $j < count($excludedStudents); $j++) {
                array_push($finalGroups[$i], $excludedStudents[0]); // ajoute le premier participant dans les tableaux finaux
                array_shift($excludedStudents); // supprime le premier élements du tableau d'origine
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
        for ($i = 0; $i < $groupCount; $i++) {
            for ($j = 0; $j < count($excludedStudents); $j++) {
                array_push($finalGroups[$i], $excludedStudents[0]); // ajoute le premier participant dans les tableaux finaux
                array_shift($excludedStudents); // supprime le premier élements du tableau d'origine
            }
        }
    }


    //Affichage des participants
    foreach ($finalGroups as $groupe => $student) {
        echo "Dans le groupe " . $groupe + 1 . "\n";
        foreach ($student as $studentName) {
            echo $studentName . "\n";
        }
    }
}

// echo generateGroupsJoker(7, 2, [1, 2, 3, 4, 5, 6, 7], [1,3]);