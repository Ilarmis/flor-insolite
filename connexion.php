<?php

if(isset($_POST['envoie_sign_up']))
{
    $host = 'localhost';
    $utilisateur = 'root';
    $mot_passe = '';
    $nom_bd = "flor'insolite";

    $con = new mysqli($host, $utilisateur, $mot_passe, $nom_bd);

    if($con->connect_error)
    {
        die("Connection failed".$con->connect_error);
    }
    echo "";
}