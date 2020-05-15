<!-- 
        //windows http://localhost/cas-pratique/01-portfolio.php => c:\xampp\htdocs\cas-pratique\01-portfolio.php
        //MacOS http://localhost:8888/cas-pratique/01-portfolio.php => /Application/MAMP/htdocs/cas-pratique/01-portfolio.php
        //Linux http://localhost/php/cas-pratique/01-portfolio.php  => /var/www/html/php/cas-pratique/01-portfolio.php
-->
<?php require "lib.php" ;  ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <section class="zone1">
        <?php genererZone1(3) ?>
    </section>
    <section class="zone2">
        <?php genererZone2(4) ?>
    </section>
</body>
</html>
<!-- 
dans mon fichier j'ai le minimum de php possible mélanger avec du html
1 importer via la fonction require la librairie 
2 utiliser à deux endroits dans le html mes fonctions !
fin

3 importer toujours la librairie AVANT le HTML 
?? je ne connais les fonctions que tu me demandes d'exécuter 

AVANT d'être plus compliqué, est ce que s'est clair ?? 
--> 