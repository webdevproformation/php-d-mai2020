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
<?php
      $url = "https://via.placeholder.com/400x200";
      $title = "article" ;
      $texte = "lire la suite ..." ;

    $article = "
        <div class=\"article\">
            <h1>$title</h1>
            <img src=\"$url\" alt=\"\">
            <p>
                <a href=\"#\">
                    $texte
                </a>
            </p>
        </div>
    "; // stocker le html dans la mémoire de l'ordinateur
     echo $article ; // vous devez avoir un résultat dans le navigateur !!
     // echo $article // le contenu de la variable soit écrit dans le navigateur 
?>
<!-- 
    créer un nouveau fichier :
    windows http://localhost/16-condition.php => c:\xampp\htdocs\16-condition.php
    MacOS http://localhost:8888/16-condition.php => /Application/MAMP/htdocs/16-condition.php
    Linux http://localhost/php/16-condition.php => /var/www/html/php/16-condition.php
-->
