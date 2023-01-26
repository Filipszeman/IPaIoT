<?php
echo '<h1>The result</h1>';
        
        $first_number = $_GET["first_number"];
        $second_number = $_GET["second_number"];
        $third_number = $_GET["third_number"];
        $first_operator = $_GET["first_operator"];
        $second_operator = $_GET["second_operator"];
        
        $text1 = "First number = " . $first_number . " Second number = " . $second_number . " Third number = " . $third_number;
        $text2 = "As first operator you chose : " . $first_operator . " and as second operator you chose : " . $second_operator;

    if($first_operator == '+'){  
        if($second_operator == '+'){  
            $result = $first_number + $second_number + $third_number;
        }  
        elseif($second_operator == '-'){  
            $result = $first_number + $second_number - $third_number;
        }  
        elseif($second_operator == '*'){  
            $result = $first_number + ($second_number * $third_number);
        }  
        elseif($second_operator == '-'){  
            $result = $first_number + ($second_number / $third_number);
        }
        else {
            $result = "Error, the second operator is not correct."
        }
    }  

    elseif($first_operator == '-'){  
        if($second_operator == '+'){  
            $result = $first_number - $second_number + $third_number;
        }  
        elseif($second_operator == '-'){  
            $result = $first_number - $second_number - $third_number;
        }  
        elseif($second_operator == '*'){  
            $result = $first_number - ($second_number * $third_number);
        }  
        elseif($second_operator == '-'){  
            $result = $first_number - ($second_number / $third_number);
        }  
        else {
            $result = "Error, the second operator is not correct."
        }
    }

    elseif($first_operator == '*'){  
        if($second_operator == '+'){  
            $result = $first_number * $second_number + $third_number;
        }  
        elseif($second_operator == '-'){  
            $result = $first_number * $second_number - $third_number;
        }  
        elseif($second_operator == '*'){  
            $result = $first_number * $second_number * $third_number;
        }  
        elseif($second_operator == '-'){  
            $result = $first_number * $second_number / $third_number;
        }  
        else {
            $result = "Error, the second operator is not correct."
        }
    }

    elseif($first_operator == '/'){  
        if($second_operator == '+'){  
            $result = $first_number / $second_number + $third_number;
        }  
        elseif($second_operator == '-'){  
            $result = $first_number / $second_number - $third_number;
        }  
        elseif($second_operator == '*'){  
            $result = $first_number / $second_number * $third_number;
        }  
        elseif($second_operator == '-'){  
            $result = $first_number / $second_number / $third_number;
        }  
        else {
            $result = "Error, the second operator is not correct."
        }
    }

    else {
        $result = "Error, the first operator is not correct."
    }
        
    echo $text1;
    echo $text2;
    echo "<br>";
    echo "The result = " . $result;
?>