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
    session_start();
        // Tableau des étudiants saisis dans le formulaire utilisateur
        
        // Nombre d'édutiants saisi par le formulaire utilisateur
        $nbStudentsMax = count($students);
        
        // ici on recup le nombre de groupes demandés -type integer

        // Calcul du nombre d'étudiants à affecter à chaque groupe
        $nbStudentsToAffect = $nbStudentsMax / $nbGroupsToCreate;
    ?>

    <main>
    <div class="note note-success mb-3">
        <h3>Résultats de groupe</h3>
        <p>Voici les résultats de votre création de groupe :</p>
    </div>
        
    <div id = "group-list">
    <p>Vous voulez créer <?php echo $nbGroupsToCreate ?>  groupe(s) !</p>

    <?php
    // if (isset($_POST["filtre"])){
    //     if ($_POST["filtre"] == "hasardPur"){
            include "shuffle.php";
            echo pureRandom($_POST["nombreParticipants"], $_POST["nombreGroupe"], $_POST["students"]);
        // }
        // if ($_POST["filtre"] == "joker"){
        //     include "jokerFilter.php";
        //     echo generateGroupsJoker($_POST["nombreParticipants"], $_POST["nombreGroupe"], $_POST["students"], $_POST["excludedStudents"]);
        // };
    // }
    

      ?>   
<!--
        <article>
            <h3>Groupe A</h3>
        </article>

        <article>
            <h3>Groupe B</h3>
        </article>
    -->

    </div>
        <p>Si vous le souhaitez, vous pouvez recommencer une création de groupe, sous une nouvelle identité ou recommencer une nouvelle création de groupe sous la même identité.</p>


    </main>

    <?php include 'footer.php'; ?>


</body>

</html>