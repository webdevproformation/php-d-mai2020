<!-- 
    // créer une nouvelle page php 
    //windows http://localhost/21-for.php => c:\xampp\htdocs\21-for.php
    //MacOS http://localhost:8888/21-for.php => /Application/MAMP/htdocs/21-for.php 
    //Linux http://localhost/php/21-for.php  => /var/www/html/php/21-for.php 
-->

<?php 
    // nouveau mot clé du langage php (ressemble de manière identique à javascript)
    // for(){}

    // dans les parenthèses on va écrire => 3 instructions
    // la première instruction $i = 0 ; créer une variable $i et on l'initialise (donner une valeur) à la valeur 0 
    // pourquoi i => itérateur (variable que l'on va augmenter)
    // la deuxième instruction condition de sortie de la boucle => comparaison 
    // la dernière instruction l'incrément => de combien j'augmente la variable lorsque j'ai fini de faire un tour de boucle 
    // $i++ équivaut à écrire $i = $i + 1
    // à chaque tour de boucle j'augmente la valeur de $i de + 1

    for( $i = 0 ;  $i < 10 ; $i++ ){
                // 0 < 10 => true => j'exécute ce qui est écrit dans les accolades
                // 1 < 10 => true => j'exécute ce qui est écrit dans les accolades
                // 2 < 10 => true => j'exécute ce qui est écrit dans les accolades
                // 3 < 10 => true => j'exécute ce qui est écrit dans les accolades
                // ...
                // 9 < 10 => true => j'exécute ce qui est écrit dans les accolades
                // 10 < 10 => false => je sors de la boucle
           echo "<p>tour de boucle $i</p>"; // concaténation

           // $i++ => $i = $i + 1 ; => $i = 0 + 1 => $i = 1
           // $i++ => $i = $i + 1 ; => $i = 1 + 1 => $i = 2
           // $i++ => $i = $i + 1 ; => $i = 2 + 1 => $i = 3
           // ....
           // $i++ => $i = $i + 1 ; => $i = 9 + 1 => $i = 10
    }
    ///...
?>
<!--
     // créer une nouvelle page php 
    //windows http://localhost/22-exo.php => c:\xampp\htdocs\22-exo.php
    //MacOS http://localhost:8888/22-exo.php => /Application/MAMP/htdocs/22-exo.php 
    //Linux http://localhost/php/22-exo.php  => /var/www/html/php/22-exo.php 

en utilisant une boucle for afficher dans le navigateur les chaines de caractères suivantes :
1 x 0 = 0
1 x 1 = 1
1 x 2 = 2
1 x 3 = 3
...
1 x 10 = 10
-->
