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
<?php phpinfo() ?>
<!-- 
    XAMPP => installé en même temps la version 7.4.5 du langage 

    Loaded Configuration File : C:\xampp\php\php.ini 
    le chemin du fichier php.ini => définir comment PHP va fonctionner 
    en gros => est que s'il y a une erreur de codage 
    est ce que j'affiche les messages d'erreur dans la navigateur 
   
    display_errors
    => chercher le paramètre => dans la section Core (Coeur de PHP) 
    display_errors => On / Off 

    => sécurité (erreur dans votre code => il ne faut pas le montrer => faciliter 
    => la vie des pirates informatiques )

    => off => production (même si erreur dans le code => page blanche)
    => beaucoup de personnes qui exécutent le code 
    bien intentionnés / mal intentionnés

    => on => développement (si tu as erreur dans ton code => où ???)
    => 1 seule personne qui voit le code => développeur

    Linux  :
    sudo vi /etc/php/php.ini
    modifier le fichier
    /etc/init.d/apache2 restart 
-->
<!--
    créer un nouveau fichier php
    windows http://localhost/11-exo.php => c:\xampp\htdocs\11-exo.php
    MacOS http://localhost:8888/11-exo.php => /Application/MAMP/htdocs/11-exo.php
    Linux http://localhost/php/11-exo.php => /var/www/html/php/11-exo.php
    
    2 ce fichier contient trois variables
    titre = "M"
    prenom = "John"
    nom = "Doe"

    3 écrire la phrase suivante dans le navigateur en utilisant les 3 variables:

    Je m'appelle Monsieur John Doe

-->
