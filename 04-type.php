<!-- 
    créer un nouveau fichier : 
    windows http://localhost/04-type.php => c:\xampp\htdocs\04-type.php
    MacOS http://localhost:8888/04-type.php => /Application/MAMP/htdocs/04-type.php
    Linux http://localhost/php/04-type.php => /var/www/html/php/04-type.php
-->

<?php
    // les types 4 type scalaires 

    // il est possible de stocker dans une variables php plusieurs types de données

    $chiffre = 2 ; // noter que vous ne mettez pas de double quote avant et après le chiffre
                    // chiffre entier => integer 
    $prix = 10.3 ; // chiffre à virgule => float et pour les décimales on remplace la virgule 
                    // par le symbole . 
    
    $texte = "un peu de texte"; // stocker du texte dans une variable => string 

    $verif = true ; // true => mot clé de PHP ce n'est pas une chaine de caractères 
                    // ne pas mettre de boucle quote avant et après le mot true

    $notVerif = false ; // false est un autre mot clé du langage => Boolean
    // boolean => situation qui est binaire => actif / inactif
    // 0 / 1 
    // afficher la bannière publicitaire : oui / non
    
    //=> ordinateur va savoir comment stocker l'info dans le disque dur
    // comment communiquer avec une base de donnée via PHP 
    // introduction à MySQL (base de données) => langage pour demander des choses à la balise de données SQL 
?>

<p><?php echo $chiffre + $prix ; ?> </p>
<p><?php echo $chiffre - $prix ; ?> </p>
<p><?php echo $chiffre * $prix ; ?> </p>
<p><?php echo  $prix / $chiffre ; ?> </p>

<!-- 
    créer un nouveau fichier : 
    windows http://localhost/05-exo.php => c:\xampp\htdocs\05-exo.php
    MacOS http://localhost:8888/05-exo.php => /Application/MAMP/htdocs/05-exo.php
    Linux http://localhost/php/05-exo.php => /var/www/html/php/05-exo.php

    Cette page contient 3 variables :

    a ayant la valeur 12
    b ayant la valeur 0
    c ayant la valeur -2,5

effectuer les calculs suivants et afficher leurs résultats dans le navigateur :

    a / c
    a * c + a
    a * (c + a)
    a / b
    c / b
=> le chapitre variables > section 5 Calcul > cas n°1 


-->