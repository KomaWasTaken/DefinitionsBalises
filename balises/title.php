<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Title</title>
</head>

<body>
    <?php include '../include/header.php' ?>

    <section class="container-fluid color2 bgcolor4 ptb-50">
        <div class="container">
            <div class=" row flex-column">
            <h2 class="fs-30">La balise &lt;title&gt;</h2>

            <p class="fs-15 col-12">
                L'élément &lt;title&gt; définit le titre du document (qui est affiché dans la barre de titre du navigateur ou dans l'onglet de la page).
                Cet élément ne peut contenir que du texte, les balises qu'il contiendrait seraient ignorées.
            </p>
            
            <h5 class="fs-20">Exemple :</h5>
            <p class="fs-15 col-12">&lt;title&gt;Et voici le titre de ma page !&lt;/title&gt;</p>
                
            <p class="fs-15 col-12">Le fait de renseigner et d’optimiser la balise title est indispensable car cela joue un grand rôle dans le domaine du référencement naturel.
            Etant unique, la balise title est considérée logiquement par Google et par les autres moteur comme un élément pertinent et significatif pour déterminer la thématique principale d’une page. 
            La balise title est probablement un des critères de référencement on-page ayant le plus de poids.
            Un mot clé a d’autant plus de poids comme balise titre lorsqu’il figure seul ou en début de balise.
            </p>

        <aside class="fs-20">
            <i>Sources : </i><a href="https://developer.mozilla.org/fr/docs/Web/HTML/Element/title" target="_blank">Mozilla</a>
            <a href="https://www.definitions-marketing.com/definition/balise-title/" target="_blank">Définitions-marketing</a>
        </aside>
        </div>
    </section>

    <?php include '../include/footer.php' ?>
</body>
</html>