<!--
    concaténation : additionner du texte avec du texte 
    lorem6
    site internet pour pouvoir générer du texte factice 
    google > lorem ipsum > https://www.lipsum.com/

    windows http://localhost/12-concatenation-suite.php => c:\xampp\htdocs\12-concatenation-suite.php
    MacOS http://localhost:8888/12-concatenation-suite.php => /Application/MAMP/htdocs/12-concatenation-suite.php
    Linux http://localhost/php/12-concatenation-suite.php => /var/www/html/php/12-concatenation-suite.php
-->
<?php 
    $introduction = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed accumsan laoreet nunc, ut dapibus ex convallis at. Duis pharetra diam mauris, id consequat ipsum euismod nec. Cras in purus suscipit, mattis nisl nec, posuere nisl. Sed vulputate mi vel purus dapibus euismod. Nunc sodales ex sed facilisis fringilla. Pellentesque lobortis consectetur risus, ac eleifend metus maximus vitae. Sed eget mi sed est auctor cursus non et nunc. Vivamus porta urna eu consectetur porta. Nulla ut nisl non neque consequat viverra. Duis facilisis tincidunt mi a mattis. Cras eget euismod velit. ";
    $titre = "Premier paragraphe" ;
    // emmet => plugin diponible sur visual studio 
    // emmet dans PHP => Lorem ipsum dolor sit amet.
    // Fichier > Préférences > Paramètres > Editor: Word Wrap On 

    // concaténation => aucun problème pour faire des sauts de ligne dans 
    // une chaine de carctères 

    $section = "  
            $titre
            $introduction
    ";
    echo $section;

    // concaténation avec saut de ligne et avec du html
    // remarquer que les balises html sont inteprétées par le navigateur

    $section2 = " 
        <h1>$titre</h1>
        <p>$introduction</p>
    ";
    echo $section2;
?>
<!-- 

    windows http://localhost/13-exo.php => c:\xampp\htdocs\13-exo.php
    MacOS http://localhost:8888/13-exo.php => /Application/MAMP/htdocs/13-exo.php
    Linux http://localhost/php/13-exo.php => /var/www/html/php/13-exo.php

    2 ce fichier contient trois variables
    titre = "Premier article"
    contenu = "lorem ipsum"
    date = "01/01/2019"

    3 écrire le bloc de html suivant dans le navigateur en utilisant les 3 variables  :

    <article>
    <header>
        <h1>Premier article</h1>
        <time>01/01/2019</time>
    </header>
    <div>
        <p>lorem ipsum</p>
    </div>
    </article>

-->