<!-- 
    // créer une nouvelle page php 
    //windows http://localhost/base-php/28-foreach.php => c:\xampp\htdocs\base-php\28-foreach.php
    //MacOS http://localhost:8888/base-php/28-foreach.php => /Application/MAMP/htdocs/base-php/28-foreach.php
    //Linux http://localhost/php/base-php/28-foreach.php  => /var/www/html/php/28-foreach.php

-->
<?php 

    $tableau = [ 
        "article 1", // 1er élément => index 0
        "article 2" , // 2ème élément => index 1
        "article 3" ,
        "article 4" ,
        "article 5" 
     ];

     // ce que je veux faire afficher à l'écran le texte suivant
     // <p>article 1</p>
     // <p>article 2</p>
     // <p>article 3</p>
     // <p>article 4</p>
     // <p>article 5</p>

    // 1 ème manière => répéter la même instruction
     echo "<p>".$tableau[0]."</p>";
     echo "<p>".$tableau[1]."</p>";
     echo "<p>".$tableau[2]."</p>";
     echo "<p>".$tableau[3]."</p>";
     echo "<p>".$tableau[4]."</p>"; // répéter quasiment la même instruction 
     echo "<hr>";

     // pour éviter de répéter la même instruction => boucle for (){ }
     // 2ème manière utiliser une boucle for
     for($i = 0 ; $i < 5 ; $i++){
        echo "<p>".$tableau[$i]."</p>";
     }
     echo "<hr>";
     
     //3ème manière de faire la même chose boucle for avec la fonction count()
     for($i = 0 ; $i < count($tableau) ; $i++ ){
        echo "<p>".$tableau[$i]."</p>";
     }
     // permet de parcourir en intégralité un tableau quelquesoit la quantité d'élément dans le tableau 
     echo "<hr>";

     //4ème maniere de faire la même chose foreach(){}
     foreach($tableau as $value){ 
        echo "<p>".$value."</p>";
     }
     // foreach est équivalent de for avec un count 
     // cette dernière syntaxe à l'avantage d'être plus courte à écrire 
     // foreach permet de parcourir un tableau dans son intégralité 
     // as mot clé qui l'on ne utiliser que dans le cadre de la boucle foreach 
     // as entre le tableau et une variable que tu peux nommer comme tu veux 
     // cette variable va être chaque élément du tableau au passage de boucle
?>
<!-- 
 à la suite du fichier 

 créer un tableau ayant les valeurs suivantes :
$listeMarque = ["Toyota", "BMW", "Skoda", "Nissan"] ;

afficher dans le navigateur les chaines de caractères suivantes :

voiture n° 1 a la marque Toyota
voiture n° 2 a la marque BMW
voiture n° 3 a la marque Skoda
voiture n° 4 a la marque Nissan
-->

<?php 
    // ma version 
    echo "<hr>";
    $listeMarque = ["Toyota", "BMW", "Skoda", "Nissan"] ;

    for($i = 0 ; $i < count($listeMarque) ; $i++){
        $numero = $i + 1;
        echo "<p>voiture n° $numero a la marque $listeMarque[$i]</p>";
    }

    // autre solution Moussa
    // boucle dans une boucle
    echo "<hr>";
    foreach($listeMarque as $index => $v){ // récupérer l'index dans la boucle foreach
            $num = $index + 1 ;
            echo "<p>voiture n° $num : $v </p>";
    }

    // autre solution Raf 
    // utiliser la balise html table
    // table > ligne tr (table row )
    //  th (table head) et td (table div)
    echo "<hr>";

    echo "
        <table border>
        <tr>
            <th>N°</th>
            <th>Voiture</th>
        </tr> ";
    
    $nbListes= count($listeMarque);

    for($elt=0;$elt<$nbListes;$elt++ ){
        echo "
            <tr>
                <td>".($elt + 1 )."</td>
                <td>$listeMarque[$elt]</td>
            </tr> 
        
        "; 
    }
    echo "</table>"; // => site internet Modzila Developpeur Network (MDN)
    // https://developer.mozilla.org/fr/ <table>

?>


<!-- 
    tableaux multi dimensionnels

    tableau qui contiennent des tableaux => créer des vrais base de données à la main

    => stocker des données de manière en encore plus complexe => MySQL / SQL  
-->

<?php 
    $tableauSimple = [ 
            "article 1", 
            "article2" 
    ];

    // notre premier tableau multi dimensionnel 

    $tableanMultiDimensions = [
            [
                "article 1",
                "lorem",
                2,
                "John DOE"
            ],
            [
                "article 2",
                "lorem",
                0,
                "Jacques DOE"
            ]
    ];
    // tableau qui contient des tableaux == beaucoup à une base de données == mini base de données

    // boucle avec les tableaux => pour générer on va beaucoup utiliser
    // tableaux multidimensionnels
    // portée des variables => très utilisé pour faire un site 

    // classique des boucles => table de multiplication => boucle dans une boucle

    
     // balise table
?>

<!-- 
    // créer une nouvelle page php 
    //windows http://localhost/base-php/29-table-multiplication.php => c:\xampp\htdocs\base-php\29-table-multiplication.php
    //MacOS http://localhost:8888/base-php/29-table-multiplication.php => /Application/MAMP/htdocs/base-php/29-table-multiplication.php
    //Linux http://localhost/php/base-php/29-table-multiplication.php  => /var/www/html/php/29-table-multiplication.php

-->