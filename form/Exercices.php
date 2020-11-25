<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method = "post" action="">
        <label for="name">What's your name?</label>
        <br>
        <input type="text" name="name">
        <br>
        <label for="age"> How old are you?</label>
        <br>
        <input type="number" name="age">
        <br>
        <label for="prefer"> You prefer:</label>
        <br>
        <input type="radio" name="prefer" value="Andy Warhol"><label for="prefer">Andy Warhol</label>
        <input type="radio" name="prefer" value="Basquiat"><label for="prefer">Basquiat</label>
        <br>
        <label for="life">Tell me about your life:</label>
        <br>
        <textarea name="life" cols="30" rows="10"></textarea>
        <br>
        <input type="submit">
    </form>
    <?php
        print_r($_POST);
    ?>
</body>
</html>