<div class="container">

	<table class="table table-striped table-bordered">

		<a class="btn btn-success" href="<?=base_url('index.php/ViviendasC/insertVivienda') ?>">Agregar Vivienda</a>
		<thead>
			<th>Id</th>
			<th>Tenencia</th>
			<th>Tipo de vivienda</th>
			<th>Operaciones</th>
		</thead>
		<tbody>
			<?php foreach ($viviendas as $key): ?>
				<tr>
					<td><?=$key->IdVivienda ?></td>
					<td><?=$key->Tenencia ?></td>
					<td><?=$key->Tipo_Vivienda ?></td>
					<td><a class="btn btn-success" href="<?=base_url('index.php/ViviendasC/detalleVivienda/').$key->IdVivienda ?>">Ver detalle</a></td>
					<td><a class="btn btn-danger" href="<?=base_url('index.php/ViviendasC/borrarVivienda/').$key->IdVivienda ?>">Borrar</a></td>
					<td><a class="btn btn-danger" href="<?=base_url('index.php/ViviendasC/updateVivienda/').$key->IdVivienda ?>">Editar</a></td>  
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>