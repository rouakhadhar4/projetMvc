
<?php
include_once('../models/Article.php');
include_once('../database/config.php');

class ArticleController extends Connexion
{
    function __construct()
    {
        parent::__construct();
    }

    function insert(Article $c)
    {
        $query = "INSERT INTO article (idArticle, nom, description, image, prix, qtestock) VALUES (?, ?, ?, ?, ?, ?)";
        $res = $this->pdo->prepare($query);

        $array = array($c->getIdArticle(), $c->getNom(), $c->getDescription(), $c->getImage(), $c->getPrix(), $c->getQtStock());
        return $res->execute($array);
    }

    function getArticle($id)
    {
        $query = "SELECT * FROM article WHERE idArticle = ?";
        $res = $this->pdo->prepare($query);
        $res->execute(array($id));
        $array = $res->fetch();
        return $array;
    }

    function delete($idArticle)
    {
        $query = "DELETE FROM article WHERE idArticle=?";
        $res = $this->pdo->prepare($query);
        return $res->execute(array($idArticle));
    }

    function liste()
    {
        $query = "SELECT * FROM article";
        $res = $this->pdo->prepare($query);
        $res->execute();
        return $res;
    }

    function modifierArticle(Article $c)
    {
        $sql = "UPDATE article SET nom=?, description=?, image=?, prix=?, qtestock=? WHERE idArticle=?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute(array($c->getNom(), $c->getDescription(), $c->getImage(), $c->getPrix(), $c->getQtStock(), $c->getIdArticle()));

        return $stmt->rowCount(); // Ajouter cette ligne pour retourner le nombre de lignes affectées
    }

    public function recherche($category, $value)
    {
        try {
            $query = "SELECT * FROM article WHERE $category = :value";
            $stmt = $this->pdo->prepare($query);
            $stmt->bindParam(':value', $value);
            $stmt->execute();

            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            echo "Erreur de base de données : " . $e->getMessage();
            return false;
        }
    }
  

 // Ajoutez un paramètre $orderBy à la fonction liste_id
function liste_id($orderBy = '') {
    $query = "SELECT * FROM article $orderBy";
    $res = $this->pdo->prepare($query);
    $res->execute();
    return $res;
    
}


// ...

}
?>
