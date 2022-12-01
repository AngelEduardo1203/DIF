<div class="container">
	<?php echo validation_errors(); ?>
	<form action="<?=base_url('index.php/ViviendasC/updateVivienda/').$viviendas[0]->IdVivienda ?>" method="POST">
		
		<div class="col">
		<label class="fs-5 text-center text-uppercase">Tenencia:</label>
		<input type="text" class="fs-5 text-center text-uppercase" name="Tenencia" value="<?=$viviendas[0]->Tenencia ?>">
		</div>
		<div class="col">
		<select class="form-control" name="Tipo_Vivienda">
			<option selected>Tipo de Vivienda:</option>
			<option value="1">Propia</option>
			<option value="2">Rentada</option>
			<option value="3">Departamento</option>
		</select>
		</div>
		<input type="submit" value="Actualizar">
	</form>
</div>