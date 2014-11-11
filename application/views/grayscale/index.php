<!--
<body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">

    <!-- Navigation -->
    <nav class="navbar navbar-custom navbar-fixed-top" role="navigation">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-main-collapse">
                    <i class="fa fa-bars"></i>
                </button>
                <a class="navbar-brand page-scroll" href="#page-top">
                    <i class="fa fa-play-circle"></i>  <span class="light">Start</span> Bootstrap
                </a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse navbar-right navbar-main-collapse">
                <ul class="nav navbar-nav">
                    <!-- Hidden li included to remove active class from about link when scrolled up past about section -->
                    <li class="hidden">
                        <a href="#page-top"></a>
                    </li>
                    <li>
                        <a class="page-scroll" href="#inicio">Inicio</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#mapa">Mapa</a>
                    </li>
					<li>
                        <a class="page-scroll" href="#detalle_tienda">Detalle Tienda</a>	
                    </li>
					<li>
                        <a class="page-scroll" href="#comentarios_tienda">Comentarios Tienda</a>						
                    </li>
		                        <li>
                        <a class="page-scroll" href="#detalle">Detalle Libro</a>
                    </li>
                                        <li>
                        <a class="page-scroll" href="#contact">Contacto</a>
                    </li>
                    
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>
-->
    <!-- Intro Header -->
    <header class="intro">
        <div class="intro-body">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2">
                        <h1 class="brand-heading">Hi</h1>
                        <p class="intro-text">Buscar o inventar logo y poner aqui.</p>
                        <a href="#about" class="btn btn-circle page-scroll">
                            <i class="fa fa-angle-double-down animated"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <!-- Inicio -->
    <section id="inicio" class="container content-section text-center">
	<div class="row">
		<div class="col-md-12 column">
			<h3 class="text-center">
				Inicio de Sesion
			</h3>
<?php
if (!isset($_SESSION["mail"])) 
{
?>
<div id="inscribir" style="display: none">
<form method="post" class="form-horizontal" action="insertar_usuario">
<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">Email2</label>
<div class="col-sm-10">
<input type="text" name="mail" class="form-control" placeholder="e-mail"/>
</div>
</div>

<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label">Password2</label>
<div class="col-sm-10">
<input type="password" class="form-control" name="pass"/>
</div>
</div>


<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<input type="submit"  class="btn btn-default" value="Registrar"/>
</div>
</div>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<input type="button" class="btn btn-default"  value="Ingresar" onclick="document.getElementById('inscribir').style.display = 'none';document.getElementById('login').style.display = 'block';">
</div>
</div>
</form>
</div>

<div id="login" style="display: block">
<form method="post" class="form-horizontal" action="logear_usuario">
<div class="form-group">
<label for="inputEmail3" class="col-sm-2 control-label">Email</label>
<div class="col-sm-10">
<input type="text" name="mail" class="form-control" placeholder="e-mail"/>
</div>
</div>

<div class="form-group">
<label for="inputPassword3" class="col-sm-2 control-label">Password</label>
<div class="col-sm-10">
<input type="password" class="form-control" name="pass"/>
</div>
</div>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<input type="submit" class="btn btn-default" value="Log In"/>
</div>
</div>

<div class="form-group">
<div class="col-sm-offset-2 col-sm-10">
<input type="button" class="btn btn-default" value="Inscribir" onclick="document.getElementById('login').style.display = 'none';document.getElementById('inscribir').style.display = 'block';">
</div>
</div>

</form>
</div>
<?php
}
else
{
	echo 'hi';
}
?>

		</div>
	</div>
    </section>

<br><br><br><hr><br><br><div id="map-canvas" align=center></div>


    <!-- Mapa-->	
	<section id="mapa" class="container content-section text-center">	
	<div class="row">

		<div class="col-md-12 column">

			
		    <!--<img  width="800" height="600"  src="img/mapa.png">-->
<!-- <div id="map-canvas"></div>-->			
			

			<div class="row clearfix">
				<!--<div class="col-md-6 column">
					<img width="130" height="130" src="img/logo.jpg">
				</div>
				<div class="col-md-6 column">
					 <address> <strong>Tienda Mil Libros.</strong><br> Region Metropolitana<br> Santiago, # 1978<br> <abbr title="Phone">P:</abbr> (123) 456-7890</address> <button type="button" class="btn btn-primary btn-block">Ver</button>
				</div>-->

				<div class="col-md-12 column">
                                <h3 class="text-center">
                                Detalle de las Tienda
                	        </h3>
                                </div>

			</div>
		</div>
	</div>

    </section>	
	
	
	
	<!-- Detalle Tienda-->    
	<section id="detalle_tienda" class="container content-section text-center">
	<div class="row">
		<div class="col-md-12 column">
			<h3 class="text-center">
				Detalle libros tienda
			</h3>
			<table class="table table-hover">
				<thead>
					<tr>
						<th>
							#
						</th>
						<th>
							Libro
						</th>
						<th>
							Autor
						</th>
						<th>
							Precio
						</th>
					</tr>
				</thead>
				<tbody>
					<tr>
						<td>
							1
						</td>
						<td>
							LAS MIL Y UNA NOCHES
						</td>
						<td>
							ANONIMO
						</td>
						<td>
							$10.000
						</td>
					</tr>
					<tr class="active">
						<td>
							2
						</td>
						<td>
							JARDIN
						</td>
						<td>
							SIMONETTI, PABLO
						</td>
						<td>
							$5.990
						</td>
					</tr>
					<tr class="success">
						<td>
							3
						</td>
						<td>
							EL MAESTRO IGNORANTE
						</td>
						<td>
							RANCIERE, JACQUES
						</td>
						<td>
							$6.980
						</td>
					</tr>
					<tr class="warning">
						<td>
							4
						</td>
						<td>
							LA NOVIA DE HOUDINI
						</td>
						<td>
							RODRIGUEZ, JUAN
						</td>
						<td>
							$6.000
						</td>
					</tr>
					<tr class="danger">
						<td>
							5
						</td>
						<td>
							TEJAS VERDES
						</td>
						<td>
							VALDES, HERNAN
						</td>
						<td>
							$7.000
						</td>
					</tr>
				</tbody>
			</table> <button type="button" class="btn btn-primary btn-block btn-lg active">Modificar_Tienda</button>
		</div>
	</div>
	
    </section>	
	
	<!-- Comentarios-->	
	<section id="comentarios_tienda" class="container content-section text-center">
	<div class="row">
		<div class="col-md-12 column">
			<h3 class="text-center">
				Tienda Mil Libros
			</h3>
			<div class="row clearfix">
				<div class="col-md-6 column">
					<img width="130" height="130" src="img/logo.jpg">
				</div>
				<div class="col-md-6 column">
					  <address> <strong>Tienda Mil Libros.</strong><br> Region Metropolitana<br> Santiago, # 1978<br> <abbr title="Phone">P:</abbr> (123) 456-7890</address>
				</div>
			</div>
			<h3 class="text-center">
				Comentarios
			</h3>
			<blockquote>
				<p>
					Excelente la atencion...
				</p> <small>Someone famous <cite>Source Title</cite></small>
			</blockquote>
			<blockquote>
				<p>
					Falta variedad de libros en este lugar.
				</p> <small>Someone famous <cite>Source Title</cite></small>
			</blockquote>
			<blockquote>
				<p>
					Este lugar esta abierto los fin de semana.
				</p> <small>Someone famous <cite>Source Title</cite></small>
			</blockquote>
		</div>
	</div>
	
    </section>	
	
	<!-- Detalle-->    
	<section id="detalle" class="container content-section text-center">
	<div class="row">
		<div class="col-md-12 column">
			<h3 class="text-center">
				Detalle Libro
			</h3>
			<div class="row clearfix">
				<div class="col-md-8 column">
					<dl>
						<dt>
							Nombre
						</dt>
						<dd>
							LA NOVIA DE HOUDINI
						</dd>
						<dt>
							Descripción
						</dt>
						<dd>
							En su gran regreso a la novela, Juan José Rodríguez nos cuenta cómo un joven aventurero conoce el mismo día al amor de su vida y a su peor enemigo. Cuando el joven héroe presencia el espectáculo de un grupo de magos decide abandonarlo todo con tal de seguir y enamorar a la bella Florissa: la misteriosa y bellísima atracción principal del grupo, que fue aprendiz del mismísimo Harry Houdini. Pero debe renunciar a todo, y arriesgar su vida, pues no todos los magos que forman el grupo viven dentro de la ley.
						</dd>
						<dt>
							Precio
						</dt>
						<dd>
							$6.000
						</dd>
						
					</dl>
				</div>
				<div class="col-md-4 column">
					<img alt="140x140" src="http://lorempixel.com/140/140/">
				</div>
			</div>
			<h3 class="text-center">
				Comentarios Libro
			</h3>
			<blockquote>
				<p>
					Nada fuera de lo comun.
				</p> <small>Someone famous <cite>Source Title</cite></small>
			</blockquote>
			<blockquote>
				<p>
					Libro extremadamente bueno!... recomendable
				</p> <small>Someone famous <cite>Source Title</cite></small>
			</blockquote>
			<blockquote>
				<p>
					Buenisimo.. ya estoy esperando la segunda parte.
				</p> <small>Someone famous <cite>Source Title</cite></small>
			</blockquote>
		</div>
	</div>
	
    </section>	


<!-- <div id="map-canvas"></div> -->
