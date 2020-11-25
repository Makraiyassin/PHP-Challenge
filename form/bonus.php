<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact form</title>
</head>
<body>
    <h1>Contactez-nous</h1>
        <?php
            if (isset($_POST['email'])) {
                $errors = array();

                // 1. Sanitisation
                $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
        
                // 2. Validation
                if (false === filter_var($email, FILTER_VALIDATE_EMAIL)){
                $errors["$email"] = "ce mail n'est pas valide";
                }
                // 3. execution
                if (count($errors)> 0){
                    foreach ($errors as $key => $value) {
                        $mailadress = $key;
                        $mailmsg = $value;
                    }
        
                    echo  
                    '<div id="message" style = "padding: 10px 100px; display: inline-grid;border: 1px black solid;color:white;background-color: red">
                        Erreurs: <br>'.$mailadress.' : '.$mailmsg.'<br>
                    </div>';
                    // var_dump($errors);
                }else{
                    echo 
                    '<div id="message" style = "padding: 10px 100px; display: inline-grid;border: 1px black solid;background-color: #aceaac">
                    "OK"
                    </div>';
                }
        
                // If we get here, it's because everything's fine, we can record
                // $bdd = new PDO('mysql:host=localhost;dbname=test','root', '');
                //...    
            }
        ?>

    <form method = "post" action="">
        <label for="name">Entrez votre nom</label>
        <br>
        <input type="text" name="name" required>
        <br>
        <label for="email">E-mail(*):</label>
        <br>
        <input type="text" name="email">
        <br>
        <label for="pass">Mot de passe:</label>
        <br>
        <input type="password" name="pass">
        <br>
        <label for="msg">Message:</label>
        <br>
        <textarea name="msg" cols="30" rows="10"></textarea>
        <br>
        <input type="submit" value="Envoyer">
    </form>
    <style>
        body{
            text-align: center;
        }
    </style>
    <?php
    ?>
</body>
</html>