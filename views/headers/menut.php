<nav class="navbar fixed-top">
  <div class="container-fluid">
     <a class="navbar-brand" href="#"></a>
    <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header">
        <h5 class="offcanvas-title" id="offcanvasNavbarLabel">MENU PRINCIPAL</h5>
        <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
        </div>
        <div class="d-grid gap-2">
        <button class="btn btn-outline-success" type="button" href="<?=base_url('index.php/ApoyosC/show')?>">APOYOS</button>  
        <button class="btn btn-outline-success" type="button">BENEFICIARIOS</button>
        <button class="btn btn-outline-success" type="button">USUARIOS</button>
        <label>Tablas secundarias</label>
        <a class="btn btn-outline-success" type="button" href="<?=base_url('index.php/FamiliaresC/show')?>"> FAMILIARES</a>
        <button class="btn btn-outline-success" type="button" href="<?=base_url('index.php/IngresosC/show')?>">INGRESOS</button>
        <button class="btn btn-outline-success" type="button" href="<?=base_url('index.php/EgresosC/show')?>">EGRESOS</button>
        <button class="btn btn-outline-success" type="button" href="<?=base_url('index.php/AlimentacionC/show')?>">ALIMENTACION</button>
        <button class="btn btn-outline-success" type="button"href="<?=base_url('index.php/ViviendasC/show')?>">VIVIENDA</button>
        <button class="btn btn-outline-success" type="button" href="<?=base_url('index.php/EgresosC/show')?>">ARTICULOS</button>
        <button class="btn btn-outline-success" type="button" href="<?=base_url('index.php/EgresosC/show')?>">SERVICIOS</button>
        <button class="btn btn-outline-success" type="button" href="<?=base_url('index.php/EgresosC/show')?>">TUTOR</button>
</div>
</nav>