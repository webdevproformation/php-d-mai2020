<!-- 
    // créer une nouvelle page php 
    //windows http://localhost/20-exo.php => c:\xampp\htdocs\20-exo.php
    //MacOS http://localhost:8888/20-exo.php => /Application/MAMP/htdocs/20-exo.php 
    //Linux http://localhost/php/20-exo.php  => /var/www/html/php/20-exo.php 

    $age = 20 ;

    si la variable age inférieure à 18, écrire dans le navigateur vous êtes mineur
    si la variable age inférieure à 30, écrire dans le navigateur vous êtes un jeune adulte
    si la variable age inférieure à 70, écrire dans le navigateur vous êtes un adulte
    sinon écrire dans le navigateur vous êtes un retraité !


-->

<?php 
    $age = 15 ;

    if($age < 18){
        echo "<p>vous êtes mineur</p>";
    }
    elseif($age < 30){
        echo "<p>vous êtes un jeune adulte</p>";
    }
    elseif($age < 70){
        echo "<p>vous êtes un adulte</p>";
    }
    else{
        echo "<p>vous êtes un retraité !</p>";
    }
    // Diabé => 0 et 18
    // 18 et 30 
    //  => l'ordre dans lequel vous écrivez les conditions est IMPORTANT
    // => si vous écrivez les conditions dans un autre ordre => vous pouvez ne jamais arriver à exécuter la condition souhaitée car il y a une condition avant qui est vrai 
    if($age >= 18 && $age < 30){ // interval
        echo "<p>vous êtes un jeune adulte</p>";
    }
    elseif($age >= 0 && $age < 18){
        echo "<p>vous êtes mineur</p>";
    }
    elseif($age >= 30 && $age < 70){
        echo "<p>vous êtes un adulte</p>";
    }
    else{
        echo "<p>vous êtes un retraité !</p>";
    }
    // switch 
?>
<?php 
    // alternative à if elseif else 

    $nationalite = "fr" ;

    switch ($nationalite)
    {
        case ("fr") : echo "je suis français";
        case "en" : echo "je suis anglais" ;
        case ("fr") : echo " et j'habite à Paris";
    }

    // réponse tout à l"heure 
?>
<!-- 
    // créer une nouvelle page php 
    //windows http://localhost/21-for.php => c:\xampp\htdocs\21-for.php
    //MacOS http://localhost:8888/21-for.php => /Application/MAMP/htdocs/21-for.php 
    //Linux http://localhost/php/21-for.php  => /var/www/html/php/21-for.php 
-->