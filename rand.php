<?php
// taille du groupe définitif à récup
$students = [
    1=>'Marina',
    2=>'Coline',
    3=>'Angeline',
    4=>'Louise',
    5=>'Sarah',
    6=>'Carole',
    7=>'student7', 
    8=>'student8',
    9=>'student9',
    10=>'student10',
    11=>'student11',
    12=>'student12', 
];

$tailleMax = count($students);
 
//ici on recup le nbr de personnes par groupe -type integer
$smallGroupes = 4;

$nombreDeGroupeACreer = $tailleMax/$smallGroupes;
//ok donnee recup echo $nombreDeTableauxACreer;
/* genere un tableau avec les cles    
$randGroupe= array_rand($students , $smallGroupes);
print_r( $randGroupe);
*/
$groupeCountNumber = 1;
for($i=0; $i<$nombreDeGroupeACreer;$i++){
    $randGroupe= array_rand($students , $smallGroupes);
    echo "Groupe"." ". $groupeCountNumber ++." "."composé de : <br>";
    echo $students[$randGroupe[0]].", ".$students[$randGroupe[1]].", ".$students[$randGroupe[2]].", ".$students[$randGroupe[3]]."<br>" ;
    //print_r( $randGroupe);
    unset($students[$randGroupe[0]],$students[$randGroupe[1]],$students[$randGroupe[2]],$students[$randGroupe[3]]);
    
};