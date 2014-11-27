
	<!-- Detalle Tienda-->    
	<section id="detalle_tienda" class="container content-section text-center">
	<div class="row">

		<div class="col-md-12 column">
		

			<h3 class="text-center">
			
				Resultado de la b&uacutesqueda De libros
			</h3>
			<table class="table table-hover">
				<thead>
					<tr>
						<th style="text-align:center">
							Nombre 
						</th>
						<th style="text-align:center">
							Autor 
						</th>
						<th style="text-align:center">
							Descripci&oacuten
						</th>
							<th style="text-align:center">
							Disponibilidad Tiendas 
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
						<a href="<?=site_url('Libroscontroller/comentarios_libros/'.$d->id);?>">
							<?php echo $d->nombre_libro; ?>
						</a>
						</td>
						<td>
							<?php echo $d->nombre_autor; ?>
						</td>
						<td>
							<?php echo $d->descripcion; ?>
						</td>
						
						<td>
						<a href="<?=site_url('Tiendacontroller/vista_libros_tienda/'.$d->id_tienda);?>">
							<?php echo $d->nombre; ?>
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
	
	
