<html>
    <head>
        <meta charset='utf-8'>
    </head>
    <body>
        <main>
            <form class="contact-form" method="post" accept-charset="UTF-8">
                <input type="number" name="first_number" placeholder="First number">
                <input type="number" name="second_number" placeholder="Second number">
                <input type="number" name="third_number" placeholder="Third number">
                <input type="text" name="first_operator" placeholder="First operator">
                <input type="text" name="second_operator" placeholder="Second operator">
                <button type="Submit" name="Submit">Submit form</button>
        </main>
    </body>
</html>

<?php   
    $first_number = $_POST["first_number"];
    $second_number = $_POST["second_number"];
    $third_number = $_POST["third_number"];
    $first_operator = $_POST["first_operator"];
    $second_operator = $_POST["second_operator"];
        
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

    $the_result = "The result = " . $result;
        
    $fp = fopen("data.txt",'w');

    fwrite($fp, $text1);
    fwrite($fp, $text2);
    fwrite($fp, $the_result);
    fclose($fp);
?>