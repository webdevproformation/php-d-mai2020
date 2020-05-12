<!-- 
    créer un nouveau fichier :
    windows http://localhost/16-condition.php => c:\xampp\htdocs\16-condition.php
    MacOS http://localhost:8888/16-condition.php => /Application/MAMP/htdocs/16-condition.php
    Linux http://localhost/php/16-condition.php => /var/www/html/php/16-condition.php
-->

<?php 
    // les conditions :
    // nouveau mot clé du langage 

    // if(){}
    // les opérations sur les booleans 
    // les chiffres calculs

    echo 2 + 3 ; // 5 dans le navigateur
    // addition

    echo "Bonjour " . "les amis !" ; // dans le navigateur afficher Bonjour les amis ! 
    // concaténation 

    // même avec les boolean on peut effectuer des calculs 

    $verif1 = 20 > 10 ;
    //         true
    //          1
    //      2
    // 3 
    // 1 PHP va essayer de traiter la comparaison
    // 2 affecter le résultat de la comparaison et il va la stocker 
    // 3 dans une variable qui s'appelle  $verif1 
    echo "<br>";
    var_dump( $verif1 ); // lorsque je manipule des boolean => var_dump() donne plus d'informations que echo 
    echo "<br>";
    echo $verif1; // si $verif1 = true alors php va le transformer en la valeur 1 
                    // echo true ; echo 1 ; 

    $verif2 = 2 > 10 ;
    //        false

    echo "<br>";
    echo $verif2 ; // affiche RIEN à l'écran // affiche pas 0
    echo "<br>";
    var_dump( $verif2 );

    // on préfère utiliser var_dump() à echo lorsque l'on manipule des variables boolean 

    // calcul entre des booleans 
    // && => et
    // || => ou
    // ! NOT
    $verif3 = 20 > 10 &&  20 < 3 ;
    //          true  &&  false ;
    //              false 
    echo "<br>";
    var_dump( $verif3 );

    $verif4 = 20 > 10 ||  20 < 3 ;
    //          true   || false ; si une condition est true alors il l'opérateur renvoie true
    //                true
    echo "<br>";
    var_dump( $verif4 );

?>
<!-- 
    à la suite du fichier 

    pouvez vous me dire si c'est true ou false pour chaque expression ???

    "e" == "e" true 

    20 > 3 true
    20 > 3 && 20 < 30 
    true && true => true

    20 > 3 || 20 < 30
    true || true => true 

    "quantité" == "Quantité" 
    false

    "quantité" > "quantité"
    false

    20 <= 2 && 40 > 2 
    false && true => false

    2 == "2"
    true

    == vérifier la valeur 

    2 === "2"
    false 

    === vérifier le type et la valeur 


-->

<?php
    $verif5 = "e" == "e" ;
    echo "<br>";
    var_dump( $verif5 );
?>

<?php 

    //je veux me connecter 

    $loginBdd = "php" ;
    $mdpBdd = "php";

    $loginSaisi = "php";
    $mdpSaisi = "php";

    $verif  = $loginBdd == $loginSaisi && $mdpBdd  == $mdpSaisi  ;
    //          "php"  ==   "php"       &&  "php"   ==   "php"
    //                  true           &&      true 
    //                          true 
    var_dump($verif);
?>