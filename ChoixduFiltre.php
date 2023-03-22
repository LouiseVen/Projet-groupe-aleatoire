<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="style.css">
        <title>Choix</title>
    </head>

    <body>
        <?php
        include 'header.php';
        ?>

        <h2>Choissez le type de filtre que vous souhaitez utiliser</h2>
        <form action="listeParticipants.php" method="post">
            <select name="selectbox" id="selectbox">
                <option value="1">Hasard complet</option>
                <option value="2">Joker</option>
                <option value="3">Pondéré</option>
            </select>
        </form>
    </body>
</html>