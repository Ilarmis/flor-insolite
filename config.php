<?php

session_start();

if(isset($_POST['envoie']))
{   
    $host = 'localhost';
    $utilisateur = 'root';
    $mot_passe = '';
    $nom_bd = "flor'insolite";
    $connexion = new PDO ("mysql:host=$host;dbname=$nom_bd",$utilisateur,$mot_passe) ;

    $pseudo = $_POST['pseudo'];
    $mdp = $_POST['mdp'];

    $erreur = "";

    if(!empty($_POST['pseudo']) && !empty($_POST['mdp']))
    {
        $req = $connexion->prepare("SELECT * FROM membres WHERE pseudo=? AND mdp=?");
        $req->execute(array($pseudo, $mdp));
        $num_ligne = $req->rowCount();
        if($num_ligne == 1)
        {
            header("Location: index_connected.php");
            $_SESSION['pseudo'] = $pseudo;
            if($_POST['pseudo'] == "admin" && $_POST['mdp'] == "admin")
            {
                $_SESSION['pseudo'] = "admin";
            }
        }
        else
        {
            $erreur = "Pseudo ou mot de passe incorrects !";
        }
    }
    else
    {
        $erreur = "Veuillez compléter les champs !";
    }
}

if(isset($_POST['sign_up']))
{
    header("Location: sign_up.php");
}