
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <h1>Exercice d'intro</h1>

    <?php 
        $temperature = 20;
        
        if( $temperature >= 15 ) {
            $clothes = "T-shirt";
            $should_i_wear_a_scarf = false;
        } else {
            $clothes = "Pull-over";
            $should_i_wear_a_scarf = true;
        }
        
        if ($should_i_wear_a_scarf == true){
            grab_scarf_from_door_hanger($clothes);
        }else{
            cover_my_chest_with($clothes);
        }

        function grab_scarf_from_door_hanger($clothes){
            echo "I'm cold. I have a $clothes";
        }
        function cover_my_chest_with($clothes){
            echo "la température est bonne tu peux mettre un $clothes";
        };
    ?>

    <br>

    <h1>Exercice 1.1</h1>

    <?php 
        $room_is_filthy = true;

        if( $room_is_filthy == true ){
            echo "Yuk, Room is dirty : let's clean it up !";
            cleanup_room(); 
        } else {
            echo "<br>Nothing to do, room is neat.";
        }
        function cleanup_room(){
            $room_is_filthy = false;
            if( $room_is_filthy == false ){
                echo "<br>Room is now clean!";
            }
        }
    ?> 

    <br>

    <h1>Exercice 1.2</h1> 

    <?php
        // Create the array of possible states
        $possible_states = array("Disgusting","dirty","clean");

        // When testing, change the index value to navigate to the possible array values
        $room_filthiness = $possible_states[1]; 

        if($room_filthiness == "Disgusting"){
            echo "Yuk, Room is Disgusting! Let's clean it up !";
        } else if( $room_filthiness == "dirty" ){
            echo "Yuk, Room is dirty : let's clean it up !";
        // ...
        } else {
            echo "Nothing to do, room is neat.";
        }
    ?>
    
    <br>

    <h1>Exercice 2</h1> 

    <?php
    
        // 2. "Different greetings according to time" Exercise

        $now = time(); // How to get the current time in PHP ? Google is your friend ;-)

        $heure = (date("h",$now)+1) ;
        $min = date("i",$now);
        // $sec = (date("s",time()));

        // Test the value of $now and display the right message according to the specifications.
        if($heure >= 5 && $heure < 9){
            echo  "Good morning !";
        }else if($heure >= 9 && $heure < 12){
            echo  "Good day!";
        }else if($heure >= 12 && $heure < 16){
            echo  "Good afternoon!";
        }else if($heure >= 16 && $heure < 21){
            echo  "Good evening!";
        }else{
            echo  "Good night!";
        }
        
        // if($min == 4){
        //     echo "<br>"."ok";
        // }else{
        //     echo "<br> not ok";
        // }

        // echo "<br>".(date("h",$now)+1).":".date("i",$now).":".date("s",$now);
        // echo "<br>".$heure .":".$min."<br>";
        // echo date_default_timezone_set('Europe/London'); // fucntion de bryan: donne 1 ...

    ?>   

    <br>

    <h1>Exercice 3 & 4</h1> 

    <form method="get" action="">
        <label for="age"><label>Age</label>
        <input type="" name="age">
        <br>
        <label for="gender"><label>select your gender: </label>
        <br>
        <input type="radio" name="gender" value ="female"><label>Female</label>
        <br>
        <input type="radio" name="gender" value ="male"><label>Male</label>
        <br>
        <label for="language"><label>Do you speak English ? </label>
        <br>
        <input type="radio" name="language" value ="yes"><label>YES</label>
        <br>
        <input type="radio" name="language" value ="no"><label>NO</label>
        <br>
        <input type="submit" name="submit" value="Greet me now">
        <br>
    </form>

    <?php
        if (isset($_GET['age'])) {
            if( $_GET['age'] < 12 ){
                if ($_GET['language'] == "yes") {
                    if($_GET['gender'] == "female"){
                        echo "Hello little girl!" ;
                    }else{
                        echo "Hello kiddo!";
                    }
                }else{
                    if($_GET['gender'] == "female"){
                        echo "Aloha little girl!" ;
                    }else{
                        echo "Aloha kiddo!";
                    }    
                }
            }else if ( $_GET['age'] >= 12 && $_GET['age'] < 18){
                if ($_GET['language'] == "yes") {
                    if($_GET['gender'] == "female"){
                        echo "Hello Miss Teen!" ;
                    }else{
                        echo "Hello boy !";
                    }
                }else{
                    if($_GET['gender'] == "female"){
                        echo "Aloha Miss Teen!" ;
                    }else{
                        echo "Aloha boy !";
                    }    
                }
            }else if ( $_GET['age'] >=18 && $_GET['age'] < 115){
                if ($_GET['language'] == "yes") {
                    if($_GET['gender'] == "female"){
                        echo "hello woman!" ;
                    }else{
                        echo "Hello Man !";
                    }
                }else{
                    if($_GET['gender'] == "female"){
                        echo "Aloha woman!" ;
                    }else{
                        echo "Aloha Man !";
                    }
                }
            }else {
                echo "Wow! Still alive ? Are you a robot, like me ? Can I hug you ?";
            }
        }
    ?> 
    
    <br>

    <h1>Exercice 5 & 6</h1> 

        <form method="get" action="">
            <label for="name2"><label>Name:</label>
            <br>
            <input type="text" name="name2">
            <br>
            <label for="age2"><label>Age:</label>
            <br>
            <input type="text" name="age2">
            <br>
            <label for="gender2"><label>select your gender: </label>
            <br>
            <input type="radio" name="gender2" value ="female"><label>Female</label>
            <br>
            <input type="radio" name="gender2" value ="male"><label>Male</label>
            <br>
            <input type="submit" name="submit2" value="OK">
            <br>
        </form>

    <?php
        $name2 = "";
        $age = "";
        $gender = "";

        if(isset($_GET['name2'])){
            $name2 = $_GET['name2'];
        } 
        if(isset($_GET['age2'])){
            $age = $_GET['age2'] ;
        }
        if(isset($_GET['gender2'])){
            $gender = $_GET['gender2'] ;

            $response = "<br> Sorry {$name2}, you don't fit the criteria"; //ex 6

            if($gender == "female" AND $age >= 21 AND $age <= 40){
               $response = "<br> welcome {$name2} to the team !"; //ex 6
            }
            // else{  
            //     echo "<br> Sorry {$name2}, you don't fit the criteria";  //ex 5
            // } 
            echo $response; //ex 6
        }
        ?>

    <br>

    <h1>Exercice 7</h1> 
    
    <form method="get" action="">
            <label for="note"><label>Note:</label>
            <br>
            <input type="text" name="note">
            <br>
            <input type="submit" name="submit3" value="OK">
            <br>
    </form>
    <?php
        if(isset($_GET['note'])){
            $note = $_GET['note'];
            if ($note < 5) {
                echo "This work is really bad. What a dumb kid! ";
            }elseif ($note < 10) {
                echo "This is not sufficient. More studying is required.";
            }elseif ($note == 10) {
                echo  "barely enough!";
            }elseif ($note < 15) {
                echo "Not bad!";
            }elseif ($note < 19) {
                echo "Bravo, bravissimo!";
            }elseif ($note <= 20) {
                echo "Too good to be true : confront the cheater!";
            }   
        }        
    ?>

    <br>

</body>
</html>