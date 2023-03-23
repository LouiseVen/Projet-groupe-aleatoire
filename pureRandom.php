<!DOCTYPE html>
<?php
$nombreParticipants = $_SESSION['nombreParticipants'] = $_GET['nombreParticipants'];
$filtre = $_SESSION['selectbox'] = $_GET['selectbox'];
?>

<form method="post" action="shuffle.php" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
    <h3>Participants</h3>

    <!--Partie modifiée-->
    <div>
        <?php
        for ($i=0;$i<$nombreParticipants;$i++) {
            echo "<label for='students'>Participant " . $i+1 . "</label><input type='text' name='students' id='students' required>";
        }
        ?>
        </div>
        <div>
            <label for='nombreGroupe'>Nombre de groupes</label>
            <input type="number" name="nombreGroupe" id="nombreGroupe" required>
        </div>

        <div>
            <button type="submit" name="submit" id="submit">C'est parti ! </button>
        </div>

        <!--Fin-->
</form>