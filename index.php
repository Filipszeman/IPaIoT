<?php
    echo '<h1>ESP hodnoty</h1>';
        
    $motion = $_GET["a"];
    $light = $_GET["b"];
    $fire = $_GET["c"];
    date_default_timezone_set('Europe/Bratislava');
    $date = date('Y-m-d H:i:s');

    $text1 = "Motion was detected at " . $date;
    $text2 = "Light was detected at " . $date;
    $text3 = "Fire was detected at " . $date;
    $fp = fopen("data.txt",'a');
    
    
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