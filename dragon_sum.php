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
            <a href="index.html" class="logo">Flor'Insolite</a>
            <div class="nav-links">
                <ul>                   
                    <li><a><input id="search" type="search" placeholder="Rechercher une plante"></a></li>
                    <li><a href="connect.php">Connexion</li>
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
            <h3>Photos des membres :</h3>
            <p>
                Connectez-vous pour publier vos propres photos !
            </p>
            <a href="connect.php" class="btn">Connexion</a>
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