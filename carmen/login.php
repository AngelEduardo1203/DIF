<div class="container-fluid bg-danger ">
 <div class="p-3 mb-3 bg-danger text-black"><p class="fw-bold fst-italic text-center fs-3">SISTEMA NACIONAL PARA EL DESARROLLO INTEGRAL DE LA FAMILIA</p></div>
 <div class="p-3 mb-3 bg-danger text-black"><p class="fw-bold fst-italic text-center fs-3">SISTEMA DIF MUNICIPAL SAN JUAN XIUTETELCO</p></div>
  <div class="p-1 mb-3 bg-danger text-black"><p class="fw-bold fst-italic text-center fs-3">"Trabajando para las Familias de Xiutetelco"</p> </div>
 <div class="text-center">
  <img src="https://raw.githubusercontent.com/mxabierto/assets/master/img/logos/sndif.png" class="rounded" >
</div>

  <div class="row">
    <div class="col"></div>
    <div class="col">
      <form action="<?=base_url('index.php/Usuario/login') ?>" method="POST">
        <form>
          <div class="row mb-  align-items-center">
          <label for="exampleInputEmail1"><p class="fw-bolder text-center">USUARIO</p></label>
          <input type="email" name="Correo"class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Ingrese el Usuario"></div>
          <div class="row mb-2  align-items-center">
          <label for="exampleInputPassword1"><p class="fw-bolder text-center">CONTRASEÑA</p></label>
          <input type="password" name="Pass"class="form-control" id="exampleInputPassword1" placeholder="Ingrese la Contraseña">
        </div>
          <div class="row mb-1 align-items-center">
          <button type="submit" class="btn btn-dark">Iniciar Sesion</button></div> 
        </form>
      </form>
    </div>
    <div class="col"></div>
  </div>
</div>


