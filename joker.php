
<?php
$nombreParticipants = $_SESSION['nombreParticipants'] = $_GET['nombreParticipants'];
$filtre = $_SESSION['selectbox'] = $_GET['selectbox'];
?>

<form method="post" action="resultats.php" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h3>Participants</h3>

    <!--Partie modifiée-->
    <div>
        <?php
        for ($i=0;$i<$nombreParticipants;$i++) {
            echo "<label for='participant'>Participant " . $i+1 . "</label><input type='text' name='participant' id='participant' required>";
        }
        ?>
        </div>
        <div>
            <label for='nombreGroupe'>Nombre de groupes</label>
            <input type="number" name="nombreGroupe" id="nombreGroupe" required>
        </div>
        <div>
            <h3>Les deux participants qui ne peuvent pas être dans le même groupe :</h3>
            <label  for="excludedStudent">Participant·e 1</label>
            <input type="text" name="excludedStudent" id="excludedStudent" required>
            <label for="excludedStudent">Participant·e 2</label>
            <input type="text" name="excludedStudent" id="excludedStudent" required>
        </div>


        <div>
            <button type="submit" name="submit" id="submit">C'est parti ! </button>
        </div>

        <!--Fin-->
</form>