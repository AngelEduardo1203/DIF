<div class="container">
  <?php echo validation_errors(); ?>
<form action="<?=base_url('index.php/ArticulosC/updateArticulo/').$IdArticulo[0]->IdArticulo ?>" method="POST">
  <div class="col">
    <label for="Juego_Sala" class="fs-5 text-center text-uppercase">Juego_Sala</label>
    <select id="Juego_Sala" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Juego_Comedor" class="fs-5 text-center text-uppercase">Juego_Comedor</label>
    <select id="Juego_Comedor" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Estufa" class="fs-5 text-center text-uppercase">Estufa</label>
    <select id="Estufa" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Refrigerador" class="fs-5 text-center text-uppercase">Refrigerador</label>
    <select id="Refrigerador" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Microondas" class="fs-5 text-center text-uppercase">Microondas</label>
    <select id="Microondas" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Television" class="fs-5 text-center text-uppercase">Televisión</label>
    <select id="Television" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Dvd" class="fs-5 text-center text-uppercase">DVD</label>
    <select id="Dvd" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Equipo_Sonido" class="fs-5 text-center text-uppercase">Equipo de Sonido</label>
    <select id="Equipo_Sonido" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Computadora_Escritorio" class="fs-5 text-center text-uppercase">Computadora de Escritorio</label>
    <select id="Computadora_Escritorio" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Computadora_Portatil" class="fs-5 text-center text-uppercase">Computadora Portatil</label>
    <select id="Computadora_Portatil" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Lavadora" class="fs-5 text-center text-uppercase">Lavadora</label>
    <select id="Lavadora" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>

  <div class="col">
    <label for="Juegos_Video" class="fs-5 text-center text-uppercase">Juegos de Video</label>
    <select id="Juegos_Video" class="form-select">
      <option selected>Selecciona...</option>
      <option value="1">Si</option>
      <option value="2">No</option>
    </select>
  </div>
