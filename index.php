<html>
    <head>
        <meta charset='utf-8'>
        <title>PHP web form</title>
    </head>
    <body>
        <main>
            <p>PHP web form - Szeman Filip</p>
            <form class="contact-form" method="post" accept-charset="UTF-8">
                <input type="text" name="first_name" placeholder="First name">
                <input type="text" name="last_name" placeholder="Last name">
                <input type="text" name="age" placeholder="Age">
                <input type="text" name="email" placeholder="Email">
                <input type="text" name="country" placeholder="Country">
                <input type="text" name="city" placeholder="City">
                <button type="Submit" name="Submit">Submit form</button>
        </main>
    </body>
</html>

<?php
    if(isset($_POST['Submit'])){
        $FirstName = "First name : ".$_POST['first_name']."\n";
        $LastName = "Last name : ".$_POST['last_name']."\n";
        $Age = "Age : ".$_POST['age']."\n";
        $Email = "Email : ".$_POST['email']."\n";
        $Country = "Country : ".$_POST['country']."\n";
        $City = "City : ".$_POST['city']."\n";
        $fp = fopen("data.txt",'w');

        fwrite($fp, $FirstName);
        fwrite($fp, $LastName);
        fwrite($fp, $Age);
        fwrite($fp, $Email);
        fwrite($fp, $Country);
        fwrite($fp, $City);
        fclose($fp);

        echo file_get_contents("data.txt");

}
?>