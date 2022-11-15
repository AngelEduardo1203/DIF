<div class="container">
<a class="btn btn-success" href="<?=base_url('index.php/ApoyosC/insertApoyo')?>">Agregar</a>
<table class="table table-striped table-bordered">
		<thead>
		    <th>Id</th>
			<th>Nombre Apoyo</th>
	        <th>Fecha Entrega</th>
			<th>Nombre Beneficiario</th>
			<th>Nombre Tutor</th>
			<th>Descripcion</th>
			</thead>
		<tbody>
		     <?php foreach ($apoyos as $key): ?>
			 <tr>
			 <td><?=$key->IdApoyo ?></td>
			 <td><?=$key->Nombre_Apoyo?></td>
			 <td><?=$key->Fecha_Entrega ?></td>
			 <td><?=$key->Nombre_Beneficiario ?></td>
			 <td><?=$key->Nombre_Tutor ?></td>
			 <td><?=$key->Descripcion ?></td>
			
			 <td><a class="btn btn-success" href="<?=base_url('index.php/ApoyosC/detalleApoyo/').$key->IdApoyo ?>">Ver</a></td>
			 <td><a class="btn btn-success" href="<?=base_url('index.php/ApoyosC/eliminarApoyo/').$key->IdApoyo ?>">Eliminar</a></td>
			  <td><a class="btn btn-success" href="<?=base_url('index.php/ApoyosC/updateApoyo/').$key->IdApoyo ?>">Editar</a></td>
			 
			<?php endforeach ?>
		</tbody>
	</table>
</div>


	