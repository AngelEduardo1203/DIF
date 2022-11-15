<div class="container">
	<?php echo validation_errors(); ?>
<form action="<?=base_url('index.php/BeneficiariosC/updateBeneficiario/').$beneficiario[0]->IdBeneficiario ?>" method="POST">
<div class="col">
<label  for="inputName" class="fs-5 text-center  text-uppercase">Nombre</label>
<input type="text" class="form-control" name="Nombre" value="<?=$beneficiario[0]->Nombre ?>" placeholder="Nombre" aria-label="escriba su nombre">
</div>
<div class="col">
<label  for="inputName" class="fs-5 text-center text-uppercase">Apellido Paterno</label>
<input type="text" class="form-control" name="Apellido_Paterno" value="<?=$beneficiario[0]->Apellido_Paterno ?>" placeholder="Escriba su Apellido Paterno" aria-label="apellido_paterno">
</div>
<div class="col">
<label for="inputName" class="fs-5 text-center text-uppercase">Apellido Materno</label>
<input type="text" class="form-control" name="Apellido_Materno" value="<?=$beneficiario[0]->Apellido_Materno ?>" placeholder="Escriba su apellido materno" aria-label="apellido_materno">
</div>
  <div class="col">
    <label for="inputEstadC" class="fs-5 text-center text-uppercase">Estado Civil</label>
    <select id="inputEstadC" class="form-select" name="Estado_Civil">
      <option selected>Selecciona...</option>
      <option value="1">Soltero(a)</option>
      <option value="2">Casado(a)</option>
      <option value="3">Divorciado(a)</option>
    </select>
  </div>
 <div class="col">
    <label for="inputGenero" class="fs-5 text-center text-uppercase">Genero</label>
    <select id="inputGenero" class="form-select" name="Genero">
      <option selected>Selecciona...</option>
      <option value="1">Femenino(a)</option>
      <option value="2">Masculino(a)</option>
    </select>
  </div>
<div class="col">
<label>Fecha Nacimiento</label>
<input type="date"  class="form-control" min="1950-01-01" max="2022-12-31"  name="Fecha_Nacimiento"
 value="<?=$beneficiario[0]->Fecha_Nacimiento?>">

<div class="col">
<label for="inputName" class="fs-5 text-center text-uppercase">Curp</label>
<input type="text" class="form-control" name="Curp" value="<?=$beneficiario[0]->Curp ?>"placeholder="Escriba su curp" aria-label="curp">
</div>

    <input  type="submit" class="btn btn-success" value="Actualizar">
</form>
</div>

