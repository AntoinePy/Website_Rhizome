<?php

// destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
$destinataire = 'lareponseestdansletableau@gmail.com';


// on teste si le formulaire a été soumis
if (isset($_POST['envoi']))
{
    // formulaire envoyé, on récupère tous les champs.
    $nom   = (isset($_POST['email']));
    $message = (isset($_POST['message']));
    $email = 'Escape Game Courbet';
    if (($email != '') && ($message != ''))
    {
        $destinataire = $_POST['email'];
// Pour les champs $expediteur / $copie / $destinataire, séparer par une virgule s'il y a plusieurs adresses
        $expediteur = $nom;
        $objet = $_POST['subject'];
        $headers  = 'MIME-Version: 1.0' . "\n"; // Version MIME
        $headers .= 'Content-type: text/html; charset=ISO-8859-1'."\n"; // l'en-tete Content-type pour le format HTML
        $headers .= 'Reply-To: '.$expediteur."\n"; // Mail de reponse
        $headers .= 'From: "Nom_de_expediteur"<'.$expediteur.'>'."\n"; // Expediteur
        $headers .= 'Delivered-to: '.$destinataire."\n"; // Destinataire
        $message = '<div style="width: 100%; text-align: center; font-weight: bold"> Bonjour'.$_POST['name'].'! \n'.$_POST['message'].'</div>';

        if (mail($destinataire, 'Escape Game Courbet', $message, $headers)) // Envoi du message
        {
            echo 'Votre message a bien été envoyé ';
        }
        else // Non envoyé
        {
            echo "Votre message n'a pas pu être envoyé";
        }
    }
}; // fin du if (!isset($_POST['envoi']))
?>