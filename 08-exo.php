<!-- 

    créer un nouveau fichier php

    windows http://localhost/08-exo.php => c:\xampp\htdocs\08-exo.php
    MacOS http://localhost:8888/08-exo.php => /Application/MAMP/htdocs/08-exo.php
    Linux http://localhost/php/08-exo.php => /var/www/html/php/08-exo.php

    Donner l'aire d'un cercle ayant un rayon de 5 (cm)
    et afficher le résultat dans le navigateur 

    rappel, la formulaire du l'aire d'un cercle est pi (3.14) x rayon²

    => activer le mode debug de php 
    <?php phpinfo() ?> => Loaded Configuration File
    display_errors = on
    dans le fichier php.ini
-->

<?php 
    $rayon = 5 ;
    $surface = 3.14 * $rayon * $rayon ;
    // $surface = 3.14 * $rayon ** 2;
    // $surface = pi() * $rayon ** 2 ;
    // pi() fonction dans la langage PHP qui renvoit une valeur de la valeur PI

    echo pi();
    echo "<br>";
    echo $surface ;

?>
<!-- 
    créer un nouveau fichier php
    windows http://localhost/09-concatenation.php => c:\xampp\htdocs\09-concatenation.php
    MacOS http://localhost:8888/09-concatenation.php => /Application/MAMP/htdocs/09-concatenation.php
    Linux http://localhost/php/09-concatenation.php => /var/www/html/php/09-concatenation.php
-->
