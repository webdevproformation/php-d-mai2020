<?php 
function genererZone1( $nbParagraphe )
{
    // <!-- placeholder => unsplash random =>  -->
    echo "<img src=\"https://source.unsplash.com/random/800x250\" alt=\"\">";
    for($i = 0 ; $i < $nbParagraphe  ; $i++){
        echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aspernatur, numquam.</p>" ;
    }
}
function genererZone2( $nbArticle ){
    for($i = 0 ; $i < $nbArticle ; $i++){
        echo " 
        <article>
            <img src=\"https://source.unsplash.com/random/150x100\" alt=\"\">
            <p>Lorem, ipsum dolor.</p>
            <a href=\"#\">lire la suite </a>
        </article>
        " ;
    }
}
// nouveau mot clé de PHP => require() ;
// un peu l'équivalent le balise link pour les fichiers css 
// pouvoir stocker une partie du code php dans un autre fichier 
// nous allons pouvoir mettre notre code php dans un fichier dédié .php / un peu comme le css on crée un fichier .css 
// convention lib.php => ????? librairie => fichier qui stocke toutes les fonctions que nous allons utiliser dans notre site 
// bibliotheque.php => ranger des livres

?>