<div class="container text-center">
<li class="list-group-item">BENEFICIARIOS</li>
<div class="row align-items">
    <div class="col">
    	<li class="list-group-item text-black"><p>nombre : <?=$beneficiario[0]->nombre ?></p></li>
		<li class="list-group-item text-black"><p>apellido paterno : <?=$beneficiario[0]->apellido_paterno ?></p></li>
		<li class="list-group-item text-black"><p>apellido materno : <?=$beneficiario[0]->apellido_paterno ?></p></li>
		<li class="list-group-item text-black"><p>curp : <?=$beneficiario[0]->curp ?></p></li>
	</div>
	<div class="col">
		<li class="list-group-item text-black"><p>genero : <?=$beneficiario[0]->genero ?></p></li>
		<li class="list-group-item text-black"><p>fecha nacimiento : <?=$beneficiario[0]->fecha_nacimiento ?></p></li>
		<li class="list-group-item text-black"><p>estado civil : <?=$beneficiario[0]->estado_civil ?></p></li>
	</div>
	<div class=" col">
		<?php foreach ($beneficiario as $key): ?>
		<a class="btn btn-success" href="<?=base_url('index.php/BeneficiarioC/eliminarBeneficiario/').$key->Id_Beneficiario?>">Eliminar</a>
		<a class="btn btn-success" href="<?=base_url('index.php/BeneficiarioC/updateBeneficiario/').$key->Id_Beneficiario ?>">Editar</a>
		<?php endforeach ?>
	</div>
</div>