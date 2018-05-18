<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Balise &lt;img&gt;</title>
</head>

<body>
    <?php include '../include/header.php' ?>

    <section class="container ptb-50">
        <div class="row flex-column">
            <h2 class="fs-30">La balise &lt;img&gt;</h2>
            <p class="fs-15">La balise <strong>&lt;img&gt;</strong> est une <strong>balise orphelines</strong> utilisée pour insérer une image.
            Elle doit comporter deux attributs qui sont :</p>
            <ol class="fs-15">
                <li>src : L'emplacement de l'image par rapport à la page HTML.</li>
                <li>alt : Une description écrite de l'image si celle-ci ne se charge pas.</li>
            </ol>
            <h5 class="fs-20">Exemple :</h5>   
            <p class="fs-15">
                &lt;img src="avatar.jpg" alt="Avatar blond avec des lunettes"&gt;
            </p>
                        
            <img src="../images/avatar.jpg" alt="Avatar blond avec des lunettes">
            <p class="fs-15">
                Attention : Si l'image se trouve dans un dossier enfant il faut écrire le chemin : dossier/image.jpg.
                Si l'image se trouve dans un dossier parent il faut écrire : ../image.jpg.
            </p>
            
            <aside>
                <i>Sources : </i> <a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3/les-images-18" target="_blank">OpenClassRoom</a>
            </aside>
        </div>
    </section>

    <?php include '../include/footer.php' ?>
</body>
</html>