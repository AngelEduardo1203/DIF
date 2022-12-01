<div class="container">
  <?php echo validation_errors(); ?>
<form action="<?=base_url('index.php/ServiciosC/updateServicio/').$IdServicio[0]->IdServicio ?>" method="POST">
  <div class="col">
    <label for="Agua" class="fs-5 text-center text-uppercase">Agua</label>
    <select id="Agua" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Luz" class="fs-5 text-center text-uppercase">Luz</label>
    <select id="Luz" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Alumbrado" class="fs-5 text-center text-uppercase">Alumbrado</label>
    <select id="Alumbrado" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Drenaje" class="fs-5 text-center text-uppercase">Drenaje</label>
    <select id="Drenaje" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Gas" class="fs-5 text-center text-uppercase">Gas</label>
    <select id="Gas" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Telefono_Casa" class="fs-5 text-center text-uppercase">Telefono de Casa</label>
    <select id="Telefono_Casa" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Telefono_Celular" class="fs-5 text-center text-uppercase">Telefono de Celular</label>
    <select id="Telefono_Celular" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Vigilancia" class="fs-5 text-center text-uppercase">Vigilancia</label>
    <select id="Vigilancia" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Television_Abierta" class="fs-5 text-center text-uppercase">Television Abierta</label>
    <select id="Television_Abierta" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Television_Paga" class="fs-5 text-center text-uppercase">Television de Paga</label>
    <select id="Television_Paga" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Limpieza" class="fs-5 text-center text-uppercase">Limpieza</label>
    <select id="Limpieza" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Pavimento" class="fs-5 text-center text-uppercase">Pavimento</label>
    <select id="Pavimento" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  
