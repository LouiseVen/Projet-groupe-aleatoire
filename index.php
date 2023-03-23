<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <link href="style.css" rel="stylesheet" type="text/css" />
    <title>PeopleMix</title>
    <!-- MDB icon -->
    <link rel="icon" href="img/mdb-favicon.ico" type="image/x-icon" />
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css"
    />
    <!-- Google Fonts Roboto -->
    <link
      rel="stylesheet"
      href="https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;500;700;900&display=swap"
    />
    <!-- MDB -->
    <link rel="stylesheet" href="css/mdb.min.css" />
</head>

<body>
    <main class="box">
    <?php include("header.php");
    session_start(); ?>
        
        <div class="about">
            
        <div class="note note-info mb-3">
            <strong>A propos :</strong> Grâce à notre créateur de groupe aléatoire, vous pourrez rapidement et facilement faire des groupes entre vos étudiant·e·s, 
                et même choisir des filtres selon vos choix !
        </div>
        <section class="loader">

<div class="slider" style="--i:0">
</div>
<div class="slider" style="--i:1">
</div>
<div class="slider" style="--i:2">
</div>
<div class="slider" style="--i:3">
</div>
<div class="slider" style="--i:4">
</div>
</section>
  </div>
        <div class="form">
            <h3>Commencez à créer vos groupes dès maintenant !</h3>
            <form method="post" action="listeParticipants.php" id="utilisateur">
                <div class="container">
                    <label for="name" type="text">Nom</label>
                    <input name="name" type="text" required>
                    <i></i>
                </div>
                <div class="container">
                    <label for="project" type="project">Projet</label>
                    <input name="project" type="text" required>
                    <i></i>
                </div>
                <div class="container">
                    <label for="email" type="email">Email</label>
                    <input name="email" type="email" required>
                    <i></i>
                </div>
                <div>
                    <button type="submit">Envoyer</button>
                </div>

                </div>
            </form>
        
    </main>
    <?php include("footer.php") ?>
</body>

</html>