<!--
    créer cette nouvelle page php 
    elle doit s'appeler index.php 
    attention cette page php est la page d'accueil de site !!!
    il ne faut appeler la page d'accueil de votre site
    accueil.php / Accueil.php / Index.php 

    La page Par défaut de votre site === page d'accueil du site
    doit OBLIGATOIREMENT s'appeler index.php 
    respecter bien le fait que toutes les lettres doivent être écrites en minuscule 
-->

<!-- 
    design sour forme de texte => transformer en html / PHP / (css bonus) dans la page  index.php  

    zone principale deux class container + accueil 

        zone de menu 

        section  class presentation 
            grande image  600 x 600 
            div 
                h1 5 mots
                4 paragraphes contenant 15 mots 

        section  class contacter
            div 
                h2 > nous contacter 
                liste 
                    tel
                    email 
                    adresse
            div
                google map => adresse de votre choix 
        
        footer
            copyright - année en cours - Prénom
-->

<?php require "lib.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link href="style.css" rel="stylesheet"> 
</head>
<body>
    <div class="container accueil">
        <?php require "menu.php"; ?>
        <section class="presentation">
            <?php  genererPresentation( "Présentation" , 8 ) ?>
        </section>
        <section class="contacter">
            <div>
                <?php genererContact($cordonnees) ?>
            </div>
            <div>
                <?php require "google-map.php" ?>
            </div>
        </section>
        <?php require "footer.php" ?>
    </div>
</body>
</html>
<!-- google => phpBB / ?? tchat ????
    créer une nouvelle page presentation.php 
    div principale ayant les class container presentation
        menu

        section class cv
            h2 > Compétences
            p   > voici la liste de mes compétences
            liste
                HTML
                CSS
                Javascript
                PHP
                Wordpress 

            h2 > expérience
            p   > liste de mes expériences professionnelles 
            5 articles
                h3 titre
                img > logo
                ul
                    2 items 

        section class formulaire

            formulaire de contact 
                prenom
                tel
                email
                textarea
                bouton 
        footer
-->
<!-- 
Android => JAVA / Kotlin 
iOS => Swift C# 
-->
