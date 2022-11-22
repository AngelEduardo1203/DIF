<div class="container">
	<?php echo validation_errors(); ?>
	<form action="<?=base_url('index.php/FamiliaresC/updateFamiliar/').$familiares[0]->IdFamiliar ?>" method="POST">

			<div class="col">
			<label>Nombre:</label>
			<input type="text" class="form-control" name="Nombre" value="<?=$familiares[0]->Nombre ?>">
			</div>
			<div class="col">
			<label>Apellido Paterno:</label>
			<input type="text" class="form-control" name="ApellidoPaterno" value="<?=$familiares[0]->ApellidoPaterno ?>">
		    </div>
			<div class="col">
			<label>Apellido Materno:</label>
			<input type="text" class="form-control" name="ApellidoMaterno" value="<?=$familiares[0]->ApellidoMaterno ?>">
		    </div>
			<div class="col">
			<label>Fecha de nacimiento:</label>
			<input type="date" class="form-control" min="0000-01-01" max="2022-12-31" name="FechaNacimiento" value="<?=$familiares[0]->FechaNacimiento ?>">
		    </div>
			<div class="col">
			<select class="form-control" name="Parentesco" value="<?=$familiares[0]->Parentesco ?>">
			<option selected>Parentesco:</option>
			<option value="1">Padre</option>
			<option value="2">Madre</option>
			<option value="3">Abuelos</option>
			<option value="4">Tios</option>
			</select>
		    </div>
			<div class="col">
			<label>Grado Escolar:</label>
			<input type="text" class="form-control" name="GradoEscolar" value="<?=$familiares[0]->GradoEscolar ?>">
		    </div>
			<div class="col">
			<label>Ocupación:</label>
			<input type="text" class="form-control" name="Ocupacion" value="<?=$familiares[0]->Ocupacion ?>">
		    </div>
			<div class="col">
			<label>Seguro Social:</label>
			<input type="text" class="form-control" name="SeguroSocial" value="<?=$familiares[0]->SeguroSocial ?>">
		    </div>
			<input type="submit" value="Actualizar">
	</form>

</div>