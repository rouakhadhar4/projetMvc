<?php
require_once('../controllers/articleController.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idArticle = $_POST['idArticle'];
    $nom = $_POST['nom'];
    $description = $_POST['description'];
    $image = $_POST['image'];
    $prix = $_POST['prix'];
    $qtestock = $_POST['qtestock'];

    $controller = new articleController();
    $rowCount = $controller-> modifierArticle(new article($idArticle, $nom, $description, $image, $prix, $qtestock));

    if ($rowCount > 0) {
        echo "Article modifié avec succès.";
    } else {
        echo "Erreur lors de la modification de l'article.";
    }
}
?>
