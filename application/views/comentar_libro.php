
	<!-- Detalle Tienda-->    
	<section id="comentario_libro" class="container content-section text-center">
	<div class="row">
		<div class="col-md-12 column">
			<h3 class="text-center">
			
				Comentarios Libro
			</h3>
			<table class="table table-hover">
				<thead>
					<tr>
						<th style="text-align:center">
							Usuario
						</th>
						<th style="text-align:center">
							Comentario
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
							<?php echo $d->mail; ?>
						</td>
						<td>
							<?php echo $d->comentario; ?>
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
