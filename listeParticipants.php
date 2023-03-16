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
            var number = document.getElementById("nameStudent").value;
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
        <section class="introduction">
            <h2>Création de participants</h2>
            <p>Bonjour <?php echo $_POST["name"]; ?>, et bienvenue sur notre outil de création de groupe ! <br></p>
            <p>Veuillez rentrer les participant·e·s.</p>
        </section>

        <!--Trouver comment multiplier le nombre d'input selon le nombre de participants-->
        <section class="formulaireParticipants">
            <form method="post" action="resultats.php">
                <h3>Participants</h3>

               <!--Partie modifiée-->
                <div> 
                    <input type="text" id="nameStudent" name="NameStudent" value="">Nombre de participant·e·s : (max. 10)<br />
                    <input type="button" class id="filldetails" value="Validez le nombre de participants" onclick="addFields()"></a>
                    <div id="container">
                </div>
                <div>
                    <label for ='nombreGroupe'>Nombre de groupe</label>
                    <input type="number" name="nombreGroupe" id="nombreGroupe">
                </div>
                <div>
                    <button type="submit" name="submit">C'est parti ! </button>
                </div>
                <!--Fin-->
            </form>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>

</html>