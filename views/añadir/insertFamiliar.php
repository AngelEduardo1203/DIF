<div class="container">
	<?php echo validation_errors(); ?>
	<form action="<?=base_url('index.php/FamiliaresC/insertFamiliar/').$IdBeneficiario ?>" method="POST">
			
			<div class="col">
			<label>Nombre:</label>
			<input type="text" class="form-control" name="Nombre">
			</div>
			<div class="col">
			<label>Apellido Paterno:</label>
			<input type="text" class="form-control" name="ApellidoPaterno">
			</div>
			<div class="col">
			<label>Apellido Materno:</label>
			<input type="text" class="form-control" name="ApellidoMaterno">
			</div>
			<div class="col">
			<label>Fecha de nacimiento:</label>
			<input type="date" class="form-control" min="0000-01-01" max="2022-12-31" name="FechaNacimiento">
			</div>
			<div class="col">
			<select class="form-control" name="Parentesco">
			<option selected>Parentesco:</option>
			<option value="1">Padre</option>
			<option value="2">Madre</option>
			<option value="3">Abuelos</option>
			<option value="4">Tios</option>
			</select>
			</div>
			<div class="col">
			<label>Grado Escolar:</label>
			<input type="text" class="form-control" name="GradoEscolar">
			</div>
			<div class="col">
			<label>Ocupación:</label>
			<input type="text" class="form-control" name="Ocupacion">
			</div>
			<div class="col">
			<label>Seguro Social:</label>
			<input type="text" class="form-control" name="SeguroSocial">
			</div>
			<input type="hidden" name="IdBeneficiario" value="<?=$IdBeneficiario ?>">
			<input type="submit">
	</form>

</div>