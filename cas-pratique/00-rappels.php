
<!-- 
    1 créer un nouveau dossier dans le dossier htdocs / (pour Moussa dans le dossier php) => cas-pratique

    2 // créer une nouvelle page php => 00-rappels.php
    //windows http://localhost/cas-pratique/00-rappels.php => c:\xampp\htdocs\cas-pratique\00-rappels.php
    //MacOS http://localhost:8888/cas-pratique/00-rappels.php => /Application/MAMP/htdocs/cas-pratique/00-rappels.php
    //Linux http://localhost/php/cas-pratique/00-rappels.php  => /var/www/html/php/cas-pratique/00-rappels.php

    3 => il faut que votre XAMPP / MAMP soit démarré pour que ça fonctionne
rappels + formulaire 
    4 ouvrir votre navigateur pour appeler la page php que nous sommes en train d'éditer 
-->

<!--
    rappels :

    hier nous avons réalisé notre premier cas complet de page web
    dynamique 

    => une page de la page html a été générée via du PHP 
    => nous avons utilisé plusieurs mots clé du langage PHP pour générer la page html 
    => fonction function
    => boucle for(){}
    => concaténation 

    => ces trois techniques nous ont permi de générer une page d'accueil d'une site web ! 

    => si toutes ces techniques sont nouvelles (manière de faire)
    => essayer d'avoir une méthode de travail 

    => 1ère étape = raisonner => faire design / maquette de ce que vous voulez réaliser 
    => 2ème étape = intégration transformer votre maquette en html 
    => 3ème étape = voir ce qui est répété dans votre html pour utiliser des boucles / variable (string / integer / array)
        reverse engenering 

        donne un gateau => vous le goûter => quels sont les ingrédients ?? 
        maquette   => zones + contenu => balise html + PHP + css 
        wireframing => regarder un design et le découper en zone 

    => 4ème étape => optimisation (bien ranger le code pour qu'il soit facile s'y retrouver)
    => 5ème étape => mis en forme css et effets javascript 

    Mon conseil lorsque l'on commence =>  Ne pas brûler les étapes => être patient

    Un peu plus expérimenté / plus habité sur les langages  => etape 3 => etape 1 => etape 5
    (30 à 50 heures pour faire un voir deux sites à la main /)
-->

<!-- 
 formulaire => c'est du html 

 5 balises principales pour faire des formulaires 
    form => contenir l'ensemble des champs du formulaire => zone où les gens vont écrire 
    label => étiquette description du champ 
    input => le champ dans lequel les internautes vont interagir
        attention il y a normément de manière de l'utiliser !!!!!
        il dispose de plusieurs variantes !!
        NON ce n'est pas qu'un champ de saisi !!!

    textarea => champ de saisi multiligne 
    select => menu déroulant
-->

<!-- 
    1er formulaire :

    prenom 
    email 
    bouton valider son inscription
-->

<form>
    <div>
        <label>votre prénom </label>
        <input type="text">
    </div>
    <div>
        <label>votre email </label>
        <input type="email"><!--  si la personne ne saisit pas un email test@yahoo -->
    </div>
    <div>
        <input type="submit"> <!-- submit => un bouton -->
    </div>
</form>

<!-- 
    2ème formulaire :

    prenom 
    date et heure de rdv
    fr ou en 
    bouton valider son inscription
-->
<form>
    <div>
        <label>Prénom</label>
        <input type="text">
    </div>
    <div>
        <label>date et heure de rdv :</label>
        <input type="datetime-local">
    </div>
    <div>
        <input type="radio">
        <label for="">Français</label>
        <input type="radio">
        <label for="">Anglais</label>
    </div>
    <div>
      <input type="submit"> <!-- submit => un bouton -->
    </div>
    <!--  google => Modzila Développeur Network => https://developer.mozilla.org/fr/docs/Web/HTML/Element/Input -->
</form>

<!-- 
        Dans une nouvelle page 

        // créer une nouvelle page php => 01-portfolio.php
        //windows http://localhost/cas-pratique/01-portfolio.php => c:\xampp\htdocs\cas-pratique\01-portfolio.php
        //MacOS http://localhost:8888/cas-pratique/01-portfolio.php => /Application/MAMP/htdocs/cas-pratique/01-portfolio.php
        //Linux http://localhost/php/cas-pratique/01-portfolio.php  => /var/www/html/php/cas-pratique/01-portfolio.php

        je vous donne un design sous forme de texte  => Veuillez le transformer en html + PHP 

        section ayant la class zone1
            une grande image => largeur 800 x 250
            3 paragraphes de 10 mots 
        
        section ayant la class zone2
            10 articles
                image => 150 x 100
                p 3 mots
                lien hypertexte  lire la suite   <a href="#">lire la suite</a>
-->



