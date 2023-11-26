<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
            padding: 15px;
            text-align: right;
            color: white;
        }

        .navbar a {
            display: inline-block;
            color: white;
            text-decoration: none;
            padding: 14px 16px;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        table {
            border-collapse: collapse;
            width: 80%; /* Réduire la largeur de la table à 80% de la largeur de la page */
            margin: 20px auto;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #4caf50;
            color: white;
        }

        img.responsive-image {
            max-width: 100%; /* Les images ne dépasseront pas la largeur de leur conteneur parent */
            height: auto;
            display: block; /* Supprimer l'espace sous les images */
            margin: 0 auto; /* Centrer les images */
        }

        .image-column {
            width: 20%; /* Ajuster la colonne d'image à 20% de la largeur de la table */
        }

        .common-footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
            white-space: nowrap;
        }

        .contact-icons {
            text-align: center;
        }

        .contact-icons p {
            margin-bottom: 10px;
            display: inline-block;
            margin-right: 20px;
        }

        .contact-icons i {
            margin-right: 10px;
            font-size: 20px;
        }
    </style>
</head>
<body>

    <div class="navbar">
        <a href="acceuil.php">Accueil</a>
        <a href="ajouter.php">Ajouter</a>
        <a href="supp.php">Supprimer </a>
        <a href="affichearticle.php">Afficher</a>
        <a href="modife.html">Modifier </a>
        <a href="recherche.html">Rechercher </a>
        <a href="listeuser.php">liste users</a>
    </div>

    <?php
    require_once('../controllers/articleController.php');
    $controller = new articleController();
    $res = $controller->liste_id('ORDER BY idArticle');

    if ($res) {
        echo "<table>";
        echo "<tr><th>ID Article</th><th>Nom</th><th>Description</th><th class='image-column'>Image</th><th>Prix</th><th>Quantité en Stock</th></tr>";

        while ($l = $res->fetch(PDO::FETCH_ASSOC)) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($l['idArticle']) . "</td>";
            echo "<td>" . htmlspecialchars($l['nom']) . "</td>";
            echo "<td>" . htmlspecialchars($l['description']) . "</td>";
            echo "<td class='image-column'><img class='responsive-image' src='images/" . htmlspecialchars($l['image']) . "' alt='Image'></td>";
            echo "<td>" . htmlspecialchars($l['prix']) . "</td>";
            echo "<td>" . htmlspecialchars($l['qtestock']) . "</td>";
            echo "</tr>";
        }

        echo "</table>";
    } else {
        echo "Problème lors de l'exécution de la requête.";
    }
    ?>

   
</body>
</html>
