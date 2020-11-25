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
