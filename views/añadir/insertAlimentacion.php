<div class="container"> 
<?php echo validation_errors();?>
<form action="<?=base_url('index.php/AlimentacionC/insertAlimentacion/') ?>" method="POST"> 
<div class="col">
</div>
  <label for="inputP" class="fs-5 text-center text-uppercase">pollo</label>
    <select id="inputP" class="form-select" name="pollo">
      <option selected>Selecciona...</option>
      <option value="1">Diario </option>
      <option value="2"> Cada Tercer dia</option>
  	  <option value="3"> Una vez a la semana</option>
	  <option value="4"> Una vez al mes </option>
    </select>

    <label for="inputR" class="fs-5 text-center text-uppercase" >res</label>
      <select id="inputR" class="form-select" name="res">
          <option selected>Selecciona...</option>
          <option value="1">Diario </option>
          <option value="2"> Cada Tercer dia</option>
          <option value="3"> Una vez a la semana</option>
          <option value="4"> Una vez al mes </option>
        </select> 

    <label for="inputC" class="fs-5 text-center text-uppercase">cerdo </label>
      <select id="inputC" class="form-select" name="cerdo">
        <option selected>Selecciona...</option>
        <option value="1">Diario </option>
        <option value="2"> Cada Tercer dia</option>
        <option value="3"> Una vez a la semana</option>
        <option value="4"> Una vez al mes </option>
      </select>

    <label for="inputPE" class="fs-5 text-center text-uppercase">pescado </label>
      <select id="inputPE" class="form-select" name="pescado">
        <option selected>Selecciona...</option>
        <option value="1">Diario </option>
        <option value="2"> Cada Tercer dia</option>
        <option value="3"> Una vez a la semana</option>
        <option value="4"> Una vez al mes </option>
    </select>

    <label for="inputL" class="fs-5 text-center text-uppercase"> leche </label>
      <select id="inpuTL" class="form-select" name="leche">
        <option selected>Selecciona...</option>
        <option value="1">Diario </option>
        <option value="2"> Cada Tercer dia</option>
        <option value="3"> Una vez a la semana</option>
        <option value="4"> Una vez al mes </option>
      </select>

    <label for="nputCE" class="fs-5 text-center text-uppercase"> cereales </label>
      <select id="inputCE" class="form-select" name="cereales">
        <option selected>Selecciona...</option>
        <option value="1">Diario </option>
        <option value="2"> Cada Tercer dia</option>
        <option value="3"> Una vez a la semana</option>
        <option value="4"> Una vez al mes </option>
      </select>

    <label for="inputH" class="fs-5 text-center text-uppercase"> huevo </label>
      <select id="inputH" class="form-select" name="huevo">
        <option selected>Selecciona...</option>
        <option value="1">Diario </option>
        <option value="2">Cada Tercer dia</option>
        <option value="3">Una vez a la semana</option>
        <option value="4">Una vez al mes </option>
      </select>

    <label for="inputF" class="fs-5 text-center text-uppercase"> frutas </label>
     <select id="inputF" class="form-select" name="frutas">
        <option selected>Selecciona...</option>
        <option value="1">Diario </option>
        <option value="2"> Cada Tercer dia</option>
        <option value="3"> Una vez a la semana</option>
        <option value="4"> Una vez al mes </option>
      </select>

    <label for="inputV" class="fs-5 text-center text-uppercase"> verduras </label>
     <select id="inputV" class="form-select" name="verduras">
        <option selected>Selecciona...</option>
        <option value="1">Diario </option>
        <option value="2"> Cada Tercer dia</option>
        <option value="3"> Una vez a la semana</option>
        <option value="4"> Una vez al mes </option>
      </select>
    <label for="input" class="fs-5 text-center text-uppercase"> leguminosas</label> 
    <select id="inputP" class="form-select" name="pollo"> 
      <option selected>Selecciona...</optio n>
      <option value="1">Diario </option>  
      <option value="2"> Cada Tercer dia</op  tion>
      <option value="3"> Una vez a la semana</option>
      <option value="4"> Una vez al mes </option>
    </option>

    <label for="inputO" class="fs-5 text-center text-uppercase"> otros </label>
      <select id="inputO" class="form-select" name="otros">
        <option selected>Selecciona...</option>
        <option value="1">Diario </option>
        <option value="2"> Cada Tercer dia</option>
        <option value="3"> Una vez a la semana</option>
        <option value="4"> Una vez al mes </option>
      </select>
    <input type="submit">
</div>