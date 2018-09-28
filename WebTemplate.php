<!doctype html>

<!-- 
Author: Ty Ary
Date: 9.26.18

Filename: WebTemplate.php
-->

<html>
    
    <head>
        <title>WebTemplate</title>
        <meta charset="UTF-8" />
        <meta name="viewport" content="initial-scale=1.0" />
        <script src="modernizr.custom.65897.js"></script>
    </head>
    
    <body>
        <?php include("inc_header.html") ?>
        <div style="width: 20%; text-align: center; float: left"></div>
        <?php include("inc_buttonnav.html") ?>
        <!-- Start of dynamic content section -->
        <?php
        //if the get is set with content then swith the content and include each of the pages listed and break after each one to stop it from continuing that loop
        if (isset($_GET['content'])) {
            switch ($_GET['content']) {
                case 'About Me': 
                    include("inc_about.html");
                    break;
                case 'Contact Me':
                    include("inc_contact.html");
                    break;
                case 'Home':
                    include("inc_home.html");
                    break;
                default:
                    include("inc_home.html");
                    break;
            }
            //Else just use the home html page
        } else {
            include("inc_home.html");
        }
        ?>
        <!-- End of dynamic content section -->
        <?php include("inc_footer.html") ?>
    </body>
    
</html>