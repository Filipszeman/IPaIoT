<html>
    <head>
        <meta charset='utf-8'>
        <title>PHP web form</title>
    </head>
    <body>
        <main>
            <p>PHP web form - Szeman Filip</p>
            <form class="contact-form" action="contactform.php" method="post">
                <input type="text" name="First name" placeholder="First name">
                <input type="text" name="Last name" placeholder="Last name">
                <input type="text" name="Age" placeholder="Age">
                <input type="text" name="Email" placeholder="Email">
                <input type="text" name="Country" placeholder="Country">
                <input type="text" name="City" placeholder="City">
                <button type="Submit" name="Submit">Submit form</button>
        </main>
    </body>
</html>

<?php
    if(isset($_POST['Submit'])){
    $FirstName = "First name : ".$_POST['First name']."
    ";
    $LastName = "Last name : ".$_POST['Last name']."
    ";
    $Age = "Age : ".$_POST['Age']."
    ";
    $Email = "Email : ".$_POST['Email']."
    ";
    $Country = "Country : ".$_POST['Country']."
    ";
    $City = "City : ".$_POST['City']."
    ";
    $file=fopen("saved.txt", "a");
    fwrite($file, $FirstName);
    fwrite($file, $LastName);
    fwrite($file, $Age);
    fwrite($file, $Email);
    fwrite($file, $Country);
    fwrite($file, $City);
    fclose($file);
}
?>