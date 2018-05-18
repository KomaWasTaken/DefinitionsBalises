<?php
require "connexion.php";

$message = '';

if (isset($_POST['buttonSubmit']) && ($_SERVER["REQUEST_METHOD"] == "POST"))
{
    
    
    if (isset($_POST['sexe']) && !empty($_POST['nom']) && !empty($_POST['prenom']) && isset($_POST['mail']) && isset($_POST['num']) && isset($_POST['message'])) 
    {
        $sql = $connexion->prepare(
                    "INSERT INTO contactform (
                        con_gender, 
                        con_firstName, 
                        con_lastName, 
                        con_email, 
                        con_phoneNumber, 
                        con_message
                    ) VALUES (
                        :con_gender, 
                        :con_firstName, 
                        :con_lastName, 
                        :con_email, 
                        :con_phoneNumber, 
                        :con_message)"
        );

        $sql->bindValue(':con_gender', $_POST['sexe'], PDO::PARAM_STR);
        $sql->bindValue(':con_firstName', $_POST['prenom'], PDO::PARAM_STR);
        $sql->bindValue(':con_lastName', $_POST['nom'], PDO::PARAM_STR);
        $sql->bindValue(':con_email', $_POST['mail'], PDO::PARAM_STR);
        $sql->bindValue(':con_phoneNumber', $_POST['num'], PDO::PARAM_STR);
        $sql->bindValue(':con_message', $_POST['message'], PDO::PARAM_STR);
        
        $sql->execute();

        $message = '<p class="color2 ft-biter ft-20 txtaligncenter">Merci, nous ferons bon usage de vos données</p>';

    }
    else {
        $message = '<p class="color1 ft-biter ft-20 txtaligncenter">Merci de remplir correctement tous les champs</p>';
        return false;
    }

}