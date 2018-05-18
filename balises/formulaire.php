<?php require 'post_contact.php'?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.0/css/bootstrap.min.css" integrity="sha384-9gVQ4dYFwwWSjIDZnLEWnxCjeSWFphJiwGPXr1jddIhOegiu1FwO5qRGvFXOdJZ4" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="stylesheet" href="../css/style.css">
    <title>Formulaire de contact</title>
</head>

<body>
<?php include '../include/header.php'; ?>
    <section class="container-fluid ptb-50 bgcolor4">
    <div class="container">
        <div class="row flex-column">
            <div>
                <h2 class="fs-30">Contactez-nous</h2>
                <p class="fs-15">Vous pouvez remplir ce formulaire de contact pour poser vos questions si l'une de nos définitions
                        n'est pas optimisée pour vous ou si vous voulez plus d'information sur celle-ci.
                </p>
            </div>
    
            <form name="form" method="POST" action="<?php echo htmlentities($_SERVER['PHP_SELF']) ?>">
            <div>
                <div class="fs-15">
                    <label for="homme">Homme</label>
                    <input type="radio" id="homme" name="sexe" value="masculin" required>
                    <label for="femme">Femme</label>
                    <input type="radio" id="femme" name="sexe" value="feminin"> 
                </div>
          
                <div class="flex justify-content-between flex-wrap fs-15">
                    <div>
                        <input type="text" id="input_nom" name="nom" placeholder="Nom" required>
                    </div>
    
                    <div>
                        <input type="text" id="input_prenom" name="prenom" placeholder="Prénom" required>
                    </div>
    
                    <div>
                        <input type="text" id="input_mail" name="mail" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="exemple@mail.com" required>
                    </div>
    
                    <div>
                        <input type="text" id="input_num" name="num" placeholder="0612345678" pattern="^(?:0|\(?\+33\)?\s?|0033\s?)[1-79](?:[\.\-\s]?\d\d){4}$" required>
                    </div>
                </div>
    
                    <textarea id="input_msg" name="message" placeholder="Votre message" required></textarea>
                    <div >
                      
                        <?php echo $message ?>
            </div>

                    <div>
                        <div>
                            <label class="fs-15" for="cgu">J'accepte les CGU :</label>
                            <input class="fs-15" type="checkbox" id="input_cgu" name="cgu" required>                                               
                        </div>
                        <input type="submit" id="formSubmit" value="Envoyer" name="buttonSubmit">
                    </div>
                </div>
            </form>
            <div class="fs-15" id="result"></div>
        </div>   
    </div>  
    </section>

<?php include '../include/footer.php'; ?>
</body>
</html>