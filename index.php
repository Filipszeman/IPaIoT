<?php
    echo '<h1>ESP hodnoty</h1>';
        
    $test = 1;
    $motion = $_GET["a"];
    $light = $_GET["b"];
    $fire = $_GET["c"];
    date_default_timezone_set('Europe/Bratislava');
    $date = date('Y-m-d H:i:s');

    $text1 = "Motion was detected ataa " . $date;
    $text2 = "Light was detected at " . $date;
    $text3 = "Fire was detected at " . $date;
    $fp = fopen("data.txt",'w');
    
    if($test == 1){
        fwrite($fp, 'Motion was detected at ' . $date);
    }
    fwrite($fp, 'Fire was detected at ' . $date);
    echo<"light was detected" . $date>;
    
    if($motion == 1){  
        fwrite($fp, $text1);
    }      
    
    if($light == 1){  
        fwrite($fp, $text2); 
    }      
    
    if($fire == 1){  
        fwrite($fp, $text3);  
    }      
    fclose($fp);

?>