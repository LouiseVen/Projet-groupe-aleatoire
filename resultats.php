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
        // Tableau des étudiants saisis dans le formulaire utilisateur
        $allStudents = $_POST['students'];
        
        // Nombre d'édutiants saisi par le formulaire utilisateur
        $nbStudentsMax = count($allStudents);
        
        // ici on recup le nombre de groupes demandés -type integer
        $nbGroupsToCreate = $_POST['nombreGroupe'];

        // Calcul du nombre d'étudiants à affecter à chaque groupe
        $nbStudentsToAffect = $nbStudentsMax / $nbGroupsToCreate;
    ?>

    <main>
        <h2>Résultats de groupe</h2>
        <p>Voici les résultats de votre création de groupe :</p>
        <p>Vous voulez créer <?php echo $nbGroupsToCreate ?>  groupe(s) !</p>

        <?php
            $groupeCountNumber = 1;
            
            // Boucle principale de création des groupes
            for ($i = 0; $i < $nbGroupsToCreate; $i++)
            {
                echo "Groupe" . " " . $groupeCountNumber++ . " " . "composé de : <br>";
                // Récupération aléatoire de x clés depuis le tableau complet
                $randGroupe = array_rand($allStudents, $nbStudentsToAffect);
                
                // On parse le tableau retourné
                for( $j=0;$j<$nbStudentsToAffect;$j++)//$randGroupe as $key => $nameStudent)
                {
                    echo $allStudents[$randGroupe[$j]]. "<br>";
                    unset($allStudents[$randGroupe[$j]]);
                }; 
                echo "<br>";  
            }




            //for ($i = 0; $i < $nbStudentsToAffect; $i++) {
            //    $randGroupe = array_rand($allStudents, $nbStudentsMax);
           
            
            //echo "Groupe" . " " . $groupeCountNumber++ . " " . "composé de : <br>";
           // foreach( $randGroupe as $key=> $nameStudent){
           //     echo $nameStudent. "<br>";
           //     unset($randGroupe[$key]);
            
           // };

/*
            echo $students[$randGroupe[0]] . ", " . $students[$randGroupe[1]] . ", " . $students[$randGroupe[2]] . ", " . $students[$randGroupe[3]] . "<br>";
            //print_r( $randGroupe);
            unset($students[$randGroupe[0]], $students[$randGroupe[1]], $students[$randGroupe[2]], $students[$randGroupe[3]]);
            */
       // };


        //var_dump($_POST); ?>
<!--
        <article>
            <h3>Groupe A</h3>
        </article>

        <article>
            <h3>Groupe B</h3>
        </article>
    -->
        <p>Si vous le souhaitez, vous pouvez recommencer une création de groupe, sous une nouvelle identité ou recommencer une nouvelle création de groupe sous la même identité.</p>


    </main>

    <?php include 'footer.php'; ?>


</body>

</html>