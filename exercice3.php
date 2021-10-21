<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>exercice 3</title>
    <link rel="stylesheet" href="Index.css">
</head>

<body>
    <?php
    $array = array(
        "Perso1" => array(
            'Nom' => '<p>Godefroy</p>',
            'Prenom' => 'Jules',
            'MotDePasse' => 'MDP : Mot de passe'
        ),
    );    
    $array1 = array(
        "Perso2" => array(
            'Nom' => 'qsdqsdqsd',
            'Prenom' => '<p>qsdqsdqds</p>',
            'MotDePasse' => 'MDP : Mot de passe'
        ),
    );    
    $array2 = array(
        "Perso3" => array(
            'Nom' => 'qsdfqsf',
            'Prenom' => 'qsdqsdf',
            'MotDePasse' => 'MDP : Mot de passe'
        ),
    );
    echo $array["Perso1"]["Nom"];
    echo $array1["Perso2"]["Prenom"];
    echo $array2["Perso3"]["MotDePasse"];

    ?>
</body>
</html>