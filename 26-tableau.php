<!-- 
    // créer une nouvelle page php 
    //windows http://localhost/26-tableau.php => c:\xampp\htdocs\26-tableau.php
    //MacOS http://localhost:8888/26-tableau.php => /Application/MAMP/htdocs/26-tableau.php
    //Linux http://localhost/php/26-tableau.php  => /var/www/html/php/26-tableau.php
-->

<?php
    // variable
    // fonction 

    // tableau => présenter hier ou avant hier
    // variable qui permet de stocker plusieurs valeurs 

    // méthode 1 ( old school )
    $tab = array( "lundi" , "mardi" , "mercredi" );

    // méthode 2 (celle qui est le plus utilisée de nos jours)
    $tab2 = [ "lundi" , "mardi" , "mercredi" ];
    // noter bien on stocke 3 chaines de caractères dans une seule variable 

    // aime beaucoup les tableaux en informatique car lorsque l'on a des problèmes a gérer on va avoir besoin d'une grande quantité de donnée 
    // pour éviter avoir à créer autant de variables que l'on a de donnée => toutes données vont être stockés dans une seule variable un tableau 


?>
<!--
 à la suite de ce fichier
 pouvez créer un tableau
 comme nom listeCourses
 contient les valeurs suivantes 
    Pomme
    Pêche 
    Banane
    12
    euros 
    
-->

<?php 
    // solution 1
    $listeCourses = [ "Pomme" , "Pêche" , "Banane" , 12 , "euros"];

    // solution 2
    $listeCourses2 = array( "Pomme" , "Pêche" , "Banane" , 12 , "euros");

    // solution 3 // solution avantage d'avoir des lignes courtes 
    $listeCourses3 = [ 
        "Pomme" , 
        "Pêche" , 
        "Banane" , 
        12 , 
        "euros" // pas nécessaire de mettre une virgule sur le dernier élément d'un tableau
    ];

    // php met disposition plusieurs fonctions qui vont permettre de réaliser des opérations sur les tableaux


    // savoir combien j'ai d'éléments dans un tableau

    //count( ) ; // support de cours // dans la partie annexe => https://www.php.net/manual/fr/ref.array.php
                // site officielle de PHP 
                // dans le site officielle vous allez avoir fonction native de PHP 
                // php est livré avec 1000 fonctions natives
                // echo
                // var_dump( )
                // count

    //  count ( mixed $array_or_countable [, int $mode = COUNT_NORMAL ] ) : int
    // => la fonction native count
    // appeler avec 2 arguments
    //  le premier argument est un tableau
    //  le deuxième argument est une argument facultatif [] et que si je dois lui donner chiffre entier int

    // : int lorsque je vais utiliser cette fonction, le résultat va être un chiffre

    echo count( $listeCourses ) ;

    // ajouter un nouvel élément au tableau 

    echo "<hr>";
    array_push($listeCourses , "Pain" , "Fromage");
    //  array_push ( array &$array [, mixed $... ] ) : int
    var_dump($listeCourses) ;

    // ajouter un ou plusieurs éléments en début de tableau 
    echo "<hr>";
    array_unshift($listeCourses , "Gateau", "Oeufs");
    var_dump($listeCourses) ;

?>
<!--
    à la suite du fichier créer un nouveau tableau
    $formation 
    contenir les valeurs suivantes :
        HTML
        CSS
        JS
        PHP
        jQuery

    Déterminer combien il y a d'éléments dans le tableau et l'afficher à l'écran ?

    ajouter du début du tableau les trois items suivants
    Rédiger un CV
    Gestion de projet
    Parle en Public

    afficher le tableau en intégralité dans le navigateur 
-->

<?php 
    $formation = [
        "HTML",
        "CSS",
        "JS" ,
        "PHP" ,
        "jQuery"
    ];

    echo count($formation); // Array message d'erreur

    array_unshift( 
            $formation , 
            "Rédiger un CV" ,
            "Gestion de projet" ,
            "Parle en Public"
    );

    echo "<hr>";
    var_dump($formation);
?>