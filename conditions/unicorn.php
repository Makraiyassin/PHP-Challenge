<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercice 10.2</h1> 

    <form action="">
        <label for="">you are: </label>
            <br>
        <select name="you" id="you">
            <option value="human">a human</option>
            <option value="cat">a cat</option>
            <option value="unicorn">a unicorn</option>
        </select>
        <input type="submit" value="ok">
    </form>
    <?php
     if(isset($_GET['you'])){
        $you = $_GET['you'];
        switch($you){
            case 'human' :
                echo '<img src="https://media.giphy.com/media/3o7qDQ4kcSD1PLM3BK/giphy.gif">';
                break;
            case 'cat' :
                echo '<img src="https://media.giphy.com/media/lJNoBCvQYp7nq/giphy.gif">';
                break;
            default:
                echo '<img src="https://media.giphy.com/media/UopHA6LC38LhS/giphy.gif">';
        }                
    }
    
    ?>
</body>
</html>