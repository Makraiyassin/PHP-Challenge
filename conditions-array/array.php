
<?php

    $me = array (
        'age'	=> 45 , 
        'firstname' 		=> 'Alexandre' ,
        'lastname' 	  		    => 'Plennevaux' ,
        'favourite_movies' 	=> array('My Own Private Idaho', 'Her', 'Matrix')    
    ); 

    echo '<pre>' ;
        print_r ( $me );
    echo '</pre>' ;

    print_r ( $me );


    $pays = ["Maroc", "Belgique","France","Espagne", "Angleterre"];
    echo "<br>".$pays[1]."<br>";
    var_dump($pays);

    $web_development= array(
        'frontend' => array(
            
        ),
        'backend' => array(

        )
    );
   
    print_r ( $web_development );
    echo "<br>";

    array_push($web_development['frontend'],'xhtml','CSS','JavaScript');
    array_push($web_development['backend'],'Ruby on Rails','Flash',);
    var_dump( $web_development );
    echo "<br>";

    $web_development['frontend'][0] = 'html';
    var_dump(array_search('Ruby on Rails', $web_development['backend'])) ;
    unset($web_development['backend'][array_search('Flash',$web_development['backend'])]);
    var_dump($web_development);
    echo "<br>";

    foreach($web_development['frontend'] as $key => $value) {
        echo "<br>";
        var_dump($key);
        echo "<br>";
        var_dump($value);
    }
?>