<!-- 
    créer un nouveau fichier : 
    windows http://localhost/07-exo.php => c:\xampp\htdocs\07-exo.php
    MacOS http://localhost:8888/07-exo.php => /Application/MAMP/htdocs/07-exo.php
    Linux http://localhost/php/07-exo.php => /var/www/html/php/07-exo.php


1/ créer la variable test qui va contenir le résultat de la comparaison suivante : 255 <= 3
2/ créer la variable inconnu égale à une chaine de caractère vide
3/ créer la variable voiture qui est une tableau contenant trois valeurs : Peugeot , 206 , 12243,70 euros
4/ afficher ces trois variables dans le navigateur

=> chapitre Variable > section 4 

-->

<?php 
    $test = 255 <= 3 ;
    //      false

    $inconnu = ""; // chaine de caractère vide 

    $voiture = [
        "Peugeot" ,
        206 ,
        "12243,70 euros"
    ];
?>
<?php 
    echo $test; // echo false => dans le navigateur on aura rien qui s'affiche 
    echo "<br>" ;

    var_dump ($test) ; // nouvelle fonction à connaitre pour coder en php => lorsque l'on code !!!
    // afficher le type ( valeur )

    echo "<br>" ;
    echo $inconnu ; 
    echo "<br>" ;
    var_dump ($inconnu) ; // string(0) "" 
    // string => type
    // (0) combien j'ai de caractères
    // ""

    // attention en informatique les pontuations , . ; ( ) [ ] " => très important
    // si il manque une de ces ponctuations => l'ordinateur très succeptible / méticuleux 
    // il regarde AVEC la ponctuation 
    // si vous oubliez une ponctuation => l'ordinateur ne va pas l'ajouter de lui même 
    // les ponctuations vont servir à l'ordinateur à délimiter les concepts dans le code 
    // ; => fin de l'instruction
    // , => fin d'une élément d'un tableau
    // " => début d'une chaine de caractères
    // " => fin d'une chaine de caratères 
    // Parser => parcourir == délimiter toutes les concepts
    // si vous oubliez un de ces caractères (1 seul) => l'ordinateur ne va pas pouvoir exécuter correctement votre code
    // il n'arrive pas à distinguer les différentes parties de votre code !!! 


    // si vous n'avez pas de message d'erreur 

    // je veux afficher la variable voiture 
    echo "<br>" ;
    echo $voiture ; // echo ne sait pas afficher un tableau => ici ça va mettre un message d'erreur + Array 
    
    // pour les tableaux 
    // soit il faut afficher item par item les éléments tableau 
    echo "<br>" ;
    echo $voiture[0];
    echo "<br>" ;
    echo $voiture[1];
    echo "<br>" ;
    echo $voiture[2];

    // utiliser la fonction var_dump() => permet d'afficher directement le tableau 
    echo "<br>" ;
    var_dump($voiture);
    
    // array(3) { [0]=> string(7) "Peugeot" [1]=> int(206) [2]=> string(14) "12243,70 euros" } 

    // array  => type de la variable
    // (3) il y a 3 éléments dans le tableau 
    // {
    //    [0]=> string(7) "Peugeot"
    //    [1]=> int(206)
    //    [2]=> string(14) "12243,70 euros"
    // }
?>

<!-- 

    créer un nouveau fichier php

    windows http://localhost/08-exo.php => c:\xampp\htdocs\08-exo.php
    MacOS http://localhost:8888/08-exo.php => /Application/MAMP/htdocs/08-exo.php
    Linux http://localhost/php/08-exo.php => /var/www/html/php/08-exo.php

    Donner l'aire d'un cercle ayant un rayon de 5 (cm)
    et afficher le résultat dans le navigateur 

    rappel, la formulaire du l'aire d'un cercle est pi (3.14) x rayon²

    => activer le mode debug de php 
    <?php phpinfo() ?> => Loaded Configuration File
    display_errors = on
    dans le fichier php.ini
-->