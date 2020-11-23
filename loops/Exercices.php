<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Exerice 0</h1>

    <?php
        $pronouns = array ('I', 'You', 'He/She','We', 'You', 'They');
        foreach ($pronouns as $key => $value) {
            echo $value." code <br>";
        }
    ?>

    <h1>Exerice 1</h1>

    <?php
        $a = 1;
        
        while ($a <= 120) {
            echo " $a ";  
            $a++;
        }    
    ?>

    <h1>Exerice 2</h1>

    <?php
        $a = 1;
        
        for($a=1; $a <= 120; $a++){
            echo " $a ";  
        }
    ?>

    <h1>Exerice 3</h1>

    <?php
        $name = ["Yassin","Hamza","Youssef","Myriam","Naima","Abdelmajid"];
        foreach ($name as $key => $value) {
            echo "$value<br>";
        }
    ?>

    <h1>Exerice 4 & 5</h1>
    
    <form method="get" action="">
        <label for="countries">Choisissez votre pays d'origine:</label>
        <br>
        <select name="countries" id="countries">
            <?php
                $countries = array(
                    "BE" => "Belgique",
                    "FR" => "France",
                    "ES" => "Espagne",
                    "PO" => "Portugal",
                    "MA" => "Maroc",
                    "AL" => "Algerie",
                    "SU" => "Suisse",
                    "IT" => "Italie",
                    "LU" => "Luxembourg",
                    "AL" => "Allemagne",
                    "PB" => "Pays-bas",
                    "AN" => "Angleterre",
                    "Autre" => "Autre"
                );
                foreach ($countries as $key => $value){
                    echo "<option value=$key>$value</option>";
                }
            ?>
        </select>
    </form>
</body>
</html>