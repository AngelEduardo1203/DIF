<div class="container">
<a class="btn btn-success" href="<?=base_url('index.php/ApoyosC/insertApoyo')?>">Agregar</a>
<table class="table table-striped table-bordered">
		<thead>
			<th>Nombre Apoyo</th>
			<th>Descripcion</th>
			</thead>
		<tbody>
		     <?php foreach ($apoyos as $key): ?>
			 <tr>
			 <td><?=$key->nombre_apoyo?></td>
			 <td><?=$key->descripcion ?></td>
			
			 <td><a class="btn btn-success" href="<?=base_url('index.php/ApoyosC/detalleApoyo/').$key->Id_Apoyos ?>">Ver</a></td>
			 <td><a class="btn btn-success" href="<?=base_url('index.php/ApoyosC/eliminarApoyo/').$key->Id_Apoyos ?>">Eliminar</a></td>
			  <td><a class="btn btn-success" href="<?=base_url('index.php/ApoyosC/updateApoyo/').$key->Id_Apoyos ?>">Editar</a></td>
			 
			<?php endforeach ?>
		</tbody>
	</table>
</div>


	