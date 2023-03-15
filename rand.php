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
 
//ici on recup la taille des groupes demandés -type integer
$smallGroupes = 4;

$nombreDeTableauxACreer = $tailleMax/$smallGroupes;
//ok donnee recup echo $nombreDeTableauxACreer;
/* genere un tableau avec les cles    
$randGroupe= array_rand($students , $smallGroupes);
print_r( $randGroupe);
*/

for($i=0; $i<=$nombreDeTableauxACreer;$i++){
    $randGroupe= array_rand($students , $smallGroupes);
    echo $students[$randGroupe[0]]." ".$students[$randGroupe[1]]." ".$students[$randGroupe[2]]." ".$students[$randGroupe[3]] .'<br>' ;
};