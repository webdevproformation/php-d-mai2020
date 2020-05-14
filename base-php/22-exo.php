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

<?php 
    echo "<h2>solution 1</h2>";

    for($i = 0 ;$i < 11 ; $i++){
        echo "<p>1 x $i = ". ($i * 1) ."</p>";
    }
    echo "<hr>";
    echo "<h2>solution 2</h2>";

    for($i = 0 ;$i < 11 ; $i++){
        echo "<p>1 x $i = ". $i * 1 ."</p>";
    }

    echo "<hr>";
    echo "<h2>solution 3</h2>";
    
    for($i = 0 ;$i <= 10 ; $i++){
        echo "<p>1 x $i = ". $i * 1 ."</p>";
    }

    echo "<hr>";
    echo "<h2>solution 4</h2>";
    
    for($nombre = 0 ; $nombre <= 10 ; $nombre++){
        echo "<p>1 x $nombre = ". $nombre * 1 ."</p>";
    }
?>

<!--
     // créer une nouvelle page php 
    //windows http://localhost/23-exo.php => c:\xampp\htdocs\23-exo.php
    //MacOS http://localhost:8888/23-exo.php => /Application/MAMP/htdocs/23-exo.php 
    //Linux http://localhost/php/23-exo.php  => /var/www/html/php/23-exo.php 

    en utilisant une boucle, afficher dans le navigateur les string suivants :
    5 x 10 = 50
    5 x 9 = 45
    5 x 8 = 40
    5 x 7 = 35
    ...
    5 x 1 = 5
-->
<?php

// solution 1
for($i = 10 ; $i > 0 ; $i = $i - 1 ){
    echo "<p>5 x $i = ". $i * 5 ."</p>";
}
// solution 2
for($i = 10 ; $i >= 1 ; $i = $i - 1 ){
    echo "<p>5 x $i = ". $i * 5 ."</p>";
}
// solution 3
for($i = 10 ; $i >= 1 ; $i-- ){
    echo "<p>5 x $i = ". $i * 5 ."</p>";
}

// solution 4
for($i = 10 ; $i > 0 ; $i = $i - 1 ){
    echo "5 x $i = ". $i * 5 ."<br>";
}

// autre boucle que l'on va utiliser beaucoup en php
// la boucle foreach(){ }
// boucle que l'on va utiliser sur les tableaux => plus en détail lorsque l'on va présenter les tableaux cet après midi

?>

<?php 
    // while(){ }

    $i = 0 ; // création de l'itérateur
    // non ce n'est pas conseillé d'avoir deux variables qui ont le même 
    // car la deuxième variable va écraser la valeur de la première affectation
    // portée des variables (scope des variables)
    while( $i < 10 ){ // condition de sortie

        $i++; // l'incrément 
    }
?>
<!-- 
    à la suite de votre page php 

    utiliser la boucle while pour réccrire le texte suivant dans le navigateur 

    Tour de boucle n° 1
    Tour de boucle n° 2
    Tour de boucle n° 3
    Tour de boucle n° 4
    Tour de boucle n° 5

 utiliser la boucle while pour réccrire le texte suivant dans le navigateur 

    Tour de boucle n° 1
    Tour de boucle n° 3
    Tour de boucle n° 5
-->
<?php 

    $i = 1 ;
    echo "<hr>";
    // solution 2
    while( $i < 6 ){
        echo "<p>Tour de boucle n° $i</p>";
        $i++ ;
    }
    // solution 2

    echo "<hr>";
    $i = 1 ;
    while( $i <= 5 ){
        echo "<p>Tour de boucle n° $i</p>";
        $i++ ;
    }

    // solution alternative 3
    echo "<hr>";
    $i = 0 ;
    while( $i < 5 ){
        $i = $i + 1;
        echo "<p>Tour de boucle n° $i</p>"; 
    }

    // deuxième question

    $j = 1 ; // Florent => il est conseillé de créer des variables différentes
            // pas conseillé d'utiliser la même variable 
    echo "<hr>";
    while( $j <= 5 )
    {
        echo "<p>Tour de boucle n° $j</p>"; 
        $j  = $j  + 2; 
    }

    // solution 2 
    $h = 1 ;
    echo "<hr>";
    while( $h < 6){
        echo "<p>Tour de boucle n° $h</p>"; 
        $h  = $h + 2 ; 
    }

    // solution 3
    $k = -1 ;
    echo "<hr>";

    while( $k < 5){
        $k = $k + 2 ;
        echo "<p>Tour de boucle n° $k</p>";
    }

?>

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