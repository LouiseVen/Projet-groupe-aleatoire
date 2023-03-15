<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="utf-8">
        <link href="style.css" rel="stylesheet" type="text/css"/>
        <title>PeopleMix</title>
    </head>
    <body>
        
        <?php include("header.php")?>
        <main>
            <div class="about">
                <h2>Le créateur de groupe aléatoire</h2>
                <h3>(Mais pas trop)</h3>
                <p>Grâce à notre créateur de groupe aléatoire, vous pourrez rapidement et facilement faire des groupes entre vos étudiant·e·s, et même choisir des filtres selon vos choix !</p>
                
            </div>

            <div class="form">
                <form method="post" action="listeParticipants.php" id="utilisateur">
                    <div>
                        <label for="name" type="text" >Name</label>
                        <input name="name" type="text" required>
                    </div>
                    <div>
                        <label for="project" type="project" >Projet</label>
                        <input name="project" type="text" required>
                    </div>
                    <div>
                        <label for="email" type="email" >Email</label>
                        <input name="email" type="email" required>
                    </div>
                    <div>
                        <label for="groupeSize" type="groupeSize" >Taille du groupe</label>
                        <input name="groupeSize" type="text" required>
                    </div>
                    <div>
                        <button type="submit">Envoyer</button>
                    </div>
                </form>
            </div>
        </main>
        <?php include("footer.php")?>
    </body>
</html>