<?php include 'oeuvres.php'; ?>
<!doctype html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>

<body>

    <!-- L'en-tête -->
    <?php include 'header.php'; ?>
    <main>

        <?php
        // on récupere de l'URL l'id de l'oeuvre
        $identifiant = (int) $_GET['id'];
        // on parcourt le tableau des oeuvres 
        foreach ($oeuvres as $oeuvre) {
            // on cherche l'oeuvre avec la clé "identifiant"
            if ($identifiant === $oeuvre['identifiant']) {
                //on affiche l'oeuvre trouvée 
        ?>
                <article id="detail-oeuvre">
                    <div id="img-oeuvre">
                        <img src="<?php echo $oeuvre['image'] ?>" alt="<?php echo $oeuvre['titre'] ?>">
                    </div>
                    <div id="contenu-oeuvre">
                        <h1><?php echo $oeuvre['titre'] ?></h1>
                        <p class="description"><?php echo $oeuvre['description'] ?></p>
                        <p class="description-complete">
                            <?php echo $oeuvre['description-complete'] ?>
                        </p>
                    </div>
                </article>
        <?php break; // pour sortir de la boucle car oeuvre trouvée
            } // fin de if
        } // fin de foreach
        ?>
    </main>

    <!-- Le pied de page -->
    <?php include 'footer.php'; ?>

</body>

</html>