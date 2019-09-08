<?php

    include(dirname(__FILE__).'/config.php');

    session_start();

    function site_header($titulo) {?>
        
        <!DOCTYPE html>
            <html lang="en">
            <head>
                <meta charset="UTF-8">
                <meta name="viewport" content="width=device-width, initial-scale=1.0">
                <meta http-equiv="X-UA-Compatible" content="ie=edge">
                <title>
                <?php echo $titulo  ?> -
                <?php echo SITE_NOME ?>
                </title>

        <?php
        } 
    
    function site_menu() { ?>

        <style>
			#menu li {
				display: inline-block;
				width: 100px;
				vertical-align: top;

				/*Dirty IE Hack*/
				zoom: 1;
				*display: inline;
			}
			
			a {
				color: gray;
			}
			a.active {
				color: blue;
			}

		</style>
		<ul id="menu">
			<?php 

        $menu = [
            'index.php' => 'Página Inicial',
            'pedidos.php' => 'Pedidos',
            
        ];  ?>
		</ul> <?php 
    }

    function site_footer() { ?>

        </head>
        <body>
            
        </body>
        </html>

    <?php
    } 

