<!-- 
    créer un nouveau fichier : 
    windows http://localhost/06-tableau.php => c:\xampp\htdocs\06-tableau.php
    MacOS http://localhost:8888/06-tableau.php => /Application/MAMP/htdocs/06-tableau.php
    Linux http://localhost/php/06-tableau.php => /var/www/html/php/06-tableau.php
-->

<?php
    // les variables => typés (la nature de l'information quelles contiennent)
    // variables de base = variable scalaire => en langage C avec une quantité d'espace sur le disque dur

    $a = 2 ; // $a contient chiffre entier => integer
    $b = 2.2; // $b contient un chiffre à virgule => float / double
    $c = true ;
    $d = false ; // $c et $d contiennent des boolean 
    // ne pas mettre "true"
    $e = "Bonjour les amis" ; // $e contient une chaine de caractères => string

    # 4 types scalaires de base 

    # tableau 
    // variables complexes => stocker dans une variable plusieurs valeurs 

    // tableau indexé manière 1
    $tab1 = array( 1 , 2 , 3 );
    // tableau indexé manière 2
    $tab2 = [ 1 , 2 , 3 ]; // ressemble beaucoup à la manière de créer des tableaux en js
    // tableaux associatifs manière 1
    $tab3 = array( 
        "budget" => 220 , 
        "unite" => "euros" ,
        "date" => "01/01/2020"
     );
     // tableaux associatifs manière 2
     $tab4 = [
        "budget" => 220,
        "unite" => "euros",
        "date" => "01/01/2020"
     ];
?>
<?php 
    // je souhaite afficher le 2ème élément du tableau $tab2 
    // le premier item du tableau à l'index 0
    echo $tab2[0] ; // afficher le premier élément du tableau $tab2
    echo "<br>"; // cette instruction permet de faire un saut de ligne dans une balise php 
    // récupérer l'élément qui a la deuxième position dans le tableau
    echo $tab2[1];
    echo "<br>";
     // au lieu d'appeler les éléments d'un tableau via un chiffre 
     // appeler via index nommé par une chaine de caractères
    echo $tab4["unite"] ;
    echo "<br>";
    echo $tab4["date"];
?>

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