<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>PeopleMix - Résultats</title>
</head>

<body>
    <?php include 'header.php'; ?>

    <?php
    // taille du groupe définitif à récup
    $students = $_POST['students'];
    var_dump($_POST['students']);

    $tailleMax = count($students);

    //ici on recup la taille des groupes demandés -type integer
    $smallGroupes = 4;

    $nombreDeTableauxACreer = $tailleMax / $smallGroupes;
    //ok donnee recup echo $nombreDeTableauxACreer;
    /* genere un tableau avec les cles    
$randGroupe= array_rand($students , $smallGroupes);
print_r( $randGroupe);
*/

    for ($i = 0; $i <= $nombreDeTableauxACreer; $i++) {
        $randGroupe = array_rand($students, $smallGroupes);
        echo $students[$randGroupe[0]] . " " . $students[$randGroupe[1]] . " " . $students[$randGroupe[2]] . " " . $students[$randGroupe[3]] . '<br>';
    };

    var_dump($_POST); ?>
    <main>
        <h2>Résultats de groupe</h2>
        <p>Voici les résultats de votre création de groupe !</p>

        <article>
            <h3>Groupe A</h3>
        </article>

        <article>
            <h3>Groupe B</h3>
        </article>

        <p>Si vous le souhaitez, vous pouvez recommencer une création de groupe, sous une nouvelle identité ou recommencer une nouvelle création de groupe sous la même identité.</p>


    </main>

    <?php include 'footer.php'; ?>


</body>

</html>