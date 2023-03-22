<?php
session_start();
include 'header.php';

$option = $_SESSION['selectbox'] = $_POST['selectbox'];
$studentCount = $_SESSION['nombreParticipants'] = $_POST['nombreParticipants'];
$groupCount = $_SESSION['nombreGroupe'] = $_POST['nombreGroupe'];
$students = $_SESSION['students'] = $_POST['students'];



if (isset($option)) {
    echo "truc";
    var_dump($option);

    switch ($option) {
        case 'Joker':
            echo "option1";
            echo "truc";
?> <h3>Combien de participants à ne pas mettre dans le même groupe ?</h3>
            <form method="POST" action="resultats.php">
                <div>
                    <label for="1">Participant·e 1</label>
                    <input type="text" name="excludedStudent[]" id="student1">
                    <label for="2">Participant·e 2</label>
                    <input type="text" name="excludedStudent[]" id="student2">
                </div>
                <div>
                    <button type="submit">Valider</button>
                </div>
                    
            </form><?php
            break;
        case 'Hasard complet':
            echo "option2";
            echo "truc";
            header("Location: resultats.php");
            exit();
            break;
            }
        }
        ?>



