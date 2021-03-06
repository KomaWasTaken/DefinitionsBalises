<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Balise &lt;link&gt;</title>
</head>

<body>
<?php include '../include/header.php' ?>

    <section class="container-fluid color2 bgcolor4 ptb-50">
        <div class="container">
            <div class="row flex-column">
                <h2 class="fs-30">La balise &lt;link&gt;</h2>

                <p class="fs-15 col-12"> L'élément HTML <strong>&lt;link&gt;</strong> définit la relation entre le document courant et une ressource externe.
                    Cet élément peut être utilisé pour <strong>définir un lien</strong> vers une feuille de style ou un cadre de navigation (accéder à la même page dans une langue différente par exemple). <!--Description de la balise + ajout d'un exemple et image si possible-->
                    Il ne peut être inséré que dans &lt;head&gt;.
                </p>

                
                    <h5 class="fs-20">Exemples :</h5>
                <p class="fs-15 col-12">Pour associer une feuille de style à la page courante, on utilisera la syntaxe suivante :</p>
                    <div class="col-12">
                        <img src="../images/exemple_link.png" class="img-fluid" alt="Exemple de balise &lt;link&gt;"/>
                    </div>

                <p class="fs-15 col-12"> Pour un document, on peut indiquer plusieurs feuilles de style alternatives.
                    L'utilisateur pourra choisir parmi ces feuilles de style via le menu « Affichage > Style de la page ».
                    Ainsi, un utilisateur pourra voir différentes versions d'une même page.
                </p>
                <div class="col-12">                
                    <img src="../images/exemple_link2.png" class="img-fluid" alt="Exemple de balise &lt;link&gt;"/>
                </div>
            
                <aside class="fs-20">
                    <i>Source du texte : </i><a href="http://41mag.fr/liste-des-balises-html5/balise-a-html5-lien" target="_blank">41mag</a>
                </aside>
            </div>
        </div>
    </section>

<?php include '../include/footer.php' ?>
</body>
</html>