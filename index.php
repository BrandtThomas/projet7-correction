<?php include "datas/data.php"; ?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cinéma</title>
    <link rel="stylesheet" href="styles/style.css">
</head>

<body>
    <section class="container">
        <!-- div parent display flex  -->
        <div class="cards">
            <?php
                foreach ($tab as $key) { ?>
                        <div class="card">
                            <h2><?= $key["nom"]; ?></h2>
                            <img class="affiche" src="<?= $key["img"]; ?>" alt="">
                            <p><b>Réalisateur : </b><?= $key["realisateur"]; ?></p>
                            <p><b>Date de sortie : </b><?= $key["date"]; ?></p>
                            <p><b>Durée : </b><?php echo ($key["duree"])/60; ?> heures</p>
                            <p><b>Genre : </b><?= $key["genre"]; ?></p>
                            <p><?= $key["synopsis"]; ?></p>
                            <?php echo $key["bandeAnnonce"]; ?>
                    </div>
                <?php }

            ?>


            
            
            
        </div>
    </section>
</body>
</html>