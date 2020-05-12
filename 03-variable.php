<!--
    windows http://localhost/03-variable.php => c:\xampp\htdocs\03-variable.php
    MacOS http://localhost:8888/03-variable.php => /Application/MAMP/htdocs/03-variable.php
    Linux http://localhost/php/03-variable.php => /var/www/html/php/03-variable.php
-->

<?php 
    // aucun problème pour sauter des lignes dans la balise php 
    // nous allons créer nos premières variables

    $premier = "Ma première variable" ;

    // pour créer une variable 
    // $ => OBLIGATOIRE
    // premier 
    // espace facultatif
    // symbole = 
    // espace facultatif
    // "  double quote ouvrante
    // le texte
    // "  double quote fermante
    // espace facultatif
    // symbole ; met fin à l'instruction 

    // maintenant que la variable est créé nous allons pouvoir l'utiliser => afficher à l'écran
?>

<p><?php echo $premier ; ?></p>
<h2><?php echo $premier ; ?></h2>
<ul>
    <li><?php echo $premier ; ?></li>
    <li><?php echo $premier ; ?></li>
    <li><?php echo $deuxieme ; ?></li>
</ul>

<?php 
    $deuxieme = "Victor Hugo" ;
    // je ne peux pas utiliser une variable avant de l'avoir créé
    // variable doit être puis utilisée 
?>
<p><?php echo $deuxieme ; ?></p>
<!-- 
    1 est ce que l'on peut mettre des accentuation dans les noms
    des variables ??
    => OBLIGATOIREMENT le 1ère caractère $ 
    =>le caractère suivant = minuscule / MAJUSCULE / _ (tiret bas => underscore ne pas confondre avec le symbole -)
    => tous les autres caractères = minuscule / MAJUSCULE / _ / chiffre 
    => déconseillé d'utiliser les caractères accentués  => e 
    => interdit de mettre le symbole espace dans le nom d'une variable
             => remplacer espace Majuscule (camel case)
             => remplace espace par le symbole _ tiret bas
    => autres caractères . - / \ { } ... ;

    2 On peut avoir plusieurs variables de créer dans une seule balise php ?
    oui !!!!!!!!!!!!!!!
-->

<?php 
    $troisiemeTitre = "troisième" ;
    $troisieme_paragraphe = "un peu de texte";
    $_troisieme_paragraphe = "un peu de texte";
?>


<!--
    créer un nouveau fichier : 
    windows http://localhost/03-exo.php => c:\xampp\htdocs\03-exo.php
    MacOS http://localhost:8888/03-exo.php => /Application/MAMP/htdocs/03-exo.php
    Linux http://localhost/php/03-exo.php => /var/www/html/php/03-exo.php

    pour les 10 noms de variables suivants : lesquels sont conformes et lesquels sont non conforme ???

    $Variable
    $Nom de Variable
    $123Nom_De_Variable
    $Nom_De_Variable
    $nom_de_variable
    $toto@mailcity.com
    $nom_de_variable_123
    $Nom-de-variable
    $_function
    $function

    https://formation.webdevpro.net/php-initiation/ > section variable > chaptitre 2 > exo 2
    login : php
    mdp : php 
-->



