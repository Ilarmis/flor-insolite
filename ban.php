<?php
session_start();
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

if(isset($_GET['id']) && !empty($_GET['id']))
{
    $getID = $_GET['id'];
    $getUsers = mysqli_query($con, "SELECT * FROM `membres` WHERE id = '$getID'");
    $row = mysqli_fetch_assoc($getUsers);
    if($row > 0)
    {
        $banUser = mysqli_query($con, "DELETE FROM `membres` WHERE id='$getID'");
        header("Location: membres.php");
    }
    else
    {
        echo "Aucun membre n'a été trouvé";
    }
}
else
{
    echo "L'identifiant n'a pas été récupéré";
}