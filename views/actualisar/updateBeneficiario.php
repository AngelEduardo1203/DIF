<div class="container">
	<?php echo validation_errors(); ?>
<form action="<?=base_url('index.php/BeneficiarioC/updateBeneficiario/').$beneficiario[0]->Id_Beneficiario ?>" method="POST">
<div class="col">
<label  for="inputName" class="fs-5 text-center  text-uppercase">Nombre</label>
<input type="text" class="form-control" name="nombre" value="<?=$beneficiario[0]->nombre ?>" placeholder="Nombre" aria-label="escriba su nombre">
</div>
<div class="col">
<label  for="inputName" class="fs-5 text-center text-uppercase">Apellido Paterno</label>
<input type="text" class="form-control" name="apellido_paterno" value="<?=$beneficiario[0]->apellido_paterno ?>" placeholder="Escriba su Apellido Paterno" aria-label="apellido_paterno">
</div>
<div class="col">
<label for="inputName" class="fs-5 text-center text-uppercase">Apellido Materno</label>
<input type="text" class="form-control" name="apellido_materno" value="<?=$beneficiario[0]->apellido_materno ?>" placeholder="Escriba su apellido materno" aria-label="apellido_materno">
</div>
  <div class="col">
    <label for="inputEstadC" class="fs-5 text-center text-uppercase">Estado Civil</label>
    <select id="inputEstadC" class="form-select" name="estado_civil">
      <option selected value="<?=$beneficiario[0]->estado_civil ?>">Sin cambios</option>
      <option value="1">Soltero(a)</option>
      <option value="2">Casado(a)</option>
      <option value="3">Divorciado(a)</option>
    </select>
  </div>
 <div class="col">
    <label for="inputGenero" class="fs-5 text-center text-uppercase">Genero</label>
    <select id="inputGenero" class="form-select" name="genero">
      <option selected value="<?=$beneficiario[0]->genero ?>">Sin cambios</option>
      <option value="1">Femenino(a)</option>
      <option value="2">Masculino(a)</option>
    </select>
  </div>
<div class="col">
<label>Fecha Nacimiento</label>
<input type="date"  class="form-control" min="1950-01-01" max="2022-12-31"  name="fecha_nacimiento"
 value="<?=$beneficiario[0]->fecha_nacimiento?>">

<div class="col">
<label for="inputName" class="fs-5 text-center text-uppercase">Curp</label>
<input type="text" class="form-control" name="curp" value="<?=$beneficiario[0]->curp ?>"placeholder="Escriba su curp" aria-label="curp">
</div>
  <input  type="submit" class="btn btn-success" value="Actualizar">
  <input  name="">
</form>
</div>

 