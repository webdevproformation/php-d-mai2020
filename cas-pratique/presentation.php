<?php require "lib.php"?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Présentation</title>
    <link href="style.css" rel="stylesheet">
</head>
<body>
    <div class="container presentation">
        <?php require "menu.php" ?>
        <section class="cv">
          <div>
             <?php  genererCompetence($competences) ;?>
          </div>
          <div>
            <h2>expérience</h2>
            <p>liste de mes expériences professionnelles </p>
            <div class="experiences-list">
             <?php genererExperience(4); ?>
            </div>
            
          </div>
        </section>
        <section class="formulaire">
            <form>
                <div>
                    <label for="">Prénom</label> 
                    <input type="text">
                </div>
                <div class="textarea">
                    <label for="">Votre demande</label>
                    <textarea></textarea>
                </div>
                <div>
                    <label for="">Téléphone</label>
                    <input type="text">
                </div>
                <div>
                    <label for="">email</label>
                    <input type="email">
                </div>
               
                <div  class="submit"><input type="submit"></div>
            </form>
        </section>

        <?php require "footer.php" ?>
    </div>
</body>
</html>