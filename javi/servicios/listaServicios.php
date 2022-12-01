<div class="container">
<a class="btn btn-success" href="<?=base_url('index.php/ServiciosC/insertServicio')?>">Agregar</a>
<table class="table table-striped table-bordered">
		<thead>
		    <th>Id</th>
			<th>Agua</th>
	        <th>Luz</th>
			<th>Alumbrado</th>
			<th>Drenaje</th>
			<th>Gas</th>
			<th>Telefono de Casa</th>
			<th>Telefono de Celular</th>
			<th>Vigilancia</th>
			<th>Televisión Abierta</th>
			<th>Televisión de Paga</th>
			<th>Limpieza</th>
			<th>Pavimento</th>
			</thead>
		<tbody>
		     <?php foreach ($servicios as $key): ?>
			 <tr>
			 <td><?=$key->IdServicio ?></td>
			 <td><?=$key->Agua?></td>
			 <td><?=$key->Luz ?></td>
			 <td><?=$key->Alumbrado ?></td>
			 <td><?=$key->Drenaje ?></td>
			 <td><?=$key->Gas ?></td>
			 <td><?=$key->Telefono_Casa ?></td>
			 <td><?=$key->Telefono_Celular ?></td>
			 <td><?=$key->Vigilancia ?></td>
			 <td><?=$key->Television_Abierta ?></td>
			 <td><?=$key->Television_Paga ?></td>
			 <td><?=$key->Limpieza ?></td>
			 <td><?=$key->Pavimento ?></td>
			
			 <td><a class="btn btn-success" href="<?=base_url('index.php/ServiciosC/detalleServicio/').$key->IdServicio ?>">Ver</a></td>
			 <td><a class="btn btn-success" href="<?=base_url('index.php/ServiciosC/eliminarServicio/').$key->IdServicio ?>">Eliminar</a></td>
			  <td><a class="btn btn-success" href="<?=base_url('index.php/ServiciosC/updateServicio/').$key->IdServicio ?>">Editar</a></td>
			 
			<?php endforeach ?>
		</tbody>
	</table>
</div>