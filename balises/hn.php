<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Balise &lt;hn&gt;</title>
</head>
<body>
    <?php include "../include/header.php" ?>

<section class="container-fluid bgcolor4 ptb-50">
    <div class="container">
        <div class="row flex-column">
            <h2 class="fs-30 col-12">La balise &lt;hn&gt;</h2>
            <p class="fs-15 col-12">
                Dans une page web, tout les titres sont construit entre des balises &lt;hn&gt; (h = heading en anglais),
                n étant un chiffre de 1 à 6 et ont ces 2 principales caractéristiques :
            </p>
            <p class="fs-15 col-12">
                Le référencement ! Il est très important car il est souvent constitué de différent mot clé de votre contenu qui suit, les moteurs de recherche, recherche toutes les informations les plus importante de votre page ( Google accorderait plus de poids aux mots clés et expression apparaissant dans votre titre qu'au reste du contenu )
                L'ergonomie ! Cela fait bel et bien partit de la fluidité du site en général. Le titre résume sur quel sujet votre contenu va se porter, donc l'utilisateur sera beaucoup plus rapide pour faire ces recherches.
                Il existe 6 niveaux de titrage possibles : h1, h2, h3, h4, h5 et h6. h1 étant un titre de premier niveau, h2 un titre de second niveau, h3, un titre de troisième niveau etc... Il est important d'être cohérent sur l'importance de vos titres.
            </p>
            <h5 class="fs-20 col-12">Voici l'exemple d'un titre :</h5>
            
            <h1 class="col-12">Voici un exemple de titre h1</h1>
            <h2 class="col-12">Voici un exemple de titre h2</h2>
            <h3 class="col-12">Voici un exemple de titre h3</h3>
            <h4 class="col-12">Voici un exemple de titre h4</h4>
            <h5 class="col-12">Voici un exemple de titre h5</h5>
            <h6 class="col-12">Voici un exemple de titre h6</h6>

            <aside class="col-12 fs-20 mt-20">
                <i>Sources : </i><a href="https://www.yakaferci.com/balises-h1-h2/">Yakaferci</a>
            </aside>
        </div>
    </div>
</section>

    <?php include "../include/footer.php" ?>
</body>
</html>