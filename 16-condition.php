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


<?php
    $a = 2 ;
    $b = 3 ;
    $c = -5 ;

    $verif1 =  $a < $b ;
    var_dump($verif1) ; // true ou false ??
  
    echo "<hr>";

    $verif2 = $a < $b && $b > $c ;
    var_dump($verif2) ; // true ou false ??

    echo "<hr>";

    $verif3 = $a > $b || $b > $c ;
    var_dump($verif3) ; // true ou false ??

    // https://github.com/webdevproformation/php-d-mai2020

    // Le code PHP pour être exécuté
    // => 1 le fichier doit être dans le dossier htdocs
    // => 2 serveur XAMPP doit être démarré
    // => 3 dans ton navigateur http://localhost/nom-de-ton-fichier.php

    // si une de ces 3 trois conditions ne sont pas respectées => tu ne peux pas exécuter du code php dans ton ordinateur 

    // ecommerce => je te déconseille de vouloir le code toi même à la main
    // tester ecommerce ???? => shopify 
    // concurrent de shopify : prestashop / woocommerce / magento (formé pour pouvoir les utiliser)

    // très envie de faire un ecommerce pour le jury => ???? 
    // est ce que tu peux présenter un prestashop / shopify / magento pour le jury ????
    // CMS ??? 
?>

<?php
    $a = 2 ;
    $b = 3 ;
    $c = -5 ;

    $verif1 =  $a < $b ;
    //          2 < 5
    //          true
    var_dump($verif1) ; // true ou false ??
  
    echo "<hr>";

    $verif2 = $a < $b && $b > $c ;
    //          2 < 5 &&  3 > -5
    //          true  &&  true // && retourne true si les deux conditions sont true simultanément
    //              true 

    var_dump($verif2) ; // true ou false ??

    echo "<hr>";

    $verif3 = $a > $b || $b > $c ;
    //          2 > 3 || 3 > -5
    //           false || true // || OU retourne true si une des conditions ou les deux conditions est true
    //                 true

    var_dump($verif3) ; // true ou false ??
?>

<!-- 
    créer un nouveau fichier :
    windows http://localhost/17-if.php => c:\xampp\htdocs\17-if.php
    MacOS http://localhost:8888/17-if.php => /Application/MAMP/htdocs/17-if.php
    Linux http://localhost/php/17-if.php => /var/www/html/php/17-if.php
-->