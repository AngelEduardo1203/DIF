<div class="container">
  <?php echo validation_errors(); ?>
<form action="<?=base_url('index.php/ApoyosC/insertApoyo') ?>" method="POST">
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
<label>Fecha Entrega</label>
<input type="date"  class="form-control" min="0000-00-00" max="0000-00-00" name="Fecha Entrega">
</div>
<div class="col">
<label  for="inputNameB" class="fs-5 text-center  text-uppercase">Nombre Beneficiario</label>
<input type="text" class="form-control" name="Nombre Beneficiario" placeholder="Nombre Beneficiario" aria-label="escriba su nombre de beneficiario">
</div>
<div class="col">
<label  for="inputNameT" class="fs-5 text-center text-uppercase">Nombre Tutor</label>
<input type="text" class="form-control" name="Apellido Tutor" placeholder="Nombre tutor..." aria-label="escriba su apellido paterno">
</div>
<div class="col">
<label for="inputName" class="fs-5 text-center text-uppercase">Descripcion</label>
<input type="text" class="form-control" name="Descripcion" placeholder="Descripcion...." aria-label="Descripcion">
</div>
<div class="col-12">
    <button type="button" class="btn btn-success">Guardar</button>
  </div>
</form>
</div>