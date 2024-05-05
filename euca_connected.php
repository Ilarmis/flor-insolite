<?php
session_start();
if(!$_SESSION['pseudo'])
{
    header("Location: index.html");
}

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

if(isset($_POST['submit']))
{
    $file_name = $_FILES['image']['name'];
    $tempname = $_FILES['image']['tmp_name'];
    $folder = 'img_eucarcenciel/'.$file_name;

    $query = mysqli_query($con, "INSERT INTO `photos_eucalyptus-arc-en-ciel` (file) VALUES ('$file_name')");

    if(move_uploaded_file($tempname, $folder))
    {
        echo "<script> alert('Image postée'); </script>";
    }
    else
    {
        echo "<script> alert('Image non postée (erreur)'); </script>";
    }
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Flor'Insolite : Eucalyptus Arc-En-Ciel</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='plants.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='plants_responsive.css'>
    </head>
    <body>
        <nav class="navbar">
            <a href="index_connected.php" class="logo">Flor'Insolite</a>
            <div class="nav-links">
                <ul>                   
                    <li><a><input id="search" type="search" placeholder="Rechercher une plante"></a></li>
                    <li><a href="connect.php">
                    <li><a href="#"><?php echo $_SESSION['pseudo'] ?></a>
                        <ul class="sousmenu">
                            <?php
                            if($_SESSION['pseudo'] == "admin")
                            {?>
                                <li><a href="déconnexion.php">Déconnexion</a></li>
                                <li><a href="membres.php">Liste des membres</a></li>
                            <?php } 
                            else
                            {?>
                                <li><a href="déconnexion.php">Déconnexion</a></li>
                            <?php } ?>
                        </ul>
                    </li>
                    <li><a href="forum.html">Forum</a></li>                    
                </ul>
            </div>
            <img src="images/menu.png" alt="menu" class="menu">
        </nav>
        <div class="container">
            <div class="plant">
                <img src="images/eucarcenciel.jpg" class="img-plant">
                <div class="plant-infos">
                    <h1>Eucalyptus Arc-en-ciel</h1>
                    <ul class="plant-class">
                        <li></li><a class="nom_scientifique">Nom scientifique : Eucalyptus deglupta</a></li>
                        <li></li><a class="famille">Famille : Myrtaceae</a></li>
                        <li></li><a class="genre">Genre : Eucalyptus</a></li>
                    </ul>
                    <div class="description">
                        <h3>Description</h3>
                        <p>
                            Il peut mesurer jusqu'à 75 mètres de haut et a des fleurs blanches. Il supporte de nombreux types de sols mais préfère vivre dans les régions tropicales
                            humides. Il peut supporter le gel pendant de courtes périodes. L'arbre est aussi cultivé pour son tronc décoratif. En effet il perd en permanence son 
                            écorce lisse qui se détache en fins et longs lambeaux et qui change progressivement de couleur en vieillissant : d'abord d'un vert pâle, elle commence
                            par foncer avant de devenir bleue, violette puis orange et enfin marron ce qui explique le nom vernaculaire de l'arbre.
                        </p>
                        <a class="source" href="https://fr.wikipedia.org/wiki/Eucalyptus_deglupta">Source : Wikipédia</a>
                        <h3 class="loc">Localisation</h3>
                        <p>Mindanao, Philippines | Hawaï | Nouvelle-Bretagne | Nouvelle-Guinée | Céram | Célèbes | Polynésie française</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="images">
            <h3>Photos des membres : </h3>
            <form method="POST" enctype="multipart/form-data">
                <label for="image">Pour publier une photo : </label>
                <input type="file" name="image">
                <br><br>
                <button type="submit" name="submit">Envoyer</button>
            </form>
            <?php
            $res = mysqli_query($con, "SELECT * FROM `photos_eucalyptus-arc-en-ciel`");
            while($row = mysqli_fetch_assoc($res))
            {
            ?>
            <img src="img_eucarcenciel/<?php echo $row['file'] ?>">
            <?php } ?>
        </div>
    </body>
    <script>
        const menu = document.querySelector(".menu")
        const navLinks = document.querySelector(".nav-links")

        menu.addEventListener('click', ()=>{
            navLinks.classList.toggle('mobile-menu')
        })
    </script>
</html>
    