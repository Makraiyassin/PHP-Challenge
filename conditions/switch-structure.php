<h1>Exercice 8</h1> 

<?php
    $weather = "rain";

    switch ($weather){
        case 'rain':
            echo "Take an umbrella";
            break;
        case 'storm':
            echo "Don't get out today!";
            break;
        default:
            echo "Weather will be ok to day";
    }
?>
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
        switch (true) {
            case $note < 5:
                echo "This work is really bad. What a dumb kid! ";
                break;
            case $note < 10:
                echo  "This is not sufficient. More studying is required.";
                break;
            case $note == 10:
                echo  "barely enough!";
                break;
            case $note < 15:
                echo "Not bad!";
                break;
            case $note < 19:
                echo "Bravo, bravissimo!";
                break;
            default:
                echo "Too good to be true : confront the cheater!";
        }    
    }
?>

<br>

<h1>Exercice 9</h1> 

<?php

$age = 25;
$is_adult = ($age >= 18) ? "true" : "false";
echo $is_adult ."<br>";

// c'est pareille que d'écrire:
$age = 17;
if ($age >= 18)
{
	$is_adult = "true";
} else {
	$is_adult = "false";
}
echo $is_adult;

?>

<br>

