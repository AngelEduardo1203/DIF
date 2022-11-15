<div class="container">
	<?php echo validation_errors(); ?>
<form action="<?=base_url('index.php/BeneficiariosC/insertBeneficiario') ?>" method="POST">
<div class="col">
<label  for="inputName" class="fs-5 text-center  text-uppercase">Nombre</label>
<input type="text" class="form-control" name="Nombre" placeholder="Nombre..." aria-label="escriba su nombre">
</div>
<div class="col">
<label  for="inputName" class="fs-5 text-center text-uppercase">Apellido Paterno</label>
<input type="text" class="form-control" name="Apellido Paterno" placeholder="Escriba su apellido paterno..." aria-label="escriba su apellido paterno">
</div>
<div class="col">
<label for="inputName" class="fs-5 text-center text-uppercase">Apellido Materno</label>
<input type="text" class="form-control" name="Apellido Materno" placeholder="Escriba su apellido materno..." aria-label="apellido materno">
</div>
  <div class="col">
    <label for="inputEstadC" class="fs-5 text-center text-uppercase">Estado Civil</label>
    <select id="inputEstadC" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Soltero(a)</option>
      <option value="2">Casado(a)</option>
      <option value="3">Divorciado(a)</option>
    </select>
  </div>
 <div class="col">
    <label for="inputGenero" class="fs-5 text-center text-uppercase">Genero</label>
    <select id="inputGenero" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Femenino(a)</option>
      <option value="2">Masculino(a)</option>
    </select>
  </div>
<div class="col">
<label>Fecha Nacimiento</label>
<input type="date" class="form-control" min="0000-00-00" max="0000-00-00" name="Fecha Nacimiento">
</div>
<div class="col">
<label for="inputName" class="fs-5 text-center text-uppercase">Curp</label>
<input type="text" class="form-control" name="Curp" placeholder="Escriba su curp..." aria-label="curp">
</div>
<div class="col-12">
    <button type="button" class="btn btn-success">Guardar</button>
  </div>
</form>
</div>