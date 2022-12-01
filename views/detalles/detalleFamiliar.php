<div class="container">
<li class="list-group-item">Familiares</li>
<div class="row align-items">
    <div class="col">
      <li class="list-group-item text-black"><p>Nombre : <?=$familiares[0]->nombre ?></p></li>
    <li class="list-group-item text-black"><p>ApellidoPaterno : <?=$familiares[0]->apellido_paterno ?></p></li>
    <li class="list-group-item text-black"><p>ApellidoMaterno : <?=$familiares[0]->apellido_materno ?></p></li>
    <li class="list-group-item text-black"><p>FechaNacimiento : <?=$familiares[0]->fecha_nacimiento ?></p></li>  
    </div>
    <div class="col">
   <li class="list-group-item text-black"><p>Parentesco : <?=$familiares[0]->parentesco ?></p></li>
    <li class="list-group-item text-black"><p>GradoEscolar : <?=$familiares[0]->grado_escolar ?></p></li>
    <li class="list-group-item text-black"><p>Ocupacion : <?=$familiares[0]->ocupacion ?></p></li>
    <li class="list-group-item text-black"><p>SeguroSocial : <?=$familiares[0]->seguro_social ?></p></li>
    </div>
    <div class=" col">
        <?php foreach ($familiares as $key): ?>
        <a class="btn btn-success" href="<?=base_url('index.php/BeneficiariosC/eliminarBeneficiario/').$key->Id_Familiares?>">Eliminar</a>
        <a class="btn btn-success" href="<?=base_url('index.php/BeneficiariosC/updateBeneficiario/').$key->Id_Familiares?>">Editar</a>
        <a class="btn btn-primary" href="<?=base_url('index.php/IngresosC/ingresosF/').$key->Id_Familiares?>">Ingresos</a>
        <?php endforeach ?>
    </div>
</div>
</div>