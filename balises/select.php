<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Balise &lt;select&gt;</title>
</head>
<body>
    <?php include "../include/header.php" ?>

<section class="container-fluid bgcolor4 ptb-50">
    <div class="container">
        <div class="row flex-column">
            <h2 class="fs-30 col-12 no-padding">La balise &lt;select&gt;</h2>
            <p class="fs-15 col-12 no-padding">
                La balise &lt;select&gt; permet de choisir une option dans une liste.
                Elle est complétée en HTML 5 par la balise menu qui est plus spécialisée pour un menu contextuel ou une barre d'outil.
                Tous les éléments HTML peuvent insérer un select sauf &lt;a&gt; et &lt;button&gt;.
            </p>
            <div class="col-12 mt-20 no-padding">
                <h5 class="fs-20 col-12 no-padding">La syntaxe de base est :</h5>
                <img class="img-fluid" src="../images/select1.jpg" alt="Exemple 1 - balise select">
            </div>
            <div class="col-12 mt-20 no-padding">
                <h5 class="fs-20 col-12 no-padding">On peut regrouper les options avec des balises optgroup :</h5>
                <img class="img-fluid" src="../images/select2.jpg" alt="Exemple 2 - balise select">
            </div>
            <div class="col-12 mt-20 no-padding">
                <h5 class="fs-20 col-12 no-padding">La balise &lt;select&gt; possède comme attributs :</h5>
                <p class="fs-15 col-12 no-padding">
                    form, prenant comme valeur ID, l'ID du formulaire auquel associer la balise select.
                    disabled, prenant comme valeur [disabled]/rien, indiquant l'Etat désactivé ou non.
                    length, prenant comme valeur un entier, indiquant le nombre d'options dans la liste.
                </p>
            </div>
            <div class="col-12 mt-20 no-padding">
                <h5 class="fs-20 col-12 no-padding">Exemple :</h5>
                    <select class="col-12" size="6">
                        <optgroup label="groupe1">
                            <option>Alpha</option>
                            <option>Beta</option>
                        </optgroup>
                        <optgroup label="groupe2">
                            <option>Un</option>
                            <option>Deux</option>
                        </optgroup>
                    </select>
            </div>
            <div class="col-12 mt-20 no-padding">
                <h5 class="fs-20 col-12 no-padding">Correspondant au code suivant :</h5>
                <img class="img-fluid" src="../images/select3.jpg" alt="Exemple 3 - balise select">
            </div>
            <aside class="col-12 mt-20 fs-20 no-padding">
                <i>Sources : </i><a href="https://www.xul.fr/html5/select.php">W3C</a>
            </aside>
        </div>
    </div>
</section>

    <?php include "../include/footer.php" ?>
</body>
</html>