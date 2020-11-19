<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 
        $name = "Yassin";
        $age = 28;
        $eye = "brown/green";
        $family = array("Abdelmajid","Naïma","Youssef", "Hamza", "Myriam");
        $hungry = false;
    ?>
    <p>Hi! My name is <?php echo $name;?>.</p>
    <p>I'm <?php echo $age;?> years.</p>
    <p>My eyes are <?php echo $eye;?> </p>
    <p>La première personne dans ma famille est: <?php echo $family[0];?></p>
    <p>Ma soeur s'appelle: <?php echo $family[4];?></p>
    <p>Est-ce que j'ai faim? <?php if($hungry == true){echo "OUIIII !";}else{echo "NON";};?> </p>
</body>
</html>