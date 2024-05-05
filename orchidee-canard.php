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