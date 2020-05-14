<!-- 
    // créer une nouvelle page php 
    //windows http://localhost/base-php/29-table-multiplication.php => c:\xampp\htdocs\base-php\29-table-multiplication.php
    //MacOS http://localhost:8888/base-php/29-table-multiplication.php => /Application/MAMP/htdocs/base-php/29-table-multiplication.php
    //Linux http://localhost/php/base-php/29-table-multiplication.php  => /var/www/html/php/29-table-multiplication.php

avant de se lancer dans du php t'abord le faire en html => déduire ce que on doit faire en php

table 3 x 3
-->

<table border>
    <tr> <!-- la première ligne de mon tableau -->
        <th>x</th>
        <th>1</th>
        <th>2</th>
        <th>3</th>
    </tr>
    <!--  première partie => zone de titre du tableau 
        tr 
            th => x
            boucle qui augmente de 1
    -->
    <tr>
        <th>1</th>  <!-- 1  -->
        <td>1</td> <!-- 1 * 1 -->
        <td>2</td> <!-- 1 * 2 -->
        <td>3</td> <!-- 1 * 3 -->
    </tr>
    <tr>
        <th>2</th> <!-- 2 -->
        <td>2</td>  <!-- 1 * 2 -->
        <td>4</td> <!-- 2 * 2 -->
        <td>6</td>  <!-- 3 * 2 -->
    </tr>
    <tr>
        <th>3</th> <!-- 3 -->
        <td>3</td> <!-- 1 * 3 -->
        <td>6</td> <!-- 2 * 3 -->
        <td>9</td> <!-- 3 * 3 -->
    </tr>
    <!-- deuxième partie => corps de tableau --> 
</table>
<!--  comment générer ce html via du PHP ??? 
=> décomposer le table html en plusieurs parties 
--> 

<?php 
    echo "<hr>";
    echo "<h2>Table de multiplication </h2>";
    $max = 11 ;
    echo "<table border>";
    echo "<tr>";
        echo "<th>x</th>";
        for($i = 1 ; $i < $max; $i++){
            echo "<th>$i</th>";
        }
    echo "</tr>";
    // partie entête fin 
    // calculer une page => concaténation = générer une page via de l'addition de chaines de caractères

    for($j = 1 ; $j < $max ; $j++){
        echo "<tr>";
            echo "<th>$j</th>";
            for($k = 1 ; $k < $max; $k++){
                echo "<td>". $k * $j ."</td>";
            }
        echo "</tr>";
    }
    // le corps de la table de multiplication
    // boucle qui contient une boucle 
    echo "</table>";
?>
<!-- 
    à la suite de la page 
    pouvez vous me faire en PHP la table des additions  1 - 5 
    => bon exercice compliqué !!!! (essayer de ne pas faire de copier coller mais de re décomposer le problème !!! )
    1 essayer d'écrire votre code en html => utiliser le php et boucle / concaténation ... => abstraction 
-->
<hr>
<table border>
    <tr>
        <th>+</th>
        <th>1</th>
        <th>2</th>
    </tr>
    <!-- entête -->
    <tr>
        <th>1</th>  <!-- 1 -->
        <td>2</td> <!-- 1 + 1 -->
        <td>3</td> <!-- 1 + 2 -->
    </tr>
    <tr>
        <th>2</th> <!-- 2 -->
        <td>3</td> <!-- 2 + 1 -->
        <td>4</td> <!-- 2 + 2 -->
    </tr>
    <!-- corps -->
</table>

<?php
    echo "<hr>";
    echo "<h2>Table addition</h2>";
    $max = 5 ;
    echo "<table border>";
    // entête
        echo "<tr>";
            echo "<th>+</th>";
            for($i = 1 ; $i <= $max ; $i++){
                echo "<th>$i</th>";
            }
        echo "</tr>";
    // fin entête
    // corps
        for($j = 1 ; $j <= $max ; $j++){
            echo "<tr>";
                echo "<th>$j</th>";
                for($k = 1 ; $k <= $max ; $k++){
                    echo "<td>" .  ( $k + $j )  . "</td>";
                    // Eviter Warning: A non-numeric value encountered 
                    // ( ) sont mises pour forcer l'ordre d'exécution du code 
                    // d'abord fait l'addition + 
                    // puis fait la concaténation .
                }
            echo "</tr>";
        }
    // fin corps
    echo "</table>";
?>

<!-- 
    // créer une nouvelle page php 
    //windows http://localhost/base-php/30-bdd.php => c:\xampp\htdocs\base-php\30-bdd.php
    //MacOS http://localhost:8888/base-php/30-bdd.php => /Application/MAMP/htdocs/base-php/30-bdd.php
    //Linux http://localhost/php/base-php/30-bdd.php  => /var/www/html/php/30-bdd.php

    
-->