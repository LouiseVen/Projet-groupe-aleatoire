<?php

$studentCount = 14; // input 2 : student count afin de générer le form php avec le bon nombre d'inputs
// Attention : il faudra veiller à créer des inputs comportant des id et des attributs Name uniques pour éviter qu'ils soient écrasés.

$students = ['Student1', 'Student2', 'Student3', 'Student4', 'Student5', 'Student6', 'Student7', 'Student8', 'Student9','Student10',
    'Student11', 'Student12', 'Student13', 'student14']; // input 3 : student names in array -> limité à 25 entrées par exemple.

shuffle($students); // Shuffle les participants en amont ;)

// echo $studentCount = count($students); student count possible ici plutôt non ? Why need to be asked before ? -> Because JS vs PHP :)

$groupCount = 4; // input 4 : nombre de groupes voulus par l'utilisateur (nombre de tableaux à créer -> $i)

// Répartition : 

$studentPerGroup = floor($studentCount / $groupCount); // nombre d'étudiants par groupes en nombre entier (->$j)
$lonelyStudent = $studentCount % $groupCount; // -> pour connaitre le nombre d'étudiants solos à re-répartir

$finalGroups = []; // pour afficher les groupes créés dans des array

// function will see ;)
    if ($lonelyStudent == 0) { // si le nombre d'étudiants  est répartissable strictement équitablement
        for ($i=0; $i<$groupCount; $i++) {
            for ($j=0; $j<$studentPerGroup; $j++) {
            $finalGroups[$i][$j] = $students[0]; // ajoute le premier participant dans les tableaux finaux
            array_shift($students); // supprime le premier élements du tableau d'origine
            }
        } 
        print_r($finalGroups);
    }
    elseif ($lonelyStudent !== 0) { // si le nombre d'étudiants n'est pas répartissable de façon strictement équitablement
        for ($i=0; $i<$groupCount; $i++) {
            for ($j=0; $j<$studentPerGroup; $j++) {
            $finalGroups[$i][$j] = $students[0]; // ajoute le premier participant dans les tableaux finaux
            array_shift($students); // supprime le premier élements du tableau d'origine
            }
        }
        for ($i=0; $i<$lonelyStudent; $i++){ // réparti le restant (on part de 1 sinon cela créé un groupe en plus...)
            array_push($finalGroups[$i], $students[0]); // déplace les étudiants restants du tableau principal aux tableaux secondaires
            array_shift($students); // supprime le premier élements du tableau d'origine
            }
        print_r($finalGroups);
    }