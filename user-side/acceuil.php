<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Include Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" />

    <style>
        body {
            font-family: 'Arial', sans-serif;
            margin: 0;
            padding: 0;
        }

        .navbar {
            background-color: #333;
            overflow: hidden;
            padding: 15px; /* Ajout de padding pour harmoniser avec la page d'ajout */
            text-align: right; /* Align text to the right */
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

        .text-right {
            text-align: right;
        }
    </style>
</head>
<body>

<div class="navbar">
    <a href="#">Accueil</a>
    <a href="ajouter.php">Ajouter</a>
    <a href="supp.php">Supprime</a>
    <a href="affichearticle.php">Afficher </a>
    <a href="modife.html">modifier </a>
    <a href="recherche.html">rechercher</a>
    <a href="listeuser.php">liste users</a>
</div>

<div class="container">

</div>

<div class="footer">
    <div class="contact-icons text-center">
        <p class="contact-line"><i class="fas fa-phone"></i>Contact Us: # ( +71 7569834142 )&nbsp;&nbsp;</p>
        <p class="contact-line"><i class="far fa-envelope"></i>Email: honey@gmail.com</p>
        <p><i class="fas fa-map-marker-alt"></i>Address: 104 New York, US</p>
    </div>
</div>

</body>
</html>
