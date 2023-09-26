<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/style.css">
    <title>The ArtBox</title>
</head>
<body>
<header>
    <a href="index.html"><img src="img/logo.png" alt="Logo Artbox" id="logo"></a>
    <nav>
        <ul>
            <li><a href="index.html">Accueil</a></li>
        </ul>
    </nav>
</header>
<main>

    <?php
// récupère l'identifiant d'œuvre depuis l'URL
$id = $_GET['id'];

echo $id
?>


    <article id="detail-oeuvre">
        <div id="img-oeuvre">
            <img src="img/steve-johnson-6.png" alt="Blast from the past">
        </div>
        <div id="contenu-oeuvre">
          <?php  
          
include("oeuvres.php");
          echo " <h1>".$oeuvres[$id]["title"]."<h1>";
          echo "<img src='" .$oeuvres[$id]['img']. "' alt='" . $oeuvres[$id]['title'] . "'>";
          echo "<p>description : " . $oeuvres[$id]['description'] . "</p>";
          echo "<p>description-complète : " . $oeuvres[$id]['description_complet'] . "</p>";
          
          ?>



            <p class="description">Juliette Baskerville</p>
            <p class="description-complete">
                Nunc fermentum purus dapibus justo fermentum auctor. Maecenas non tincidunt leo. 
                Morbi vitae iaculis sem. Donec quis scelerisque massa. Fusce quis accumsan diam, 
                et interdum lectus. Suspendisse mattis pulvinar vehicula. Duis nisi.
            </p>
        </div>
    </article>
</main>
<footer>
    <p>
        <strong>© THE ARTBOX</strong> - <em>Tous droits réservés</em>
    </p>
</footer>
</body>
</html>