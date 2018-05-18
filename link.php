<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Link</title>
</head>

<body>
<?php include 'nav.php' ?>

    <section>
            <h2>La balise &lt;link&gt;</h2>

            <p> L'élément HTML <strong>&lt;link&gt;</strong> définit la relation entre le document courant et une ressource externe.
                Cet élément peut être utilisé pour <strong>définir un lien</strong> vers une feuille de style ou un cadre de navigation (accéder à la même page dans une langue différente par exemple). <!--Description de la balise + ajout d'un exemple et image si possible-->
                Il ne peut être inséré que dans &lt;head&gt;.
            </p>

            <p>
                <u>Exemples :</u>
                Pour associer une feuille de style à la page courante, on utilisera la syntaxe suivante :
                    <img src="images/exemple_link.png" alt="Exemple de balise &lt;link&gt;"/>

                Pour un document, on peut indiquer plusieurs feuilles de style alternatives.

                L'utilisateur pourra choisir parmi ces feuilles de style via le menu « Affichage > Style de la page ».
                Ainsi, un utilisateur pourra voir différentes versions d'une même page.
                    <img src="images/exemple_link2.png" alt="Exemple de balise &lt;link&gt;"/>
            </p>
        
        <aside>
            <i>Source du texte :  </i><a href="http://41mag.fr/liste-des-balises-html5/balise-a-html5-lien" target="_blank">41mag.fr</a>
        </aside>
    </section>

<?php include 'footer.php' ?>
</body>
</html>