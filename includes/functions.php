<?php

    include(dirname(__FILE__).'/config.php');

    session_start();

    site_header($titulo); { ?>
        
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>
                <?php echo $titulo  ?> -
                <?php SITE_NOME ?>
                </title>

        <?php
        } 

    site_footer(); { ?>

        </head>
        <body>
            
        </body>
        </html>

    <?php
    } 

