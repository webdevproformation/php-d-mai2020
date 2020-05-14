<!-- 
    // créer une nouvelle page php 
    //windows http://localhost/19-if-elseif-else.php => c:\xampp\htdocs\19-if-elseif-else.php 
    //MacOS http://localhost:8888/19-if-elseif-else.php => /Application/MAMP/htdocs/19-if-elseif-else.php 
    //Linux http://localhost/php/19-if-elseif-else.php  => /var/www/html/php/19-if-elseif-else.php 
-->

<?php 
    // il peut arriver que l'on soit obligé d'effectuer plusieurs test sur une variable 

    // est que l'utilisateur qui s'est connecté est le gestionnaire du site => admin 
    // utilisateur  rédacteur 
    // utilisateur  traducteur
    // sinon il est internaute 

    $role = "traducteur" ;
    // "traducteur" == "admin" => NON false
    if($role == "admin"){
        // false 
        echo "<p>Vous avez accés à tous les menus du site : créer / supprimer tous les articles</p>";
    }
    else if($role == "rédacteur"){
        // "traducteur" == "rédacteur" NON
        //     false 
        echo "<p>Vous pouvez uniquement créer / supprimer vos articles </p>";
    }
    else if($role == "traducteur"){
        // "traducteur" == "traducteur" OUI
        //          true 
        echo "<p>Vous pouvez uniquement traduire des articles (pas possible de créer de nouveaux articles / ou de supprimer)<p>";
    } else {
        echo "<p>vous ne pouvez que lire des articles</p>";
    }
    // la suite ici 
    // dès qu'une condition est vrai => on exécute les instructions dans les accolades 
    // et on sort de ce bloc de code

    // else s'exécute si tous les conditions précédentes sont false
    // réponse par défaut 
?>

<!-- 
    // créer une nouvelle page php 
    //windows http://localhost/20-exo.php => c:\xampp\htdocs\20-exo.php
    //MacOS http://localhost:8888/20-exo.php => /Application/MAMP/htdocs/20-exo.php 
    //Linux http://localhost/php/20-exo.php  => /var/www/html/php/20-exo.php 

    $age = 20 ;

    si la variable age inférieure à 18, écrire dans le navigateur vous êtes mineur
    si la variable age inférieure à 30, écrire dans le navigateur vous êtes un jeune adulte
    si la variable age inférieure à 70, écrire dans le navigateur vous êtes un adulte
    sinon écrire dans le navigateur vous êtes un retraité !

    Chef de projet => acquérir des connaissances et de la culture générale (savoir ce que se passe derrière Wordpress / Prestashop )

    DAM
    => objectif pour moi (Malik) donner le maximum d'informations en PHP pour que vous soyez dans les meilleures conditions les semaines prochaines => 
    SQL / MySQL => 3 jours (il faut travailler par soi même - dans le site internet de Doranco e learning )
    PHP OO => (il faut pratiquer / rechercher par soi même sur internet ) 
    digérer et affiner / consolider vos connaissances => pratique par soi même 
    donner des clés de compréhension 
    ... d'autres manières en PHP ... 
-->