<?php
    echo '<h1>ESP hodnoty</h1>';
        
    $motion = $_GET["a"];
    $light = $_GET["b"];
    $fire = $_GET["c"];
    $date = date('m/d/Y h:i:s a', time());

    $text1 = "Motion was detected atasdasd " . $date;
    $text2 = "Light was detected at " . $date;
    $text3 = "Fire was detected at " . $date;
    
    
    if($motion == 1){  
        echo $text1;
        echo "<br>";
    }      
    
    if($light == 1){  
        echo $text2;
        echo "<br>";  
    }      
    
    if($fire == 1){  
        echo $text3;
        echo "<br>";  
    }      
    echo $text1;
    echo "<br>";
?>