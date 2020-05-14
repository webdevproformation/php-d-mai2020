<!-- 
    // créer une nouvelle page php 
    //windows http://localhost/base-php/31-page-complete.php => c:\xampp\htdocs\base-php\31-page-complete
    //MacOS http://localhost:8888/base-php/31-page-complete.php => /Application/MAMP/htdocs/base-php/31-page-complete
    //Linux http://localhost/php/base-php/31-page-complete.php  => /var/www/html/php/31-page-complete

    enoncé => via du PHP et du html 
    => finira par la mis en forme via du css
    
    section class="zone1"
        contenir 4 articles
            article
                h2 > article num
                p  > lorem 5 mots
                lien hypertexte > lire la suite
    
    section class="zone2"
        contenu 20 articles 
            article 
                img src = "https://via.placeholder.com/200x400
                liste non ordonnées
                    4 items > catégorie chiffre
                
-->
<?php 
    function genererZone1(){
        for($i = 0 ; $i < 4 ; $i++){
            echo "<article>
                    <h2>article $i</h2>
                    <p>lorem ipsum et deux autres mots</p>
                    <a href=\"#\">lire la suite</a>
                </article>";
        }
    }
    function genererZone2(){
        for($i = 0 ; $i < 20 ; $i++){ 
            echo "<article>
                <img src=\"https://via.placeholder.com/400x200\" alt=\"\">
                <ul> ";
                for($j = 0 ; $j < 4 ; $j++){
                    echo "<li>catégorie $j</li>" ;
                }
            echo "</ul>
            </article>";
        }
        // même image / même texte // $tableau => donnée // boucle for () foreach boucler sur tableau 
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        /* mise en page  */
        body{
            width:1000px;
            margin:0 auto;
        }
        .zone1{
            display:grid; /* permet de mettre les enfants de la zone les un a côté des autres */
            grid-template-columns: repeat(4, 1fr); /* 4 colonnes  */
            grid-gap:20px; /* espace entre les colonnes de 20px */
            margin-bottom : 20px;
            text-align:center;
        }
        .zone1 article{
            border:1px solid grey;
            border-radius : 5px;
            padding:20px 0;
        }

        .zone2{
            display:flex;
            flex-wrap : wrap;
            justify-content: space-between;
        }

        .zone2 article{
            width:30%;
        }

        .zone2 article img{
            width:100%;
            border-radius : 5px;
        }
    </style>
</head>
<body>
    <section class="zone1">
        <?php genererZone1() ; ?>
    </section>
    <section class="zone2">
        <?php genererZone2() ; ?>
    </section>
</body>
</html>
<!--
    0 maquette de ce que tu veux faire ???
    1 ecrire en html 
    2 transformer une partie de ce html en PHP (boucle / variable / ... if )
    3 optimiser le PHP (ranger le PHP de manière optimale)
    4 css c 'est la fin pour la mise en forme finale 
-->