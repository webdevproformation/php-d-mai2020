
<!-- 
    créer un nouveau fichier :
    windows http://localhost/17-if.php => c:\xampp\htdocs\17-if.php
    MacOS http://localhost:8888/17-if.php => /Application/MAMP/htdocs/17-if.php
    Linux http://localhost/php/17-if.php => /var/www/html/php/17-if.php
-->


<?php
    // maintenant que nous avons vu les conditions => boolean
    // on va les utiliser dans un script php 
    // hier je vous ai présenté un premier exemple d'utiliser => connexion à si internet (formulaire)
    // dans le formulaire deux champs login / mot de passe 
    // si les deux valeurs sont conformes à ce qui attendu => alors on est connecté 

    $loginBdd = "mail@yahoo.fr" ;
    $mdpBdd = "azerty";

    // if(){}
    // formulaire en html > input
    // if(condition => true){
        // alors on exectué les instructions dans les accolades du if
    // }

    if( $loginBdd == "mail@yahoo.fr" && $mdpBdd == "azerty"){
        echo "Bonjour Monsieur X";
        echo "<br>";
        echo "vous êtes connecté !";
    }

    // présenter un peu les formulaires pour ce soir ! 
    
    // créer une nouvelle page php 
    //windows http://localhost/18-exo.php => c:\xampp\htdocs\18-exo.php
    //MacOS http://localhost:8888/18-exo.php => /Application/MAMP/htdocs/18-exo.php
    //Linux http://localhost/php/18-exo.php => /var/www/html/php/18-exo.php

    // => ce fichier contient une variable $a 
    // contient la comparaison suivante 20 > 3 && ( 44 < 5 || 34 > 5 )  
    // si $a est vrai alors afficher le texte suivant dans le navigateur
    // la condition est respectée !
?>