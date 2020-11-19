<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <?php if (isset($_GET['name'])){ ?>
    	<h1>Aloha <?php echo $_GET['name']; ?>!</h1>
        <?php
        $a = 5 ;
        $a = $a + 37 ;
        echo  $a ;
        ?>
   	<?php } ?>
</body>
</html>
