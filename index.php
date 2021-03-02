<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP-Basic</title>
    <link rel="stylesheet" type="text/css" href="style.scss">
    <script src="validation.js"></script>
</head>
<body>
<div class="welcomeText">BIENVENUE</div>
<form action="secondPage.php" method="post">
    <div class="inputZone">
        <div class="text">
            Entrez votre prenom :
        </div>
        <input type="text" id="prenom" name="prenom" oninput="validationInput()" class="input">
        <div class="erreurInput" id="prenomValidation" value="false"></div>
    </div>
    <div class="inputZone">
        <div class="text">
            Entrez votre age :
        </div>
        <input type="text" id="age" name="age" oninput="validationInput()" class="input">
        <div class="erreurInput" id="ageValidation" value="false"></div>
    </div>
    <input type="submit" value="Valider" onclick="validationFormulaire()" class="valider"/>
</form>
</body>
</html>
