<?php
session_start();
if(!$_SESSION['pseudo'])
{
    header("Location: index.html");
}
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Flor'Insolite</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='main.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='main-responsive.css'>
    </head>
    <body>
        <nav class="navbar">
            <a href="#" class="logo">Flor'Insolite</a>
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
                    </li>
                    <li><a href="forum.html">Forum</a></li>                    
                </ul>
            </div>
            <img src="images/menu.png" alt="menu" class="menu">
        </nav>
        <div class="container">

            <h3 class="title">Retrouvez ici tout un tas de plantes complètement insolites !</h3>

            <div class="plant-container">

                <div class="plants" data-name="p-1">
                    <a href="euca_connected.php"><img src="images/eucarcenciel.jpg" alt=""></a>
                    <h3><a href="euca_connected.php">Eucalyptus Arc-en-ciel</a></h3>
                </div>

                <div class="plants" data-name="p-2">
                    <a href="orchiduck_connected.php"><img src="images/orchidée canard.jpg" alt=""></a>
                    <h3><a href="orchiduck_connected.php">Orchidée Canard</a></h3>
                </div>

                <div class="plants" data-name="p-3">
                    <a href="skele_connected.php"><img src="images/skeleflower.jpg" alt=""></a>
                    <h3><a href="skele_connected.php">Fleur Squelette</a></h3> 
                </div>

                <div class="plants" data-name="p-4">
                    <a href="dragosoc_connected.php"><img src="images/dragosum.jpg" alt=""></a> 
                    <h3><a href="dragosoc_connected.php">Dragonnier de Socotra</a></h3>
                </div>

                <div class="plants" data-name="p-5">
                    <a href="planturtle_connected.php"><img src="images/planturtle.jpg" alt=""></a>
                    <h3><a href="planturtle_connected.php">Pied d'éléphant</a></h3>
                </div>

            </div>

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