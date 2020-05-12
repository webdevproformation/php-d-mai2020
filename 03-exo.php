<!--
    créer un nouveau fichier : 
    windows http://localhost/03-exo.php => c:\xampp\htdocs\03-exo.php
    MacOS http://localhost:8888/03-exo.php => /Application/MAMP/htdocs/03-exo.php
    Linux http://localhost/php/03-exo.php => /var/www/html/php/03-exo.php

    pour les 10 noms de variables suivants : lesquels sont conformes et lesquels sont non conforme ???

    $Variable => OK 
    $Nom de Variable => KO car il y a deux espaces dans le nom de la variable
    $123Nom_De_Variable => KO car le deuxième caractère est un chiffre
    $Nom_De_Variable => OK
    $nom_de_variable => OK
    $toto@mailcity.com => KO car il y a deux caractères interdits @ et le . 
    $nom_de_variable_123 => OK
    $Nom-de-variable => KO car il y a le symbole - 
    $_function => OK
    $function => OK

    https://formation.webdevpro.net/php-initiation/ > section variable > chaptitre 2 > exo 2
    login : php
    mdp : php 
-->

<?php 
    $function = "nouvelle valeur" ;
    // PHP et javascript => ils viennent du langage C 
?>

<!-- 
    créer un nouveau fichier : 
    windows http://localhost/04-type.php => c:\xampp\htdocs\04-type.php
    MacOS http://localhost:8888/04-type.php => /Application/MAMP/htdocs/04-type.php
    Linux http://localhost/php/04-type.php => /var/www/html/php/04-type.php
-->