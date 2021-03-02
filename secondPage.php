<?php
session_start();
$_SESSION['prenom'] = isset($_POST['prenom']) ? $_POST['prenom'] : NULL;
$_SESSION['age'] = isset($_POST['age']) ? $_POST['age'] : NULL;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>PHP-Basic</title>
    <link rel="stylesheet" type="text/css" href="style.scss">
</head>
<body>
<div class="text-box">
    <p class="text"> Bonjour <?php echo $_SESSION['prenom'];?></p>
    <p class="text"> Vous êtes agés de <?php echo $_SESSION['age'];?></p>
</div>
</body>
</html>
