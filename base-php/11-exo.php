<!--
    créer un nouveau fichier php
    windows http://localhost/11-exo.php => c:\xampp\htdocs\11-exo.php
    MacOS http://localhost:8888/11-exo.php => /Application/MAMP/htdocs/11-exo.php
    Linux http://localhost/php/11-exo.php => /var/www/html/php/11-exo.php
    
    2 ce fichier contient trois variables
    titre = "M"
    prenom = "John"
    nom = "Doe"

    3 écrire la phrase suivante dans le navigateur en utilisant les 3 variables:

    Je m'appelle Monsieur John Doe

-->

<?php 
    $titre = "M";
    $prenom = "John" ;
    $nom = "Doe";

    echo "je m'appelle " . $titre . "onsieur " . $prenom . " " . $nom ;
    echo "<br>";
    // autre syntaxe possible 
    echo "je m'appelle $titre onsieur $prenom $nom"; // possibilité de ne pas utiliser les . 
    // possibilité de mettre tous les variables et les chaine de caractères dans une seule paire de double quote

    // pour remplir l'internaute se connecte
    // remplir un formulaire => login / mot de passe 
    // Valider 
    // vérifier login / mot de passe  
        // si ok => $_SESSION (super global) via la base de données (stockée)
        // $_SESSION["prenom"] = "Malik" ;
        // $_SESSION["nom"] = "HARRIZ" ;
        // dans la mémoire RAM du serveur tout le long de ta navigation
        // si ko => crée pas de valeur 
    
    /*<p><?php echo $_SESSION["prenom"] . " " .$_SESSION["nom"] ; ?> </p> */
    // 100% PHP et html 

    // super globale => variables spéciale qui sont créées automatiquement par PHP
    // js => automatique crée l'objet window

    // variable globale => utiliser n'importe où dans le code source PHP // ressources 
    // $_GET 
    // $_POST 
    // $_SERVER 
    // $_SESSION
    // $_GLOBAL

    // catalogues 10 000 produits 
    // livraison / paiement / SAV / gestion des stocks
    // taux de change / langue / .... 
    // => shopify (créer ton site internet clé en main )
    // => CMS Prestashop / Magento / Wordpress WooCommerce / osCommerce 
    // => coder toi même ton site ecommerce en PHP 
    // => Prévoyer un budget de 1000 € / an  // 400€ / an
    // => site ecommerce PROFESSIONNEL == c'est hélas payant  mini : 400€ / an
    // wikipedia + CMS ecommerce
    // contrat = !!!! 
    // NON 

    // module de réservation : véhicule / salle de réunion (super sujet de développeur HTML / PHP / CSS / JS / SQL)

    // système de backoffice => générer un site internet  (super sujet de développeur HTML / PHP / CSS / JS / SQL)

    // ecommerce => très haut niveau 
?>

<!--
    créer un nouveau fichier php
    windows http://localhost/12-concatenation-suite.php => c:\xampp\htdocs\12-concatenation-suite.php
    MacOS http://localhost:8888/12-concatenation-suite.php => /Application/MAMP/htdocs/12-concatenation-suite.php
    Linux http://localhost/php/12-concatenation-suite.php => /var/www/html/php/12-concatenation-suite.php
    
-->
