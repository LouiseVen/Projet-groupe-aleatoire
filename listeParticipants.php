<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>PeopleMix - Participant·e·s</title>
</head>


<body>
    <?php include 'header.php'; ?>

    <main>
        <section class="introduction">
            <h2>Création de participants</h2>
            <p>Bonjour <?php echo $_POST["name"]; ?>, et bienvenue sur notre outil de création de groupe ! <br></p>
            <p>Veuillez rentrer les participant·e·s.</p>
        </section>

        /*Trouver comment multiplier le nombre d'input selon le nombre de participants*/
        <section class="formulaireParticipants">
            <form method="post" action="resultats.php">
                <h3>Participants</h3>
                <div>
                    <label for="name">Nom du formulaire</label>
                    <input type="text" name="name" id="name" required>
                </div>
                <div>
                    <button type="submit" name="submit" value="submit">Envoyer</button>
                </div>

            </form>
        </section>
    </main>

    <?php include 'footer.php';?>
</body>

</html>