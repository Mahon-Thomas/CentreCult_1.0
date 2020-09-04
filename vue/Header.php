<!doctype html>
<html lang="fr" class="no-js">

    <head>
        <meta charset="utf-8">
        <title>CentreCult</title> 
        <link rel="shortcut icon" href="./image/c.png">
        <meta name="description" content="Projet CentreCult">
        <link href="https://fonts.googleapis.com/css2?family=Lobster&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="./style/style.css">
    </head>

    <body>

    <section class="content-main">

        <nav class="menu">
            <img src="./image/c.png" width="100px"/><h1>entreCult </h1>
            
        </nav>

        

        <hr>
        <?php

            if(isset($_SESSION['userId'])){
                $login = $_SESSION['userId'][0][1];
                echo "<div class='btn'>";
                echo "<b>Vous êtes connecté en tant que ".$login." !</b>";
                echo "<a class='logout' href='index.php?action=Deconnexion'><b>Deconnexion <img src='./image/logout.png' width='20px'/></b></a>";
                echo "</div>";
            }
        ?>