<?php
include 'header.php';

$option = $_POST['selectbox'];



if (isset($option)) {
    echo "truc";
    var_dump($option);

    switch ($option) {
        case '1':
            echo "option1";
            echo "truc";
            header("Location: listeParticipantsRandom.php");
            exit();
            break;
        case '2':
            echo "option2";
            echo "truc";
            
            header("Location: listeParticipantsJoker.php");
            break;
            }
        }
        ?>



