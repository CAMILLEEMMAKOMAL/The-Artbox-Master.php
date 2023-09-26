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

    <?php include('header.php'); ?>
    <?php include('oeuvres.php');?>
    <?php 

// echo"==================="; 
// echo $oeuvres[14]['title'];
// for ($lines = 0; $lines <= 14; $lines++) {
//     echo $oeuvres[$lines]['title'];
// }
// echo"==================="; 


// // Dans "oeuvres.php", vous devez extraire l'identifiant de l'œuvre à partir de l'URL. Pour cela, utilisez la superglobale $_GET pour obtenir la valeur du paramètre "id"
// $id_oeuvre = isset($_GET['id']) ? $_GET['id'] : null;



// // vérifie si l'élément associé à l'identifiant
// if (isset($oeuvres[$id_oeuvre])) { 
//     // existe dans le tableau i la condition est vraie, cela signifie que l'œuvre a été trouvée 
//     // dans le tableau
//     $oeuvre = $oeuvres[$id_oeuvre];
//     echo "<h1>" . $oeuvre['titre'] . "</h1>";
//     echo "<p>" . $oeuvre['description'] . "</p>";
//     // Affichez les autres détails de l'œuvre ici
// } else {
//     echo "Œuvre non trouvée.";
// }

?>
    <main>

    <!-- générer du contenu pour 15 éléments, pour afficher des œuvres. -->
        <div id="liste-oeuvres">
            <?php for ($lines = 0; $lines <= 14; $lines++)

/

// liste d'œuvres avec des liens vers des pages individuelles pour chaque œuvre
             {
    echo" <article class=\"oeuvre\">";
    echo " <a href=\"oeuvre.php?id=".$oeuvres[$lines]["id"]."\">";
    echo "    <img src=\"".$oeuvres[$lines]["img"]."\" alt=\"Dodomu\">";
    echo "    <h2>".$oeuvres[$lines]["title"]."</h2>";
    echo "    <p class=\"description\">".$oeuvres[$lines]["description"]."</p>";
    echo " </a>";
 echo "</article>";
}
 
            ?>
          
        
        </div>
    </main>
    <?php include('footer.php'); ?>
</body>
</html>