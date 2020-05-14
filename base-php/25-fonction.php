<!--
     // créer une nouvelle page php 
    //windows http://localhost/25-fonction.php => c:\xampp\htdocs\24-fonction.php
    //MacOS http://localhost:8888/25-fonction.php => /Application/MAMP/htdocs/24-fonction.php 
    //Linux http://localhost/php/25-fonction.php  => /var/www/html/php/24-fonction.php 
-->

<?php 
    // variable $mot = 2 ;
    // variable $mot2 = "<h2>Hello</h2>";
    // variable $mot3 = "<h2>Hello</h2>" == "<h2>Hello</h2>"; 

    // dans une variable on va stocker une valeur 

    // fonction => on va stocker dans un mot des instructions 

    function premierFonction () { 
        // écrire des instructions 
        $a = 2;
        $b = 4;
        echo "<p>". ( $a + $b ) . "</p>" ; // concaténation <p>6</p>
    }
    // on vient de stocker dans le mot premierFonction les trois instructions dans les accolades 
    // ne pas mettre $ comme première lettre du mot 

    // si je veux exécuter les instructions qui sont stockées dans le mot clé = dans la fonction

    premierFonction();
    // exécuter les instructions qui sont stockées dans la fonction

    // à la suite 
    // pouvez vous créer une fonction 
    //  le nom de la fonction est  aireRectangle 
    // cette fonction contient 3 instructions
    // créer une variable $largeur = 20 ;
    // créer une variable $hauteur = 30 ;
    // afficher dans le navigateur le résultat de $largeur *  $hauteur 

    // exécuter la fonction aireRectangle

?>
<?php 
function aireRectangle(){
    $largeur = 20 ;
    $hauteur = 30 ;
    echo "<p>". ( $largeur * $hauteur)."</p>";
}

aireRectangle();
?>

<?php 
    // fonction on lui mettre des arguments, paramètres

    function deuxiemeFonction ( $a , $b , $c){
        echo "
            <h1>$a</h1>
            <p>$b</p>
            <p>$c</p>
        "; 
    }
    // la fonction que nous venons de créer dispose de 3 arguments 
    // attention le séparateur entre les arguments, c'est la virgule (ne pas utiliser de ; entre les différents arguments du la fonction)
    // ces arguments jouent le rôle de variables que l'on va pouvoir inialiser (donner une valeur) lorsque l'on appelle la fonction 

    deuxiemeFonction ( "Bonjour" , 6 , "hello");

    deuxiemeFonction ( "Titre premier article" , "Introduction" , "Conclusion");
    // on va pouvoir choisir les valeurs des arguments au moment de l'appel de la fonction

    // pas de soucis pour mettre autant d'argument à une fonction que nécessaire 
    // en général on s'arrête à 5 arguments ( pour faciliter la lecteur du code )
?>
<!-- 
    créer une nouvelle fonction 
    nom : genererPage 
    dispose de 4 arguments 
        titre
        paragraphe
        nbCommentaires
        auteur 
    cette fonction dispose de 3 instructions
    si l'argument titre est différent d'une chaine vide et paragraphe est différent d'une chaine vide
        alors écrire dans le navigateur la chaine de caractère suivante
            <div>
                <h2>$titre</h2>
                <p>$paragraphe</p>
                <ul>
                    <li>nb commentaire : $nbCommentaire</li>
                    <li>auteur : $auteur</li>
                </ul>
            </div>
    sinon 
        <div>article non conforme</div>

    exécuter cette fonction avec les valeurs suivantes :
      1 : "article 2" ,"lorem ipsum ..." ,2 ,"John Doe"
      2 : "article 2", ""  ,  0, "John DOE"
-->
<?php
    function genererPage( $titre , $paragraphe , $nbCommentaires , $auteur){
        if( $titre != "" && $paragraphe != ""){
          // "article 2" != ""  && "" != ""
          //        true        &&  false
          // false
            echo "
                <div>
                    <h2>$titre</h2>
                    <p>$paragraphe</p>
                    <ul>
                        <li>nb commentaire : $nbCommentaires</li>
                        <li>auteur : $auteur</li>
                    </ul>
                </div>
            ";
        }
        else 
        {
            echo "<div>article non conforme</div>";
            // tu laisses un utilisateur créer un article => il se trompe : elle oublie qu'il faut 
            // qu'il faut donner un texte au paragraphe 
        }
    }

    genererPage("article 2" , "lorem ipsum ..." , 2 , "John DOE");
    genererPage("article 2" , "" , 0 , "John DOE"); // ne pas oublier les arguments 
?>
<!-- 
    à la suite de ce fichier créer un nouvelle fonction 
    nom genererPageArticles
    un seul argument $nbArticles
    dans cette fonction contient plusieurs instructions :

    si les paramètre nbArticle est strictement supérieur à 0
        alors excuter la boucle suivante
            for ( $i = 0 ; $i < $nbArticle ; $i++)
            {
                ecrire dans le navigateur le html suivant
                <div>
                    <h1>article n° $i</h1>
                    <p> lorem ipsum </p>
                </div>
            }
    sinon
        ecrire dans le navigateur 
        <p>Aucun article disponible</p>


    exécuter la fonction genererPageArticles 
    avec les arguments suivants : 10
                                  -1
                                  4
-->
<?php 
    function genererPageArticles($nbArticles){
        if( $nbArticles > 0){
            for( $i = 0 ; $i < $nbArticles ; $i++){
                echo "
                    <div>
                        <h1>article n° $i</h1>
                        <p>lorem ipsum</p>
                    </div>
                ";
            }
        }
        else{
            echo "<p>Aucun article disponible</p>" ;
        }
    }

    genererPageArticles(10) ;
    genererPageArticles( -1) ;
    genererPageArticles( 4) ;
?>

<!-- 
    // créer une nouvelle page php 
    //windows http://localhost/26-tableau.php => c:\xampp\htdocs\26-tableau.php
    //MacOS http://localhost:8888/26-tableau.php => /Application/MAMP/htdocs/26-tableau.php
    //Linux http://localhost/php/26-tableau.php  => /var/www/html/php/26-tableau.php
-->