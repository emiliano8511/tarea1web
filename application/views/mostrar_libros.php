
	<!-- Detalle Tienda-->    
	<section id="detalle_tienda" class="container content-section text-center">
	<div class="row">
	<div class="col-lg-10  col-md-12 ">
	
	
	  <div class="form-group">
	  <table>
	  <tr>
	  <td><input type="text" id="nombre_libro_busqueda" class="form-control" placeholder="Buscar Libro"></td><td><button class="btn btn-default" onclick="nombre = document.getElementById('nombre_libro_busqueda').value;var dir='buscar_libro/'+nombre;location.href=dir;">Buscar</button></td>
	  </tr>
	  </table>	 	 
	  </div>
	

</div>
		<div class="col-md-12 column">
		

			<h3 class="text-center">
			
				Detalle De Libros
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
							Descripci&oacuten
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
							<?php echo $d->descripcion; ?>
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
	
	
