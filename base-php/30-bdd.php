<!-- 
    // créer une nouvelle page php 
    //windows http://localhost/base-php/30-bdd.php => c:\xampp\htdocs\base-php\30-bdd.php
    //MacOS http://localhost:8888/base-php/30-bdd.php => /Application/MAMP/htdocs/base-php/30-bdd.php
    //Linux http://localhost/php/base-php/30-bdd.php  => /var/www/html/php/30-bdd.php
-->

<?php 
 // lorsque l'on fait un site internet  => base de données => ressemble énormément à un tableau  multidimensionnel
?>
<style>
    .container{
        display: grid;
        grid-template-columns : repeat(3, 1fr);
        grid-gap:10px;
    }
</style>
<div class="container">
<article>
    <h2>Article 1</h2>
    <img src="https://via.placeholder.com/200x150" alt="">
    <p>Lorem ipsum 1</p>
</article>
<article>
    <h2>Article 2</h2>
    <img src="https://via.placeholder.com/200x150" alt="">
    <p>Lorem ipsum 2</p>
</article>
<article>
    <h2>Article 3</h2>
    <img src="https://via.placeholder.com/200x150" alt="">
    <p>Lorem ipsum 3</p>
</article>
<article>
    <h2>Article 4</h2>
    <img src="https://via.placeholder.com/200x150" alt="">
    <p>Lorem ipsum 4</p>
</article>
<article>
    <h2>Article 5</h2>
    <img src="https://via.placeholder.com/200x150" alt="">
    <p>Lorem ipsum 5</p>
</article>
</div>


<?php 
    echo "<hr>";
    echo "<div class=\"container\">"; // échapper le symbole " dans les chaines de caractères 
    for($i = 1 ; $i <= 200 ; $i++ ){
        echo "
        <article>
            <h2>Article $i</h2>
            <img src=\"https://via.placeholder.com/200x150\" alt=\"\">
            <p>Lorem ipsum  $i</p>
        </article>";
    }
    echo "</div>";
?>
<!-- 
    à la suite du fichier : 
    via php et les boucles générer le code html générer à la suite une gallerie photo 

    <div class="gallery">
        <figure>
            <img src="https://via.placeholder.com/200x150" alt="">
            <p>image n° 1</p>
        </figure>

        .... 

        <figure>
            <img src="https://via.placeholder.com/200x150" alt="">
            <p>image n° 20</p>
        </figure>
    </div>

-->

<?php 
    echo "<div class=\"gallery\">";
        for($i = 1 ; $i <= 20 ; $i++ ){
            echo "
            <figure>
                <img src=\"https://via.placeholder.com/200x150\" alt=\"\">
                <p>image n° $i</p>
            </figure>
            ";
        }
    echo "</div>";
?>



<!-- 
    // créer une nouvelle page php 
    //windows http://localhost/base-php/31-page-complete.php => c:\xampp\htdocs\base-php\31-page-complete
    //MacOS http://localhost:8888/base-php/31-page-complete.php => /Application/MAMP/htdocs/base-php/31-page-complete
    //Linux http://localhost/php/base-php/31-page-complete.php  => /var/www/html/php/31-page-complete
-->
