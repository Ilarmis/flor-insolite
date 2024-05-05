<?php

session_start();

include("connexion.php");

if(isset($_POST['envoie_sign_up']))
{
    $pseudo = $_POST['pseudo'];
    $email = $_POST['email'];
    $mdp = $_POST['mdp'];
    $valide_mdp = $_POST['valide_mdp'];
    $erreur = "";

    if(! filter_var($_POST["email"], FILTER_VALIDATE_EMAIL))
    {
        $erreur = "Adresse mail non valide !";
    }

    if(!empty($_POST['pseudo']) && !empty($_POST['email']) && !empty($_POST['mdp']) && !empty($_POST['valide_mdp']))
    {
        $sql = "SELECT * FROM `membres` WHERE pseudo='$pseudo' AND email='$email' AND mdp='$mdp'";
        $result = mysqli_query($con, $sql);
        $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
        $count = mysqli_num_rows($result);
        if($count == 0)
        {
            if($mdp == $valide_mdp)
            {
                $sql = "INSERT INTO `membres`(pseudo, email, mdp) VALUES('$pseudo', '$email', '$mdp')";
                $result = mysqli_query($con, $sql);
                header("Location: index_connected.php");
                $_SESSION['pseudo'] = $pseudo;
            }
        }
        else
        { 
            if($count == 1)
            {
                $erreur = "L'utilisateur existe déjà !";
            }
        }
    }
    else
    {
        $erreur = "Veuillez compléter les champs !";
    }
}

if(isset($_POST['connect']))
{
    header("Location: connect.php");
}