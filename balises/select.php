<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Balise &lt;select&gt;</title>
</head>
<body>
    <?php include "../include/header.php" ?>

<section>
    <h2>La balise &lt;select&gt;</h2>
    <p>
        La balise &lt;select&gt; permet de choisir une option dans une liste.
        Elle est complétée en HTML 5 par la balise menu qui est plus spécialisée pour un menu contextuel ou une barre d'outil.
        Tous les éléments HTML peuvent insérer un select sauf &lt;a&gt; et &lt;button&gt;.
    </p>
    <h5>La syntaxe de base est :</h5>
    <img src="../images/select1.jpg" alt="Exemple 1 - balise select">
    <p>On peut regrouper les options avec des balises optgroup :</p>
    <img src="../images/select2.jpg" alt="Exemple 2 - balise select">
    <h5>La balise &lt;select&gt; possède comme attributs :</h5>
    <p>
        form, prenant comme valeur ID, l'ID du formulaire auquel associer la balise select.
        disabled, prenant comme valeur [disabled]/rien, indiquant l'Etat désactivé ou non.
        length, prenant comme valeur un entier, indiquant le nombre d'options dans la liste.
    </p>
    <h5>Exemple :</h5>
    <select size="6" >
        <optgroup label="groupe1">
            <option>Alpha</option>
            <option>Beta</option>
        </optgroup>
        <optgroup label="groupe2">
            <option>Un</option>
            <option>Deux</option>
        </optgroup>
    </select>

    <h5>Correspondant au code suivant :</h5>
    <img src="../images/select3.jpg" alt="Exemple 3 - balise select">
    <aside>
        <a href="https://www.xul.fr/html5/select.php">Source obtenue sur W3C.</a>
    </aside>
</section>

    <?php include "../include/footer.php" ?>
</body>
</html>