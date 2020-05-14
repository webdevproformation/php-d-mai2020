<!-- 
je souhaite appeler l'adresse suivante :

windows http://localhost/02-exos.php => c:\xampp\htdocs\02-exos.php
MacOS http://localhost:8888/02-exos.php => /Application/MAMP/htdocs/02-exos.php
Linux http://localhost/php/02-exos.php => /var/www/html/php/02-exos.php

et je veux que le contenu suivant soit affiché à l'écran :

afficher une balise h2 contenant le texte Exercice 1
            deux paragraphes contenant le texte lorem ipsum
-->
<?php

?>

<h2><?php echo "Exercice 1" ; ?></h2>
<p><?php echo "lorem ipsum" ; ?></p>
<p><?php echo "lorem ipsum" ; ?></p>

<!-- 
    en php il n'y a qu'une seule balise 
    par contre nous allons pouvoir écrire, dans cette balise une énorme quantité instruction 

    on peut très bien utiliser une balise php dans l'entouré de balise html

    dans un fichier .php => vous pouvez écrire TOUTES les balises html dans un fichier .php
    ul li div form header figure img p a strong ....

    écrire juste du php 
    écrire juste du php et html 
    écrire juste du php et html et css
    écrire juste du php et html et css et js 


windows http://localhost/03-variable.php => c:\xampp\htdocs\03-variable.php
MacOS http://localhost:8888/03-variable.php => /Application/MAMP/htdocs/03-variable.php
Linux http://localhost/php/03-variable.php => /var/www/html/php/03-variable.php

-->