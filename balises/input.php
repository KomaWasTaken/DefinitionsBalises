<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Input</title>
</head>

<body>
    <?php include '../include/header.php' ?>

    <section>
            <h2>La balise &lt;input&gt;</h2>

            <p>La balise <strong>&lt;input&gt;</strong> fait partie des éléments composant un <a href="form.html">formulaire</a> et permet à un utilisateur d'effectuer des <strong>saisies de données</strong> pouvant être échangées avec le serveur.
                Il propose un nombre importants de types différents, allant de la saisie de texte à la validation ou au reset de formulaire en passant par l'affichage de cases à cocher ou de boutons radio.
                Pour insérer cette zone de texte, il faut utiliser la balise &lt;input /&gt; et donner un nom à la zone de texte, qui servira au PHP de reconnaître d'où viennent les informations.
            
                <u>Exemple :</u>
            </p>
            <img src="images/input1.png" alt="Formulaire avec une zone de texte">
            <p>
                Afin de savoir ce que le visiteur doit écrire dans le champ créé, il faut utiliser la balise <strong>&lt;label&gt; &lt;/label&gt;</strong> et le lier à la zone de texte.
                Pour cela, il faut lui donner un attribut for qui a la même valeur que l'id du champ.
                <u>Exemple :</u>
            </p>
            <img src="images/input2.png" alt="Exemple avec label">
            <p>
                Elle peut prendre la valeur d'une zone de mot de passe où on ne voit pas les caractères saisies à l'écran. Pour l'utiliser, il faut utiliser l'attribut type="password".
                <u>Exemple :</u>
            </p>
            <img src="images/input3.png" alt="Exemple pour mot de passe">
            <img src="images/input4.png" alt="Rendu visuel zone mot de passe">
            <p>
                Pour demander de saisir un e-mail, il suffit simplement de mettre la valeur email à type
                <u>Exemple :</u>
            </p>
            <img src="images/input5.png" alt="Exemple pour e-mail">
            <img src="images/input6.png" alt="REndu visuel zone e-mail">
            <p>Pour plus d'exemple, voir source.</p>
                
        <aside>
            <p><i>Source :</i> <a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3/les-formulaires-8" target="_blank">OpenClassRoom</a></p>
        </aside>  
    </section>

<?php include '../include/footer.php' ?>
</body>
</html>