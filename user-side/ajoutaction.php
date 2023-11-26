<?php
require_once('../controllers/articleController.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $idArticle = $_POST['i'];
    $nom = $_POST['no'];
    $description = $_POST['de'];
    $image = $_POST['image'];
    $prix = $_POST['p'];
    $qtestock = $_POST['q'];

    $controller = new articleController();
    $article = new article($idArticle, $nom, $description, $image, $prix, $qtestock);
    
    $controller->insert($article);
}
?>

