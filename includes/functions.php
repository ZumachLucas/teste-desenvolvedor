<?php

    include(dirname(__FILE__).'/config.php');

    session_start();

    function site_header($titulo) {?>
        
        <!DOCTYPE html>
		<html lang="en">
		<head>
			<meta charset="utf-8">   		
    		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

			<title>
				<?php echo $titulo ?> - 
				<?php echo SITE_NOME ?>
			</title>

			<!-- Estilos footer -->
			<link href="css/sticky-footer-navbar.css" rel="stylesheet">
			
			<!-- Google Gráficos -->
			<script type="text/javascript" src="https://www.gstatic.com/charts/loader.js"></script>

			<!-- bibliotecas Bootstrap -->
			<link rel="stylesheet" href="css/bootstrap.min.css" crossorigin="anonymous">
			<script src="js/bootstrap.min.js" crossorigin="anonymous"></script>

			<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" crossorigin="anonymous"></script>
			<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" crossorigin="anonymous"></script>    
		</head> 
		<body>
			
			<header>
		      <!-- Fixed navbar -->
		      <nav class="navbar navbar-expand-md navbar-dark fixed-top bg-dark">
		        <a class="navbar-brand" href="#"></a>
		        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse" aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
		          <span class="navbar-toggler-icon"></span>
		        </button>
		        <div class="collapse navbar-collapse" id="navbarCollapse">
		          <ul class="navbar-nav mr-auto">
					<?php 
						$menu = [
							'index.php' => 'Inicial',
                            'clientes.php' => 'Clientes',
                            'produtos.php' => 'Produtos',
                            'pedidos.php' => 'Pedidos'
						];

						foreach ($menu as $url => $titulo) {
							if (basename($_SERVER['REQUEST_URI']) == $url) {
								echo "<li class=\"nav-item active\">
						              	<a class=\"nav-link\" href=\"$url\">$titulo</a>
						              </li>";	
							} else {
								echo "<li class=\"nav-item\">
						              	<a class=\"nav-link\" href=\"$url\">$titulo</a>
						              </li>";
							}
							
						}
					?>
		          </ul>
                    <!-- Pesquisa de CRUD -->
		          <!-- <form class="form-inline mt-2 mt-md-0">
		            <input class="form-control mr-sm-2" type="text" placeholder="Search" aria-label="Search">
		            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
		          </form> -->
		        </div>
		      </nav>
		    </header>

			<!-- Begin page content -->
	    	<main role="main" class="container">

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

        </main>
        <footer class="footer">
            <div class="container">
                <span class="text-muted"> 
                    <?= SITE_NOME ?> &copy; <?= date('j/n/Y') ?> -
                    <?php 

                        $dias_da_semana = ['Domigo', 'Segunda-feira', 'Terça-feira', 'Quarta-feira', 'Quinta-feira', 'Sexta-feira', 'Sábado'];
                        $mes = [1 => 'janeiro', 'fevereiro', 'março', 'abril', 'maio', 'junho', 'julho', 'agosto', 'setembro', 'outubro', 'novembro', 'dezembro'];
                            echo $dias_da_semana[date('w')];
                            echo ', '. date('j').' de '. $mes[date('n')].' de '. date('Y');
                    ?>

                                        
                        
                </span>
            </div>
        </footer>
        </body>
        </html> <?php
    } 

