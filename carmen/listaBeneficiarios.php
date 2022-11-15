<div class="container">
<a class="btn btn-success" href="<?=base_url('index.php/BeneficiariosC/insertBeneficiario')?>">Agregar</a>
<table class="table table-striped table-bordered">
		<thead>
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
			 <td><?=$key->IdBeneficiario ?></td>
			 <td><?=$key->Nombre?></td>
			 <td><?=$key->Apellido_Paterno ?></td>
			 <td><?=$key->Apellido_Materno ?></td>
			 <td><?=$key->Estado_Civil ?></td>
			 <td><?=$key->Genero ?></td>
			 <td><?=$key->Fecha_Nacimiento ?></td>
			 <td><?=$key->Curp ?></td>
			 
			 <td><a class="btn btn-success" href="<?=base_url('index.php/BeneficiariosC/detalleBeneficiario/').$key->IdBeneficiario ?>">Ver</a></td>
			 <td><a class="btn btn-success" href="<?=base_url('index.php/BeneficiariosC/eliminarBeneficiario/').$key->IdBeneficiario ?>">Eliminar</a></td>
			  <td><a class="btn btn-success" href="<?=base_url('index.php/BeneficiariosC/updateBeneficiario/').$key->IdBeneficiario ?>">Editar</a></td>
			 
				</tr>
			<?php endforeach ?>
		</tbody>
	</table>
</div>


	