
	<!-- Detalle Tienda-->    
	<section id="detalle_tienda" class="container content-section text-center">
	<div class="row">
		<div class="col-md-12 column">
			<h3 class="text-center">
			
				Detalle De los Libros de la Tienda
			</h3>
			<table class="table table-hover">
				<thead>
					<tr>
						<th style="text-align:center">
							#
						</th>
						<th style="text-align:center">
							Nombre
						</th>
						<th style="text-align:center">
							Autor
						</th>
						<th style="text-align:center">
							Precio
						</th>
						<th style="text-align:center">
							Disponibilidad
						</th>
					</tr>
				</thead>
				<tbody>
				
								<?php
foreach ($data as $d)
{
?>
				
				<tr class="success">
						<td>
							<?php echo $d->id; ?>
						</td>
						<td>
						<a href="<?=site_url('Libroscontroller/comentarios_libros/'.$d->id);?>">
							<?php echo $d->nombre_libro; ?>
						</a>
						</td>
						<td>
							<?php echo $d->nombre_autor; ?>
						</td>
						<td>
							<?php echo $d->precio; ?>
						</td>
						<td>
							<?php echo "Disponible"; ?>
						</td>
						<td>
<?php 
$domain = $_SERVER['HTTP_HOST'];  
$url = "http://" . $domain . $_SERVER['REQUEST_URI'];
$dato = explode("/",$url);


   ?>
							<?php echo '<a href="../../Libroscontroller/eliminar_libro/'.$dato[9].'-'.$d->id.'"><button type="button">Eliminar Libro</button></a>'; ?>   
						</td>
					</tr>
					
					
	<?php
		}
	
	?>					
				</tbody>
			</table> 
	
			<!--<button type="button" class="btn btn-primary btn-block btn-lg active">Modificar_Tienda</button>-->
		</div>
	</div>
	
    </section>	
	
	
