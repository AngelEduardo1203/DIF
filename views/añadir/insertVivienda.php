<div class="container">
	<form action="<?=base_url('index.php/ViviendasC/insertVivienda') ?>" method="POST">

			<div class="col">
			<label>Tenencia:</label>
			<input type="text" class="form-control" name="Tenencia">
			</div>
			<div class="col">
			<select class="form-control" name="Tipo_Vivienda">
			<option selected>Tipo de Vivienda:</option>
			<option value="1">Propia</option>
			<option value="2">Rentada</option>
			<option value="3">Departamento</option>
			</select>
			</div>
			
			<input type="submit">
	</form>
,
</div>