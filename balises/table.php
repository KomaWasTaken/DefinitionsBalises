<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Balise &lt;table&gt;</title>
</head>
<body>

    <?php include '../include/header.php' ?>
    <section class="container-fluid ptb-50">
        <div class="container">
            <div class="row flex-column">
                <h2 class="fs-30">La balise &lt;table&gt;</h2>

                <p class="fs-15"> 
                    La balise <strong>&lt;table&gt;</strong> est de type bloc et permet d'<strong>indiquer le début et la fin d'une table.</strong>
                    Deux balises sont importantes à retenir :
                </p>
                    <ul class="fs-15">
                        <li>&lt;tr&gt; &lt;/tr&gt; : Indique la début et la fin d'une ligne.</li>
                        <li>&lt;td&gt; &lt;/td&gt; : Indique la début et la fin du contenu d'une cellule.</li>
                    </ul>
                <p class="fs-15">
                    Un tableau se construit ligne par ligne. Dans chacune des lignes &lt;tr&gt;, on indique le contenu des cellules &lt;td&gt;.
                    <h5 class="fs-20">Exemple :</h5>
                </p>
                <div class="col-12">
                    <img class="img-fluid" src="../images/tab1.png" alt="exemple de balise du tableau">
                    <img class="img-fluid" src="../images/tab2.png" alt="Résultat visuel du tableau">
                </div>        
                
                <p class="fs-15">
                    Il est évidemment possible et conseillé d'arranger le visuel grâce aux borders avec CSS.
                    Une ligne d'en-tête peut être créée en remplaçant la balise &lt;td&gt; par la balise &lt;th&gt; .
                </p>
                <div class="col-12">
                    <img class="img-fluid" src="../images/tab3.png" alt="Exemple de balise th">
                    <img class="img-fluid" src="../images/tab4.png" alt="Résultat visuel de la balise th">
                </div>
                
                <p class="fs-15">Pour ajouter un titre au tableau comme ci-dessus, il suffit d'utiliser la balise &lt;caption&gt; qui se splace au tout début du tableau.</p>
            
                <aside class="fs-20 mt-20">
                    <i>Sources :</i> <a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3/les-tableaux-1" target="_blank">OpenClassRoom</a>
                </aside>
            </div>
        </div>
    </section>

    <?php include '../include/footer.php' ?>  
</body>
</html>