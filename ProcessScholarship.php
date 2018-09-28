<!doctype html>

<!-- 
Author: Ty Ary
Date: 9.25.18

Filename: ProcessScholarship.php
-->

<html>
    
    <head>
        <title>Process Scholarship</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="initial-scale=1.0" />
        <script src="modernizr.custom.65897.js"></script>
    </head>
    
    <body>
        <h1>Process Scholarship</h1>
        <?php
        //Strips away the slashes from the string data the user might input
        $firstName = stripcslashes($_POST['fName']);
        $lastName = stripcslashes($_POST['lName']);
        //Prints the first and last name on the submission page 
        echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";
        ?>
    </body>
    
</html>