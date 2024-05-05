<?php
include("config.php");
?>

<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Connexion Flor'Insolite</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" type="text/css" media="screen" href="connect.css">
        <link rel="stylesheet" type="text/css" media="screen" href="connect-responsive.css">
    </head>
    <body>
        <nav class="navbar">
            <a href="index.html" class="logo">Flor'Insolite</a>
            <div class="nav-links">
                <ul>                   
                    <li><a><input id="search" type="search" placeholder="Rechercher une plante"></a></li>
                    <li><a href="connect.php">Connexion</a></li>
                    <li><a href="forum.html">Forum</a></li>                    
                </ul>
            </div>
            <img src="images/menu.png" alt="menu" class="menu">
        </nav>
        <div class="connect">
            <section>
                <h1>Connexion</h1>
                <?php
                if(isset($erreur))
                {
                    echo "<p class='erreur'>$erreur</p>";
                }
                ?>
                <form action="" method="POST">
                    <label>Pseudo :</label>
                    <input type="text" name="pseudo" placeholder="Entrez votre pseudo">
                    <label>Mot de passe :</label>
                    <input type="password" name="mdp" placeholder="Entrez votre mot de passe">
                    <input type="submit" value="Valider" name="envoie">
                    <input type="submit" value="Créer un compte" name="sign_up">
                </form>
            </section>
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