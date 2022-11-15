<div class="container">
  <?php echo validation_errors(); ?>
<form action="<?=base_url('index.php/ApoyosC/updateApoyo/').$apoyo[0]->IdApoyo ?>" method="POST">
  <div class="col">
    <label for="inputNombreA" class="fs-5 text-center text-uppercase">Nombre Apoyo</label>
    <select id="inputNombreA" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Soltero(a)</option>
      <option value="2">Casado(a)</option>
      <option value="3">Divorciado(a)</option>
    </select>
  </div>
  <div class="col">
<label >FECHA ENTREGA</label>
<input type="date" class="form-control" min="0000-00-00" max="0000-00" name="Fecha_Entrega" value="<?=$apoyo[0]->Fecha_Entrega ?>">
</div>
<div class="col">
<label  for="inputNameB" class="fs-5 text-center  text-uppercase">Nombre Beneficiario</label>
<input type="text" class="form-control" name="Nombre_Beneficiario" value="<?=$apoyo[0]->Nombre_Beneficiario ?>" placeholder="Nombre Beneficiario" aria-label="nombre de beneficiario">
</div>
<div class="col">
<label  for="inputNameT" class="fs-5 text-center text-uppercase">Nombre Tutor</label>
<input type="text" class="form-control" name="Nombre_Tutor" value="<?=$apoyo[0]->Nombre_Tutor ?>" placeholder="Nombre tutor..." aria-label="escriba su  nombre..">
</div>
<div class="col">
<label for="inputName" class="fs-5 text-center text-uppercase">Descripcion</label>
<input type="text" class="form-control" name="Descripcion" value="<?=$apoyo[0]->Descripcion ?>"placeholder="Descripcion...." aria-label="Descripcion">
</div>
 <input  type="sub" class="btn btn-success" value="Actualizar">
</form>
</div>
