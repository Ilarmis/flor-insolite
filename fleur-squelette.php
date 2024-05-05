<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Flor'Insolite : Fleur squelette</title>
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
                <img src="images/skeleflower.jpg" class="img-plant">
                <div class="plant-infos">
                    <h1>Fleur Squelette</h1>
                    <ul class="plant-class">
                        <li></li><a class="nom_scientifique">Nom scientifique : Diphylleia grayi</a></li>
                        <li></li><a class="famille">Famille : Berberidaceae</a></li>
                        <li></li><a class="genre">Genre : Diphylleia</a></li>
                    </ul>
                    <div class="description">
                        <h3>Description</h3>
                        <p>
                            Diphylleia grayi, également connue sous le nom de « fleur squelette », a la particularité de voir ses pétales devenir transparents lorsqu'il pleut. Ceux-ci redeviennent blancs une fois secs.
                        </p>
                        <a class="source" href="https://fr.wikipedia.org/wiki/Diphylleia">Source : Wikipédia</a>
                        <h3 class="loc">Localisation</h3>
                        <p>Appalaches, Amérique du Nord | Chine | Japon</p>
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