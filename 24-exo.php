<!--
     // créer une nouvelle page php 
    //windows http://localhost/24-exo.php => c:\xampp\htdocs\24-exo.php
    //MacOS http://localhost:8888/24-exo.php => /Application/MAMP/htdocs/24-exo.php 
    //Linux http://localhost/php/24-exo.php  => /var/www/html/php/24-exo.php 

    pouvez vous via une boucle for ou une boucle while écrire dans le navigateur le texte suivant :

    <article>
        <h2>titre 0</h2>
    </article>
    <article>
        <h2>titre 1</h2>
    </article>
     <article>
        <h2>titre 2</h2>
    </article>
    .....
     <article>
        <h2>titre 12</h2>
    </article>
-->

<?php 
    //solution 1 avec une boucle for
    for($i = 0 ; $i < 13 ; $i++){
        echo "
            <article>
                <h2>titre $i</h2>
            </article>
        ";
    }
    //solution 2 avec une boucle for
    for($i = 0 ; $i < 13 ; $i++){
        echo "<article><h2>titre $i</h2></article>";
    }
    // solution 3 avec une boucle while
    $j = 0 ;
    while($j < 13){
        echo "
            <article>
                <h2>titre $j</h2>
            </article>
        ";
        $j++; // $j = $j + 1;
    }
    // solution 4 avec une boucle while
    $k = -1;
    while( $k < 12)
    {
        $k++ ;
        echo "
            <article>
                <h2>titre $k</h2>
            </article>
        ";
    }
    // attention il existe une troisième manière de faire des boucles en php foreach() => tableau
?>
<!--
     // créer une nouvelle page php 
    //windows http://localhost/25-fonction.php => c:\xampp\htdocs\24-fonction.php
    //MacOS http://localhost:8888/25-fonction.php => /Application/MAMP/htdocs/24-fonction.php 
    //Linux http://localhost/php/25-fonction.php  => /var/www/html/php/24-fonction.php 
-->