<body>
        <?php include 'header.php'; ?>

        <?php
        $nombreParticipants = $_SESSION['nombreParticipants'] = $_GET['nombreParticipants'];
        $filtre = $_SESSION['selectbox'] = $_GET['selectbox'];
        ?>

<div class="form">

            <h3>Le projet sera composé de : </h3>

            <form method="post" action="resultats.php" id="utilisateur">
                <?php for($i=1 ; $i < $nombreParticipants ; $i++)
                    { echo ' 
                        <div class="container">
                            <label for="name" type="text">Prénom :</label>
                            <input name="name" type="text" required>
                            <i></i>
                        </div>

                        <div class="container">
                            <label for="project" type="project">Note :</label>
                            <input type="radio" name="level" value="1" required>1 
                            <input type="radio" name="level" value="2"required>2
                            <input type="radio" name="level" value="3"required>3
                            <input type="radio" name="level" value="4"required>4
                            <input type="radio" name="level" value="5"required>5   
                        </div>
                    ';}
                ?>
               
                
                <div>
                    <button type="submit">Envoyer</button>
                </div>


            </form>
</div>
           

        <?php include('footer.php'); ?>
</body>
</html>