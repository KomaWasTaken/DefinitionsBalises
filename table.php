<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css" />
    <link rel="icon" type="image/png" href="images/favicon-16x16.png" sizes="16x16" />
    <title>Table</title>
</head>
<body>

    <?php include 'nav.php' ?>
    <section>
            <h2>La balise &lt;table&gt;</h2>

            <p> 
                La balise <strong>&lt;table&gt;</strong> est de type bloc et permet d'<strong>indiquer le début et la fin d'une table.</strong>
                Deux balises sont importantes à retenir :
            </p>
                <ul>
                    <li>&lt;tr&gt; &lt;/tr&gt; : Indique la début et la fin d'une ligne.</li>
                    <li>&lt;td&gt; &lt;/td&gt; : Indique la début et la fin du contenu d'une cellule.</li>
                </ul>
            <p>
                Un tableau se construit ligne par ligne. Dans chacune des lignes &lt;tr&gt;, on indique le contenu des cellules &lt;td&gt;.
                <u>Exemple :</u>
            </p>        
            <img src="images/tab1.png" alt="exemple de balise du tableau">
            <img src="images/tab2.png" alt="Résultat visuel du tableau">
            <p>
                Il est évidemment possible et conseillé d'arranger le visuel grâce aux borders avec CSS.
                Une ligne d'en-tête peut être créée en remplaçant la balise &lt;td&gt; par la balise &lt;th&gt; .
            </p>
            <img src="images/tab3.png" alt="Exemple de balise th">
            <img src="images/tab4.png" alt="Résultat visuel de la balise th">
            <p>
                Pour ajouter un titre au tableau comme ci-dessus, il suffit d'utiliser la balise &lt;caption&gt; qui se splace au tout début du tableau.
            </p>
        
        <aside>
            <i>Sources :</i> <a href="https://openclassrooms.com/courses/apprenez-a-creer-votre-site-web-avec-html5-et-css3/les-tableaux-1" target="_blank">OpenClassRoom</a>
        </aside>
    </section>

    <?php include 'footer.php' ?>  
</body>
</html>