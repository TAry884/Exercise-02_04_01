<!doctype html>

<!-- 
Author: Ty Ary
Date: 9.25.18

Filename: ProcessScholarship2.php
-->

<html>
    
    <head>
        <title>Process Scholarship 2</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="initial-scale=1.0" />
        <script src="modernizr.custom.65897.js"></script>
    </head>
    
    <body>
        <h1>Process Scholarship 2</h1>
        <?php
        //Counts number of errors
        $errorCount = 0;
        //Will issue a message if something is a required field
        function displayRequired($fieldName) {
            echo "The field \"$fieldName\"is required.<br>\n";
        }
        //if the data field is empty display that there is a required field needed
        function validateInput($data, $fieldName) {
            global $errorCount;
            if (empty($data)) {
                displayRequired($fieldName);
                ++$errorCount;
                $retVal = "";
            } else {
                $retVal = trim($data);
                $retVal = stripslashes($retVal);
            }
            return $retVal;
        }
        //re displays the form on submission displaying the data that was displayed
        function redisplayForm($firstName, $lastName) {
        ?>
        <h2 style="text-align: center">Scholarship Form 2</h2>
        <form name="scholarship" action="ProcessScholarship2.php" method="post">
            <p>First Name: <input type="text" name="fName" value="<?php echo $firstName; ?>"></p>
            <p>Last Name: <input type="text" name="lName" value="<?php echo $lastName; ?>"></p>
            <p>
                <input type="reset" value="Clear Form">&nbsp;&nbsp;
                <input type="submit" value="Send Form">
            </p>
        </form>
        <?php
        }
        
        //Strips away the slashes from the string data the user might input
        $firstName = validateInput($_POST['fName'], "First Name");
        $lastName = validateInput($_POST['lName'], "Last Name");
        if ($errorCount > 0) {
            echo "$errorCount errors: Please re-enter the information below.<br\n";
            redisplayForm($firstName, $lastName);
        } else {
            echo "Thank you for filling out the scholarship form, " . $firstName . " " . $lastName . ".";    
        }
        ?>
    </body>
    
</html>