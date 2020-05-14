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
<?php
    $titre = "Premier article" ;
    $contenu = "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean euismod, leo in ultrices tristique, lectus magna gravida eros, quis ullamcorper risus elit ut purus. Nunc sit amet eleifend leo. Praesent enim mauris, cursus ut ipsum nec, blandit pulvinar dui. Nunc nec arcu tincidunt, hendrerit magna at, finibus diam. In posuere aliquam felis suscipit bibendum. Sed eget pharetra ipsum, ac pretium nulla. Aenean in mattis diam. Curabitur eget risus tempor, lacinia libero et, accumsan ipsum. Integer porta consectetur mauris bibendum convallis. Duis libero purus, facilisis at nulla sed, imperdiet lobortis nisi. Quisque sed mauris massa. " ;
    $date = "01/01/2019" ;
    //solution 1 
    $article = " 
        <article>
            <header>
                <h1>$titre</h1>
                <time>$date</time>
            </header>
            <div>
                <p>$contenu</p>
            </div>
        </article>
    ";
    echo $article ; 
    // solution 2 (qui fonctionne mais qui est un peu plus longue à écrire )
    echo "<article>";
    echo "<header>" ;
    echo "<h1>$titre</h1>";
    echo "<time>$date</time>" ;
    echo "</header>" ;
    echo "<div>" ;
    echo "<p>$contenu</p>" ;
    echo "</div>" ;
    echo "</article>";

?>
<!-- 
    créer un nouveau fichier :
    windows http://localhost/14-concatenation-fin.php => c:\xampp\htdocs\14-concatenation-fin.php
    MacOS http://localhost:8888/14-concatenation-fin.php => /Application/MAMP/htdocs/14-concatenation-fin.php
    Linux http://localhost/php/14-concatenation-fin.php => /var/www/html/php/14-concatenation-fin.php
-->

