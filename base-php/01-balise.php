<!-- 
    utilisation de la balise <?php ?>

    tout votre code PHP doit être écrit dans cette balise
    premier script PHP
    le fichier est stocké dans c:\xampp\htdocs\01-balise.php
    => http://localhost/01-balise.php

     le fichier est stocké dans /Application/MAMP/htdocs/01-balise.php
    => http://localhost:8888/01-balise.php

    le fichier est stocké dans /var/www/html/php/01-balise.php
    => http://localhost/php/01-balise.php
-->

<?php echo "Bonjour les amis" ; ?>

<p>
trois syntaxes possibles pour écrire des commentaires dans cette balise
évidemmment, il faut écrire ces syntaxe dans la balise</p>
<?php 
    // commentaire monoligne
    // syntaxe que l'on utilisait pour faire du javascript 
    /*
        permettre de faire des commentaires
        multiligne
        rappel la syntaxe pour les commentaires css 
    */

    # commentaire monoligne 
    // deux manières de faire des commentaires monoligne en PHP
?>

<p>
dans un fichier .php pas de soucis pour mixer du html et du php 
par exemple </p>

<h1><?php echo "Bonjour" ; ?></h1>
<!-- 
        dans un fichier php vous allez mixer du html et du php 
        après avoir écrit dans le fichier php => Enregistrer puis => puis actualiser la page html
-->
<p><?php echo "je suis le texte d'un paragraphe" ; ?></p>

<!-- 
je souhaite appeler l'adresse suivante :

windows http://localhost/02-exos.php => c:\xampp\htdocs\02-exos.php
MacOS http://localhost:8888/02-exos.php => /Application/MAMP/htdocs/02-exos.php
Linux http://localhost/php/02-exos.php => /var/www/html/php/02-exos.php

et je veux que le contenu suivant soit affiché à l'écran :

afficher une balise h2 contenant le texte Exercice 1
            deux paragraphes contenant le texte lorem ipsum
-->

