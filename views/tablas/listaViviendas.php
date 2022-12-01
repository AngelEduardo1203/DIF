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
					<td><?=$key->Id_Vivienda ?></td>
					<td><?=$key->tenencia ?></td>
					<td><?=$key->tipo_vivienda ?></td>
					<td><a class="btn btn-success" href="<?=base_url('index.php/ViviendasC/detalleVivienda/').$key->Id_Vivienda ?>">Ver detalle</a></td>
					<td><a class="btn btn-danger" href="<?=base_url('index.php/ViviendasC/borrarVivienda/').$key->Id_Vivienda ?>">Borrar</a></td>
					<td><a class="btn btn-danger" href="<?=base_url('index.php/ViviendasC/updateVivienda/').$key->Id_Vivienda ?>">Editar</a></td>  
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>