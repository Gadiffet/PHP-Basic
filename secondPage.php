<?php
session_start();
$_SESSION['prenom'] = $_POST['prenom'];
$_SESSION['age'] = $_POST['age'];
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
