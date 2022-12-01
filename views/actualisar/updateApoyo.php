<div class="container">
  <?php echo validation_errors(); ?>
<form action="<?=base_url('index.php/ApoyosC/updateApoyo/').$apoyo[0]->Id_Apoyos ?>" method="POST">
  <div class="col">
    <label for="inputNombreA" class="fs-5 text-center text-uppercase">Nombre Apoyo</label>
    <input type="text" class="form-control" name="nombre_apoyo" value="<?=$apoyo[0]->nombre_apoyo?>">
    </select>
  </div>
  <div class="col">
<label for="inputName" class="fs-5 text-center text-uppercase">Descripcion</label>
<input type="text" class="form-control" name="descripcion" value="<?=$apoyo[0]->descripcion ?>" aria-label="Descripcion">
</div>
 <input  type="submit" class="btn btn-success" value="Actualizar">
</form>
</div>
