<!DOCTYPE html>
<html lang="fr">
<head>

    <title>Exercice 1</title>
    <link rel="stylesheet" href="Index.css">
</head>
<body>
    
    <?php
        $Nombre = rand ( 0 , 100 );
        if ($Nombre % 2 == 0) {
        echo "<div class=red>$Nombre est Paire</div>";
        }else{
        echo "<div class=blue>$Nombre est  Impaire</div>";
        }
    ?>
</body>
</html>