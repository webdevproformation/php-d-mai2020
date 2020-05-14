<!-- 
    // créer une nouvelle page php 
    //windows http://localhost/base-php/27-rappels.php => c:\xampp\htdocs\base-php\27-rappels.php
    //MacOS http://localhost:8888/base-php/27-rappels.php => /Application/MAMP/htdocs/base-php/27-rappels.php
    //Linux http://localhost/php/base-php/27-rappels.php  => /var/www/html/php/27-rappels.php

    et lancer XAMPP et votre serveur
-->

<?php
    // conditions => if(){} if(){}elseif(){}else{}

    // boucle for(){} et while(){}

    // function nomFonction(){ } 
    // appel de fonction nomFonction()
    // arguments / paramatre de fonction

    // tableaux
    // $tableau = [];
    // $tableau = array();
    // combien j'ai d'éléments dans le tableau => count( );
    // ajouter un élément à la fin du tableau => array_push( );
    // ajouter un élément du début du tableau => array_unshift( );
?>
<!-- 
    à la suite de ce fichier , créer une fonction genererBaseDonnee
    cette fonction dispose de deux arguments :
        action 
        info

    la fonction contient des instructions

    créer une variable de type tableau qui s'appelle $base => est un tableau vide

    si $action == "ajouter"
        ajouter à la fin du tableau le paramètre $info 
        afficher dans le navigateur le contenu du tableau
    
    si $action == "calculer"
        afficher le nombre d'élément dans le tableau 
        afficher dans le navigateur le contenu du tableau

    exécuter la fonction  
            "ajouter", "Bonjour" 
            "calculer" , "deuximème utilisation"
-->    
<?php 
    $a = 3;
 
    function genererBaseDonnee( $action , $info ){
        $base = [] ; // il faut mettre la variable DANS la fonction car en PHP il n'est pas possible par défaut d'utiliser des variables qui ne sont pas DANS la fonction

        // la variable $a ne peut pas être utilisée directement 
        if($action == "ajouter"){
            array_push( $base , $info );
            var_dump( $base );
        }
        elseif( $action == "calculer"){
            $nb = count($base) ;
            echo "<p>$nb</p>";
            var_dump( $base );
        }
    }

    genererBaseDonnee( "ajouter" , "Bonjour");
    genererBaseDonnee( "calculer" , "deuximème utilisation");
    // la variable $base est remise à zéro automatiquement à chaque fois que vous allez executer
    // la fonction
?>
<!-- 
    portée des variables => scope (anglais) (visibilité des variables)
-->

<?php 
    echo "<hr>"; 
    $a = "information";

    function generer(){
        echo $a ; // utilise une variable qui n'a pas été créée DANS la fonction (avant)
    }
    generer(); // erreur variable non définie
    // il faut utiliser uniquement les variables que l'on a créé dans la fonction 
?>

<!-- je veux utiliser une variable qui n'est pas stockée -->

<?php 
    echo "<hr>"; 
    // solution 1 : ajouter un argument à la fonction
    // pas possible de créer deux fois la même fonction dans votre code !!!! 
    $a = "information";

    function generer1($a){
        echo $a ;
    }

    generer1($a); // appel de la fonction avec la valeur de la variable $a
?>

<!-- autre manière de pouvoir récupérer des informations qui ne sont pas stockées dans la fonction mot clé global --> 

<?php 
    echo "<hr>"; 
    // solution 2 : mot clé global
    // pas possible de créer deux fois la même fonction dans votre code !!!! 
    $a = "information 2";

    function generer2(){
        global $a; // récupérer la valeur de $a qui est dans le scope - portée globale
        echo $a ;
    }

    generer2(); // appeler la fonction
    
    // Florent ! => pour les fonctions il est INTERDIT de déclarer une fonction avec le même nom deux fois
    // Fatal error: Cannot redeclare generer1() (previously declared )
    // pour les variables pas de soucis pour les redéclarer et leurs changer leur valeur
?>
<!--
    à la suite du code dans ce fichier 

    créer une variable $bdd de type tableau, contenant aucun élément 

    créer une fonction managerBdd 
        deux arguments
            $position
            $info 
    
    cette fonction contient les instructions suivantes :
        si $position == "debut"
            ajouter $info au début du tableau  $bdd

        si $position == "fin"
            ajouter $info à la fin du tableau $bdd

        afficher le contenu de la variable $bdd ;

    utiliser la fonction :
    managerBdd ("debut" , 1);
    managerBdd ("fin" , 2);
    managerBdd ("debut" , "Bonjour");
-->   

<?php 
    phpinfo();
    $bdd = [] ;
    function managerBddV1($position , $info){
        global $bdd ; // je met cette ligne au début de la fonction 
        // ainsi je peux utiliser la variable $bdd partout DANS la fonction 

        if( $position == "debut" ){

            array_unshift( $bdd , $info ) ; // Google => download WAMP
            
        }elseif( $position == "fin"){

            array_push( $bdd , $info );

        }

        echo "<hr>"; // cette ligne pour éviter de répéter cette instruction 
        var_dump( $bdd ); // cette ligne vu quelle est après le if elseif
    }

    managerBddV1("debut" , 1);
    managerBddV1("fin" , 2);
    managerBddV1("debut" , "Bonjour");
?>
<!-- 
    // créer une nouvelle page php 
    //windows http://localhost/base-php/28-foreach.php => c:\xampp\htdocs\base-php\28-foreach.php
    //MacOS http://localhost:8888/base-php/28-foreach.php => /Application/MAMP/htdocs/base-php/28-foreach.php
    //Linux http://localhost/php/base-php/28-foreach.php  => /var/www/html/php/28-foreach.php

-->