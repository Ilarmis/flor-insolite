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
    $folder = 'img_orchiduck/'.$file_name;

    $query = mysqli_query($con, "INSERT INTO `photos_orchidee-canard` (file) VALUES ('$file_name')");

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
        <title>Flor'Insolite : Orchidée Canard</title>
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
                    <li><a href="forum.html">Forum</a></li>                    
                </ul>
            </div>
            <img src="images/menu.png" alt="menu" class="menu">
        </nav>
        <div class="container">
            <div class="plant">
                <img src="images/orchidée canard.jpg" class="img-plant">
                <div class="plant-infos">
                    <h1>Orchidée Canard</h1>
                    <ul class="plant-class">
                        <li></li><a class="nom_scientifique">Nom scientifique : Caleana major</a></li>
                        <li></li><a class="famille">Famille : Orchidaceae</a></li>
                        <li></li><a class="genre">Genre : monotypique</a></li>
                    </ul>
                    <div class="description">
                        <h3>Description</h3>
                        <p>
                            C'est une orchidée de taille petite à moyenne, préférant le froid à la chaleur avec une seule feuille allongée de 12 cm de long, de couleur verte sur le dessus, rouge sur le dessous. 
                            Les fleurs sont portées par une hampe érigée avec inflorescence de 1 à 5 fleurs, de 15 à 40 cm de long, les fleurs font de 2 à 6,25 cm de diamètre. La floraison a lieu au printemps et en été. 
                            Cette espèce est nommée "orchidée canard volant" en raison de sa fleur. En effet elle ressemble à un canard en vol avec le pétale supérieur représentant la tête un bec bien visible.
                        </p>
                        <a class="source" href="https://fr.wikipedia.org/wiki/Caleana_major">Source : Wikipédia</a>
                        <h3 class="loc">Localisation</h3>
                        <p>Queensland, Nouvelle-Galles du Sud | Victoria | Tasmanie | Australie-Méridionale</p>
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
            $res = mysqli_query($con, "SELECT * FROM `photos_orchidee-canard`");
            while($row = mysqli_fetch_assoc($res))
            {
            ?>
            <img src="img_orchiduck/<?php echo $row['file'] ?>">
            <?php } ?>
    </body>
    <script>
        const menu = document.querySelector(".menu")
        const navLinks = document.querySelector(".nav-links")

        menu.addEventListener('click', ()=>{
            navLinks.classList.toggle('mobile-menu')
        })
    </script>
</html>