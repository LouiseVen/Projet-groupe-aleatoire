<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>PeopleMix - Résultats</title>
</head>

<body>
    <?php include 'header.php'; 
    

    session_start();
    // $excludedStudent = $_SESSION['excludedStudent'] = $_POST['excludedStudent'];

        // Tableau des étudiants saisis dans le formulaire utilisateur
        
        // Nombre d'édutiants saisi par le formulaire utilisateur
        $nbStudentsMax = count($_SESSION['students']);
        
        // ici on recup le nombre de groupes demandés -type integer

        // Calcul du nombre d'étudiants à affecter à chaque groupe
        $nbStudentsToAffect = $nbStudentsMax / $_SESSION['nombreGroupe'];
    ?>

    <main>
    <div class="note note-success mb-3">
        <h3>Résultats de groupe</h3>
        <p>Voici les résultats de votre création de groupe :</p>
    </div>
        
    <div id = "group-list">
    <p>Vous voulez créer <?php echo $_SESSION['nombreGroupe'] ?>  groupe(s) !</p>

    <?php
    switch ($_SESSION['selectbox']){
        case 'Hasard complet':
            include "shuffle.php";
            echo "bonjour";
            echo pureRandom($_SESSION['nombreParticipants'], $_SESSION['nombreGroupe'], $_SESSION['students']);
            break;
        case 'Joker':
            include "jokerFilter.php";
            $_SESSION['excludedStudent'] = $_POST['excludedStudent'];
             echo generateGroupsJoker($_SESSION["nombreParticipants"], $_SESSION["nombreGroupe"], $_SESSION["students"], $_SESSION["excludedStudent"]);
             break;
    }
            

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