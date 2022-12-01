<div class="container">
<a class="btn btn-success" href="<?=base_url('index.php/ArticulosC/insertArticulo')?>">Agregar</a>
<table class="table table-striped table-bordered">
		<thead>
		    <th>Id</th>
			<th>Juego de Sala</th>
	        <th>Juego de Comedor</th>
			<th>Estufa</th>
			<th>Refrigerador</th>
			<th>Microondas</th>
			<th>Televisión</th>
			<th>DVD</th>
			<th>Equipo de Sonido</th>
			<th>Computadora de Escritorio</th>
			<th>Computadora Portatil</th>
			<th>Lavadora</th>
			<th>Juegos de Video</th>
			</thead>
		<tbody>
		     <?php foreach ($articulos as $key): ?>
			 <tr>
			 <td><?=$key->IdArticulo ?></td>
			 <td><?=$key->Juego_Sala?></td>
			 <td><?=$key->Juego_Comedor ?></td>
			 <td><?=$key->Estufa ?></td>
			 <td><?=$key->Refrigerador ?></td>
			 <td><?=$key->Microondas ?></td>
			 <td><?=$key->Television ?></td>
			 <td><?=$key->Dvd ?></td>
			 <td><?=$key->Equipo_Sonido ?></td>
			 <td><?=$key->Computadora_Escritorio ?></td>
			 <td><?=$key->Computadora_Portatil ?></td>
			 <td><?=$key->Lavadora ?></td>
			 <td><?=$key->Juegos_Video ?></td>
			
			 <td><a class="btn btn-success" href="<?=base_url('index.php/ArticulosC/detalleArticulo/').$key->IdArticulo ?>">Ver</a></td>
			 <td><a class="btn btn-success" href="<?=base_url('index.php/ArticulosC/eliminarArticulo/').$key->IdArticulo ?>">Eliminar</a></td>
			  <td><a class="btn btn-success" href="<?=base_url('index.php/ArticulosC/updateArticulo/').$key->IdArticulo ?>">Editar</a></td>
			 
			<?php endforeach ?>
		</tbody>
	</table>
</div>