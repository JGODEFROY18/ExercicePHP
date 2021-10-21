<html>
    
    <head><title>Exercice 3</title></head>

    <body>
        <?php
                $Table[0] = array ("Nom" => "Godefroy", "Prénom" => "Jules", "MDP" => "2456");
                $Table[1] = array ("Nom" => "Dupont", "Prénom" => "Yannis", "MDP" => "4562");
                $Table[2] = array ("Nom" => "Dupontreue",  "Prénom" =>  "Theo", "MDP" => "6542");
        
                echo "<table>";

                for ($i = 0; $i <3; $i++) {
            
    
                    echo "<tr></tr>";
            
        
                foreach ($Table[$i] as $value) {
            
                    echo "<td>";
                    echo "$value";
                }
            }
                echo "</table>";

            ?>

            <a href="/Godefroy/">Acceuil</a>

    </body>

</html>