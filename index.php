<?php
    echo '<h1>ESP hodnoty</h1>';
        
    $motion = $_GET["a"];
    $light = $_GET["b"];
    $fire = $_GET["c"];
    date_default_timezone_set('Europe/Bratislava');
    $date = date('Y-m-d H:i:s');

    $fp = fopen("data.txt",'a');
    
    if($motion == 1){  
        fwrite($fp, 'Motion was detected at ' . $date . "\n");
    }      
    
    if($light == 1){  
        fwrite($fp, 'Light was detected at ' . $date . "\n"); 
    }      
    
    if($fire == 1){  
        fwrite($fp, 'Fire was detected at ' . $date . "\n");  
    }      
    
    fclose($fp);

?>