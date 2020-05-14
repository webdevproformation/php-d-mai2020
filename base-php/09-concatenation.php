<!-- 
    créer un nouveau fichier php
    windows http://localhost/09-concatenation.php => c:\xampp\htdocs\09-concatenation.php
    MacOS http://localhost:8888/09-concatenation.php => /Application/MAMP/htdocs/09-concatenation.php
    Linux http://localhost/php/09-concatenation.php => /var/www/html/php/09-concatenation.php
-->
<?php 
    // π => le symbole n' a pas de valeur en PHP 
    // juste un symbole
    echo 2 + 3 ; // somme de deux chiffres => addition 
    echo "<br>";

    // somme de deux string 

    $lieu = "75 boulevard du Paradis";
    $ville = "Paris" ;

    // additionner ces deux chaines de caractères 

    $adresseComplete = $lieu . $ville ; // . additionner la contenu de $lieu au contenu de $ville 
    // pour additionner des chaines de caractères en php utiliser le symbole . 
    // concaténation  = additionner des chaines de caractères

    echo "<br>";
    echo $adresseComplete;

    $marque = "Renault";
    $modele = "Espace";
    $finitions = "HDI" ;

    $monVehicule = $marque . $modele . $finitions ;
    echo "<br>" . $monVehicule ; // saut de ligne pour afficher une variable qui est elle même 
    // le résultat d'une concaténation
    // => PHP va calculer la page => PHP va concaténer toutes les balises html pour générer une page complète 
?>
<!--
    créer un nouveau fichier php
    windows http://localhost/10-error.php => c:\xampp\htdocs\10-error.php
    MacOS http://localhost:8888/10-error.php => /Application/MAMP/htdocs/10-error.php
    Linux http://localhost/php/10-error.php => /var/www/html/php/10-error.php
    
     => activer l'affichage des message d'erreurs dans php 
     <?php phpinfo() ?> => Loaded Configuration File
    display_errors = on
    dans le fichier php.ini
-->
