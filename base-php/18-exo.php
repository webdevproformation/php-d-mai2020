<!--
    // créer une nouvelle page php 
    //windows http://localhost/18-exo.php => c:\xampp\htdocs\18-exo.php
    //MacOS http://localhost:8888/18-exo.php => /Application/MAMP/htdocs/18-exo.php
    //Linux http://localhost/php/18-exo.php => /var/www/html/php/18-exo.php

    // => ce fichier contient une variable $a 
    // contient la comparaison suivante 20 > 3 && ( 44 < 5 || 34 > 5 )  
    // si $a est vrai alors afficher le texte suivant dans le navigateur
    // la condition est respectée !
-->
<?php
    $a = 20 > 3 && (44 < 4 || 34 > 5);
    //   true   && ( false ||  true ) 
    //    true  &&     true
    //          true

    if( $a == true ){
        echo "<p>la condition est respectée !</p>" ;
    }

    if( $a ){ // écriture plus rapide encore , pas besoin de faire une comparaison car $a contient true ! 
        echo "<p>la condition est respectée !</p>" ;
    }

    // ces deux manières d'écrire le code sont équivalentes 
    // on préfère la manière où on écrit moins 
    // echo "";
    // echo "";
    // echo "";

    // echo " 
    //
    // " ; 
?>
<!-- 
    // créer une nouvelle page php 
    //windows http://localhost/19-if-elseif-else.php => c:\xampp\htdocs\19-if-elseif-else.php 
    //MacOS http://localhost:8888/19-if-elseif-else.php => /Application/MAMP/htdocs/19-if-elseif-else.php 
    //Linux http://localhost/php/19-if-elseif-else.php  => /var/www/html/php/19-if-elseif-else.php 

-->