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
    $folder = 'img_dragosoc/'.$file_name;

    $query = mysqli_query($con, "INSERT INTO `photos_dragonnier-socotra` (file) VALUES ('$file_name')");

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
        <title>Flor'Insolite : Dragonnier de Socotra</title>
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
                <img src="images/dragosum.jpg" class="img-plant">
                <div class="plant-infos">
                    <h1>Dragonnier de Socotra</h1>
                    <ul class="plant-class">
                        <li></li><a class="nom_scientifique">Nom scientifique : Dracaena cinnabari</a></li>
                        <li></li><a class="famille">Famille : Asparagaceae</a></li>
                        <li></li><a class="genre">Genre : Dracaena</a></li>
                    </ul>
                    <div class="description">
                        <h3>Description</h3>
                        <p>
                            Dracaena cinnabari est l’un des rares arbres de l’île de Socotra. Il croît naturellement entre 150 et 1 600 m d'altitude, principalement vers 600 m dans des régions montagneuses fréquemment enveloppées de brouillards. 
                            Il produit de l’ombre, des fruits et de la fraicheur pour les animaux de l’île. Il offre un refuge pour les nids d’espèces d’oiseaux endémiques à l’île, comme la buse, le hibou petit-duc ou l’étourneau de Socotra. 
                            Dracaena cinnabari est une des espèces de dragonniers qui produit la résine appelée sang-dragon dont on se sert dans certaines médecines traditionnelles ou comme colorant.
                        </p>
                        <a class="source" href="https://fr.wikipedia.org/wiki/Dragonnier_de_Socotra">Source : Wikipédia</a>
                        <h3 class="loc">Localisation</h3>
                        <p>Île de Socotra</p>
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
            $res = mysqli_query($con, "SELECT * FROM `photos_dragonnier-socotra`");
            while($row = mysqli_fetch_assoc($res))
            {
            ?>
            <img src="img_dragosoc/<?php echo $row['file'] ?>">
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