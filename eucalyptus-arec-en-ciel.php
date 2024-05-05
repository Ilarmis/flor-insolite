<!DOCTYPE html>
<html>
    <head>
        <meta charset='utf-8'>
        <meta http-equiv='X-UA-Compatible' content='IE=edge'>
        <title>Flor'Insolite : Eucalyptus Arc-En-Ciel</title>
        <meta name='viewport' content='width=device-width, initial-scale=1'>
        <link rel='stylesheet' type='text/css' media='screen' href='eucalyptus-arec-en-ciel.css'>
        <link rel='stylesheet' type='text/css' media='screen' href='eucalytpus-arec-en-ciel-responsive.css'>
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
            <h3>Photos des membres :</h3>
            <p>
                Connectez-vous pour publier vos propres photos !
            </p>
            <a href="connect.php" class="btn">Connexion</a>
        </div>
        <!--<a href="index.html"><img id="back" src="images/back.png"></a>
        <a id="back_text" href="index.html">Retour</a>
        <p id="title">Eucalyptus arc-en-ciel</p>
        <img src="images/rainbow eucalyptus.jpg">
        <div class="nom_scientifique">
            <a>Nom scientifique : </a>
            <a id="nom_sctf">Eucalyptus deglupta</a>
        </div>
        <div class="famille">
            <a>Famille : </a>
            <a id="nom_fam">Myrtaceae</a>
        </div>
        <div class="genre">
            <a>Genre : </a>
            <a id="gnr">Eucalyptus</a>
        </div>
        <div class="description">
            <a id="title">Description</a>
            <a id="descr_text">Il peut mesurer jusqu'à 75 mètres de haut et a des fleurs blanches. Il supporte de nombreux types de sols mais préfère vivre dans les régions tropicales <br> 
                humides. Il peut supporter le gel pendant de courtes périodes.L'arbre est aussi cultivé pour son tronc décoratif. En effet il perd en permanence son <br>
                écorce lisse qui se détache en fins et longs lambeaux et qui change progressivement de couleur en vieillissant : d'abord d'un vert pâle, elle commence<br> 
                par foncer avant de devenir bleue, violette puis orange et enfin marron ce qui explique le nom vernaculaire de l'arbre. </a>
        </div>
        <div class="source">
            <a id="txt">Source : </a>
            <a id="src" href="https://fr.wikipedia.org/wiki/Eucalyptus_deglupta">Wikipédia</a>
        </div>
        <div class="localisation">
            <a id="loc">Localisation</a>
            <a id="loc_txt">Mindanao, Philippines | Hawaï | Nouvelle-Bretagne | Nouvelle-Guinée | Céram | Célèbes | Polynésie française</a>
        </div>
        <div class="photos">
            <a id="phot">Photos de la communauté</a>
            <a id="cadre">Bientôt vous pourrez poster ici vos propres photos du spécimen en question ! (uniquement pour les utilisateurs ayant un compte)</a>
        </div>
        <div class="end">
            <a>e</a>
        </div>-->
    </body>
    <script>
        const menu = document.querySelector(".menu")
        const navLinks = document.querySelector(".nav-links")

        menu.addEventListener('click', ()=>{
            navLinks.classList.toggle('mobile-menu')
        })
    </script>
</html>
    