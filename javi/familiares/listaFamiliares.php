<div class="container">
    
    <table class="table table-striped table-bordered">

    <a class="btn btn-success" href="<?=base_url('index.php/FamiliaresC/insertFamiliar') ?>">Agregar Producto</a>
        <thead>
            <p class="text-primary"></p>
            <th>Id</th>
            <th>Nombre</th>
            <th>Apellido Paterno</th>
            <th>Apellido Materno</th>
            <th>Fecha de nacimiento</th>
            <th>Parentesco</th>
            <th>Grado escolar</th>
            <th>Ocupacion</th>
            <th>Seguro social</th>
            <th>Operaciones</th>
        </thead>
        <tbody>
            <?php foreach ($familiares as $key): ?>
                <tr>
                    <td><?=$key->IdFamiliar  ?></td>
                    <td><?=$key->Nombre  ?></td>
                    <td><?=$key->ApellidoPaterno  ?></td>
                    <td><?=$key->ApellidoMaterno  ?></td>
                    <td><?=$key->FechaNacimiento  ?></td>
                    <td><?=$key->Parentesco  ?></td>
                    <td><?=$key->GradoEscolar  ?></td>
                    <td><?=$key->Ocupacion  ?></td>
                    <td><?=$key->SeguroSocial  ?></td>
                    
                    <td><a class="btn btn-success" href="<?=base_url('index.php/FamiliaresC/detalleFamiliar/').$key->IdFamiliar ?>">Ver detalle</a></td>
                    <td><a class="btn btn-danger" href="<?=base_url('index.php/FamiliaresC/borrarFamiliar/').$key->IdFamiliar ?>">Borrar</a></td>
                    <td><a class="btn btn-danger" href="<?=base_url('index.php/FamiliaresC/updateFamiliar/').$key->IdFamiliar ?>">Editar</a></td>   
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>