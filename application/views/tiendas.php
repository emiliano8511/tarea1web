
	<!-- Detalle Tienda-->    
	<section id="detalle_tienda" class="container content-section text-center">
	<div class="row">
		<div class="col-md-12 column">
			<h3 class="text-center">
			
				Detalle Tiendas
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
							Encargado
						</th>
						<th style="text-align:center">
							Direcci&oacute;n
						</th>
						<th style="text-align:center">
							Comuna
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
						<a href="<?=site_url('Tiendacontroller/vista_libros_tienda/'.$d->id);?>">
							<?php echo $d->nombre; ?>
						</a>
						</td>
						<td>
							<?php echo $d->encargado; ?>
						</td>
						<td>
							<?php echo $d->direccion; ?>
						</td>
						<td>
							<?php echo $d->comuna; ?>
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
	
	
