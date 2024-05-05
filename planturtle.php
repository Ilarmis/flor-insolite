<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Flor'Insolite : Pied d'éléphant</title>
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
                <img src="images/planturtle.jpg" class="img-plant">
                <div class="plant-infos">
                    <h1>Pied d'éléphant</h1>
                    <ul class="plant-class">
                        <li></li><a class="nom_scientifique">Nom scientifique : Dioscorea elephantipes</a></li>
                        <li></li><a class="famille">Famille : Dioscoreaceae</a></li>
                        <li></li><a class="genre">Genre : Dioscorea</a></li>
                    </ul>
                    <div class="description">
                        <h3>Description</h3>
                        <p>
                            Elle est surnommée Pied d'éléphant en raison de sa grosse tige tubéreuse, qui croît très lentement, mais peut atteindre une taille considérable, jusqu'à 3 m de circonférence et 1 m de hauteur. 
                            Elle est riche en amidon, d'où son autre surnom de Pain des Hottentots. Sur l'extérieur, elle est couverte de plaques d'écorces épaisses et dures. Elle développe des tiges grimpantes munies de feuilles qui tombent à la mauvaise saison.
                        </p>
                        <a class="source" href="https://fr.wikipedia.org/wiki/Dioscorea_elephantipes">Source : Wikipédia</a>
                        <h3 class="loc">Localisation</h3>
                        <p>Afrique du sud</p>
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