<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="style.css">
    <title>PeopleMix - Participant·e·s</title>

</head>


<body>
    <?php include 'header.php'; ?>

    <!--Tentative d'ajout de <inputs> -->
    <script type='text/javascript'>
        function addFields() {
            // Generate a dynamic number of inputs
            var number = document.getElementById("nombreParticipants").value;
            // Get the element where the inputs will be added to
            var container = document.getElementById("container");
            // Remove every children it had before
            while (container.hasChildNodes()) {
                container.removeChild(container.lastChild);
            }
            for (i = 0; i < number; i++) {
                // Append a node with a random text
                container.appendChild(document.createTextNode("Elève " + (i + 1)));
                // Create an <input> element, set its type and name attributes
                var input = document.createElement("input");
                input.type = "text";
                input.name = `students[${i}]`;
                container.appendChild(input);
                // Append a line break 
                container.appendChild(document.createElement("br"));
            }
        }
    </script>

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
            <form method="post" action="resultats.php" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
                <h3>Participants</h3>

               <!--Partie modifiée-->
                <div> 
                    <input type="text" id="nombreParticipants" name="nombreParticipants" value="" required>Nombre de participant·e·s : (max. 10)<br />
                    <span class="error"><?php if (isset ($nameError)) echo $nameError?></span>
                    <input type="button" class id="filldetails" value="Validez le nombre de participants" onclick="addFields()"></a>
                    <div id="container">
                </div>
                <div>
                    <label for ='nombreGroupe'>Nombre de groupe</label>
                    <input type="number" name="nombreGroupe" id="nombreGroupe" required>
                </div>
                <div>
                    <button type="submit" name="submit">C'est parti ! </button>
                </div>
                <!--Fin-->
            </form>
        </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>
