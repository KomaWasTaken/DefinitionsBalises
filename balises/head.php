<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Balise &lt;head&gt;</title>
</head>

<body>
    <?php include '../include/header.php'; ?>

    <section class="container-fluid color2 bgcolor4 ptb-50">
    <div class="container">
    <div class="row">            

        <h2 class="fs-30">La balise &lt;head&gt;</h2>
        <p class="fs-15 col-12"> 

            La balise &lt;head&gt; contient tous les éléments de l'en-tête de votre document.
            L'en-tête du document doit contenir un titre, peut contenir des scripts, balises meta, styles etc ...
        </p> 
        <h5 class="fs-20">On peut trouver dans une balise &lt;head&gt; :</h5>
        <ul class="fs-15 col-12">
            La balise &lt;head&gt; prend en charge tous les attributs standards en HTML5 :
            <li>&lt;title&gt;</li>
            <li>&lt;style&gt;</li>
            <li>&lt;base&gt;</li>
            <li>&lt;link&gt;</li>
            <li>&lt;meta&gt;</li>
            <li>&lt;script&gt;</li>       
        </ul>
        
        <h5 class="fs-20">Exemple :</h5>
        <div class="col-12">
            <img class="img-fluid" src="../images/head.jpg" alt="Exemple d'utilisation d'une balise head"/>
        </div>
        <aside class="fs-20 mt-20">
            <i>Sources : </i><a href="http://41mag.fr/liste-des-balises-html5/balise-head-html5" target="_blank">41mag</a>
        </aside>

    </section>

    <?php include '../include/footer.php'; ?>

</body>
</html>