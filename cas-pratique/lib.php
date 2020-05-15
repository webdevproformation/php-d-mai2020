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

function genererPresentation( $titre ,  $nbParagraphe ){
    echo "<img src=\"https://source.unsplash.com/random/800x800\" alt=\"\">";
    echo "<div>";
    echo "<h1>$titre</h1>";
    for($i = 0 ; $i < $nbParagraphe ; $i++){
        echo "<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates minus quae inventore iure aliquid totam?</p>";
    }
    echo "</div>";
}

$cordonnees = [
    "tél : 0101010100101",
    "email : contact@yahoo.fr" ,
    "adresse : 75 rue du paradis 75000 Paris"
];

function genererContact($cordonnees){

    echo "<h2>Nous contacter</h2>";
    echo "<ul>";
    foreach($cordonnees as $item){
        echo "<li>$item</li>" ;
    }
    echo "</ul>";
}


function genererExperience($nb){
    for($i = 0 ; $i < $nb ; $i++){
        echo "<article>
            <h3>titre</h3>
            <img src=\"https://via.placeholder.com/40\" alt=\"\">
            <ul>
                <li>Lorem, ipsum.</li>
                <li>Repudiandae, commodi.</li>
            </ul>
        </article>";
    }
}

$competences = ["HTML","CSS", "Javascript" , "PHP" , "Wordpress"];


function genererCompetence($competences){
    echo "<h2>Compétences</h2>
    <p>voici la liste de mes compétences</p>";
    echo "<ul>";
    foreach($competences as $item){
        echo "<li>$item</li>" ;
    }
    echo "</ul>";
}
?>