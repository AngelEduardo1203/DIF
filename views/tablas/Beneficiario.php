<div class="container">
		<a class="btn btn-success" href="<?=base_url('index.php/BeneficiarioC/insertBeneficiario')?>">Agregar</a>
	<table class="table table-striped table-bordered">	
		<thead>
			<p class="text-primary"></p>
		    <th>Id</th>
			<th>Nombre</th>
			<th>Apellido Paterno</th>
			<th>Apellido Materno</th>
			<th>Estado Civil</th>
			<th>Genero</th>
			<th>Fecha Nacimiento</th>
			<th>Curp</th>
		</thead>
		<tbody>
		     <?php foreach ($beneficiarios as $key): ?>
			 <tr>
			 <td><?=$key->Id_Beneficiario ?></td>
			 <td><?=$key->nombre?></td>
			 <td><?=$key->apellido_paterno ?></td>
			 <td><?=$key->apellido_materno ?></td>
			 <td><?=$key->estado_civil ?></td>
			 <td><?=$key->genero ?></td>
			 <td><?=$key->fecha_nacimiento ?></td>
			 <td><?=$key->curp ?></td>
			 
			 <td><a class="btn btn-success" href="<?=base_url('index.php/BeneficiarioC/detalleBeneficiario/').$key->Id_Beneficiario ?>">Infomacion Gueneral</a></td> 
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>