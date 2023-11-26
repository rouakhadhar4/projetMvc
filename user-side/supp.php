<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
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
        }

        .navbar a {
            float: none;
            display: inline-block;
            color: white;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
        }

        .navbar a:hover {
            background-color: #ddd;
            color: black;
        }

        form {
            background-color: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            width: 400px; /* Largeur fixe */
            margin: 30px auto;
            text-align: left;
        }

        label {
            display: block;
            margin-bottom: 15px;
            color: #333;
            font-size: 18px;
        }

        input {
            width: 100%;
            padding: 12px;
            margin-bottom: 20px;
            box-sizing: border-box;
            border: 1px solid #ccc;
            border-radius: 4px;
            font-size: 16px;
        }

        input[type="submit"],
        input[type="reset"] {
            background-color: #4caf50;
            color: white;
            cursor: pointer;
            border: none;
            padding: 12px 20px;
            border-radius: 4px;
            font-size: 18px;
            transition: background-color 0.3s;
        }

        input[type="submit"]:hover,
        input[type="reset"]:hover {
            background-color: #45a049;
        }

        .footer {
            background-color: #333;
            color: white;
            text-align: center;
            padding: 20px;
            position: fixed;
            bottom: 0;
            width: 100%;
            white-space: nowrap;
        }

        .footer p {
            margin: 10px 0;
            display: inline-block;
        }

        .contact-icons {
            text-align: center;
        }

        .contact-icons p {
            margin-bottom: 10px;
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
        <a href="ajouter.php">Ajouter </a>
        <a href="supp.php">Supprimer </a>
        <a href="affichearticle.php">Afficher </a>
        <a href="modife.html">Modifier </a>
        <a href="recherche.html">Rechercher </a>
        <a href="listeuser.php">liste users</a>
    </div>

    <form action="suppaction.php" method="post">
        <label for="articleId">ID Article à supprimer:</label>
        <input type="text" id="articleId" name="i">

        <div style="text-align: center;">
            <input type="submit" value="Supprimer">
            <input type="reset" value="Annuler">
        </div>
    </form>

    <div class="footer">
        <div class="contact-icons">
            <p><i class="fas fa-phone"></i>Contact Us: # ( +71 7569834142 )</p>
            <p><i class="far fa-envelope"></i>Email: honey@gmail.com</p>
            <p><i class="fas fa-map-marker-alt"></i>Address: 104 New York, US</p>
        </div>
    </div>

</body>
</html>
