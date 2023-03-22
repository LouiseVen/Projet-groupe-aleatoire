<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>PeopleMix - Participant·e·s</title>

</head>


<body>
    <?php include 'header.php';
    include 'addFields.html'; ?>

    <!--Tentative d'ajout de <inputs> -->


    <main>
        <div class="note note-success mb-3">
            <h3>Création de participants</h3>
            <p>Bonjour <?php echo $_POST["name"]; ?>, et bienvenue sur notre outil de création de groupe ! <br></p>
            <p>Veuillez rentrer les participant·e·s.</p>
        </div>

        <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            // request method is post
            // now handle the form data

            // declare name and email variables
            $name = $group = '';

            if (empty($_POST['nombreParticipants'])) {
                $nameError = 'Merci de remplir ce champs';
            } else {
                $name = trim(htmlspecialchars($_POST['name']));
            }

            if (empty($_POST['nombreGroupe'])) {
                $groupError = 'Merci de remplir ce champs';
            } else {
                $group = trim(htmlspecialchars($_POST['name']));
            }
        }
        ?>

        <div class="form">
            <!--Trouver comment multiplier le nombre d'input selon le nombre de participants-->
            <section class="formulaireParticipants">
                <?php
                if (isset($_POST['submit'])) {
                    header('Location: redirections.php');
                    exit;
                } else {
                ?>
                    <form method="post" action="resultatsRandom.php" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                        <h3>Participants</h3>

                        <!--Partie modifiée-->
                        <div>
                            <input type="text" id="nombreParticipants" name="nombreParticipants" value="" required>Nombre de participant·e·s : (max. 10)<br />
                            <span class="error"><?php if (isset($nameError)) echo $nameError ?></span>
                            <input type="button" class id="filldetails" value="Validez le nombre de participants" onclick="addFields()"></a>
                            <div id="container">
                            </div>
                            <div>
                                <label for='nombreGroupe'>Nombre de groupe</label>
                                <input type="number" name="nombreGroupe" id="nombreGroupe" required>
                            </div>
                            
                            <div>
                                <button type="submit" name="submit" id="submit">C'est parti ! </button>
                            </div>

                            <!--Fin-->
                    </form>

                <?php
                }
                ?>

        </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>