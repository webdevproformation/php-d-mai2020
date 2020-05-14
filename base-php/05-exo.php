<!-- 
    créer un nouveau fichier : 
    windows http://localhost/05-exo.php => c:\xampp\htdocs\05-exo.php
    MacOS http://localhost:8888/05-exo.php => /Application/MAMP/htdocs/05-exo.php
    Linux http://localhost/php/05-exo.php => /var/www/html/php/05-exo.php

    Cette page contient 3 variables :

    a ayant la valeur 12
    b ayant la valeur 0
    c ayant la valeur -2,5
-->
<?php 
    $a = 12 ;
    $b = 0 ;
    $c = -2.5 ; // attention les chiffres à virgule remplacer la virgule par le .
?>
<!-- effectuer les calculs suivants et afficher leurs résultats dans le navigateur :
    a / c
    a * c + a
    a * (c + a)
    a / b
    c / b
=> le chapitre variables > section 5 Calcul > cas n°1  
-->
<p>a / c = <?php echo $a / $c ; ?></p>
<p>a * c + a =  <?php echo $a * $c + $a ; ?></p><!-- entre la multiplication et addition , multiplication qui est prioritaire  -->
<p>a * (c + a) =  <?php echo $a * ( $c + $a ) ; ?></p> <!--  $a*($c+$a) --> 
<!-- les parenthèses garantissent que l'addition va être prioritaire par rapport à la multiplication -->
<p>a / b = <?php echo $a / $b ?></p><!--  infini INF-->
<p>c / b = <?php echo $c / $b ?></p><!-- - infini -INF-->

<!-- 
    créer un nouveau fichier : 
    windows http://localhost/06-tableau.php => c:\xampp\htdocs\06-tableau.php
    MacOS http://localhost:8888/06-tableau.php => /Application/MAMP/htdocs/06-tableau.php
    Linux http://localhost/php/06-tableau.php => /var/www/html/php/06-tableau.php
-->