<!-- 
    créer un nouveau fichier :
    windows http://localhost/14-concatenation-fin.php => c:\xampp\htdocs\14-concatenation-fin.php
    MacOS http://localhost:8888/14-concatenation-fin.php => /Application/MAMP/htdocs/14-concatenation-fin.php
    Linux http://localhost/php/14-concatenation-fin.php => /var/www/html/php/14-concatenation-fin.php
-->

<?php 
    // lorsque l'on fait de la concaténation il arrive que l'on ait besoin d'ajouter le symbole " dans la chaine de caractère 
    // par exemple 

    $citation = "Victor Hugo a dit : \"Notre Dame de Paris est la mère de tous les églises\" ";
    // " est utilisée comme délimiteur 
    // mais aussi comme «  » => guillemet
    // PHP ne va pas comprendre où commence et ou fini la chaine de caractères 
    // utiliser une caractère pour échapper la double quote \ => anti slash
    //après le symbole \" ce double quote ne l'interprête pas comme une fin de chaine de caractère (délimiteur)
    // mais comme un caractère quelconque 
    // dans le chat => 
    echo $citation ;
    $citation2 = "Victor Hugo a dit : « Notre Dame de Paris est la mère de tous les églises » ";
    echo "<br>";
    echo $citation2 ;
?>
<!-- 
    créer un nouveau fichier :
    windows http://localhost/15-exo.php => c:\xampp\htdocs\15-exo.php
    MacOS http://localhost:8888/15-exo.php => /Application/MAMP/htdocs/15-exo.php
    Linux http://localhost/php/15-exo.php => /var/www/html/php/15-exo.php

    ce fichier contient 3 variables 
    $url = "https://via.placeholder.com/400x200";
    $title = "article" ;
    $texte = "lire la suite ..."

    générer le texte suivante en utilisant de la concaténation et les 3 variables ci dessus :

    <div class="article">
        <h1>article</h1>
        <img src="https://via.placeholder.com/400x200" alt="">
        <p>
            <a href="#">
                lire la suite ...
            </a>
        </p>
    </div>

-->