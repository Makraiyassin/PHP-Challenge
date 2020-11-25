<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Exercices Intro</h1>

    <?php
        $str = 'telecommande';
        echo  $str ;
        echo "<br>";

        $str = str_shuffle($str);         
        echo  $str;
        echo "<br><br>";

        $arr=  explode(" ","Selon un chercheur (sic) de l'Université de Cambridge, peu importe dans quel ordre les lettres d'un mot sont, la seule chose importante est que la première et la dernière lettre soient au bon endroit. Le reste peut être un désordre total et vous pouvez toujours le lire sans problème. C'est parce que l'esprit humain ne lit pas chaque lettre par lui-même mais le mot dans son ensemble.");
        $array=["According","to", "a", "researcher", "(sic)", "at", "Cambridge", "University" ,",", "it", "doesn't", "matter", "in", "what", "order", "the", "letters", "in", "a", "word", "are",",", "the", "only", "important", "thing", "is" ,"that", "the", "first", "and", "last", "letter", "be", "at", "the", "right", "place",".", "The" , "rest", "can", "be" ,"a", "total", "mess", "and" ,"you" ,"can", "still", "read", "it", "without", "problem","." ,"This" ,"is" ,"because", "the", "human", "mind", "does" ,"not" ,"read", "every", "letter", "by" ,"itself", "but", "the", "word", "as", "a", "whole","."];
        
        print_r($arr) ;
        echo "<br><br>";

        foreach ($arr as $key => $value) {
            echo (strlen($value)<2) ? $value." " : ( $value[0].str_shuffle(substr($value, 1, -1)).$value[-1]." ");
        }
        echo "<br><br>";


        print_r($array) ;
        echo "<br><br>";

        foreach ($array as $key => $value) {
            // echo str_shuffle($value)." ";
            echo (strlen($value)<2) ? $value." " : ( $value[0].str_shuffle(substr($value, 1, -1)).$value[-1]." ");
        }
    ?>

    <h1>Exercice 1</h1>

    <?php
        function capitalizes($name){
            // return ucfirst($name);
            return  mb_convert_case($name[0], MB_CASE_UPPER).substr($name,1);
        }
        echo capitalizes("émile");
        echo "<br>";
        echo capitalizes("yassin");

        // $name = 'yassin'
        // echo strtoupper($name[0]).substr($name,1);
        echo "<br><br>";
    ?>

    <h1>Exercices 2 & 3</h1>

    <?php
        echo date("y");
        echo "<br><br>";
        echo date("d/m/y - H:i:s");
    ?>

    <h1>Exercice 4 & 5</h1>

    <?php
        function Sum($a,$b){
            if (is_numeric($a)&&is_numeric($b)) {
                return $a + $b;
            }else{
                return "Error: argument is not a number.";
            }
        }
        echo sum(10,5);
        echo "<br><br>";
        echo sum(10,"d");
    ?>

    <h1>Exercice 6 </h1>

    <?php
        // function acronym($a,$b,$c,$d){
        //     echo strtoupper($a[0]).strtoupper($b[0]).strtoupper($c[0]).strtoupper($d[0]);
        // }
        // acronym("yassin","makrai","lamarti","azerty");

        function acronym($string){
            $array = explode(" ",$string);
            foreach ($array as $key => $value) {
                echo strtoupper(substr($value,0,1));
            }
        }
        acronym("yassin makrai lamarti azerty");        
    ?>

    <h1>Exercice 7 </h1>

    <?php
        function replaces_letters ($a){
            echo $a."<br>";
            if (strpos($a, "ae")){
                echo substr($a,0,strpos($a, "ae"))."æ".substr($a,(strpos($a, "ae"))+2);
            }
            echo "<br>".str_ireplace("ae", "æ", $a);
        }
        replaces_letters ("caecotrophie") ;
    ?>

    <h1>Exercice 8 </h1>

    <?php
        function replaces_letters_2($a){
            echo $a."<br>";
            if (strpos($a, "æ")){
                echo substr($a,0,strpos($a, "æ"))."ae".substr($a,(strpos($a, "æ"))+2);
            }
        }
        replaces_letters_2("cæcotrophie") ;
    ?>

    <h1>Exercice 9 & 10 </h1>

    <?php
        function feedback( $msg,$css_class = "info"){
            return "<div class=$css_class>$css_class: $msg</div>";
        }
        echo feedback("Incorrect email address!","error");
    ?>

    <h1>Exercice 11</h1>
    
    <h2>Générez un nouveau mot:</h2>
    <?php

    function generate(){
        $mots = ["VOITURE", "TELEPHONE", "SAC","REUNION", "POMME", "SOURIS","ABEILLE","MIEL","RAT","CHIEN","CHAT","BEBE","MAMAN"];
        $mots_5 = [];
        $mots_7 = [];
        foreach ($mots as  $value) {
            if(strlen($value) <= 5){
                array_push($mots_5,$value);
            }else{
                array_push($mots_7,$value);
            }
        }
        echo $mots_5[rand(0,count($mots_5)-1)]." & ".$mots_7[rand(0,count($mots_7)-1)]."<br>";
    }

    generate();
    ?>
    <form action="">
        <button id="Generate">Generate</button>
    </form>
    <h1>Exercice 12</h1>

    <?php
        $phrase = "STOP YELLING I CAN'T HEAR MYSELF THINKING!!";
        echo strtolower($phrase);
    ?>

    <h1>Exercice 13</h1>

    <?php
        function calculate_cone_volume($ray,$height){
            $volume = $ray * $ray * 3.14 * $height * (1/3);  
            echo "The volume of a cone which ray is $ray cm and height is $height cm =  $volume cm<sup>3</sup><br />";  
        }
        calculate_cone_volume(15,20);
    ?>

</body>
</html>