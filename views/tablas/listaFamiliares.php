<div class="container">
    <a class="btn btn-success" href="<?=base_url('index.php/FamiliaresC/insertFamiliar') ?>">Agregar Producto</a>
    <a class="btn btn-success" href="<?=base_url('index.php/FamiliaresC/insertFamiliar') ?>">regresar</a>
    <table class="table table-striped table-bordered">
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
                    <td><?=$key->Id_Beneficiario  ?></td>
                    <td><?=$key->nombre  ?></td>
                    <td><?=$key->apellido_paterno  ?></td>
                    <td><?=$key->apellido_materno  ?></td>
                    <td><?=$key->fecha_nacimiento  ?></td>
                    <td><?=$key->parentesco  ?></td>
                    <td><?=$key->grado_escolar  ?></td>
                    <td><?=$key->ocupacion  ?></td>
                    <td><?=$key->seguro_social  ?></td>
                    
                    <td><a class="btn btn-success" href="<?=base_url('index.php/FamiliaresC/detalleFamiliar/').$key->Id_Familiares ?>">Ver detalle</a></td>
                    <td><a class="btn btn-danger" href="<?=base_url('index.php/FamiliaresC/borrarFamiliar/').$key->Id_Familiares ?>">Borrar</a></td>
                    <td><a class="btn btn-danger" href="<?=base_url('index.php/FamiliaresC/updateFamiliar/').$key->Id_Familiares ?>">Editar</a></td>   
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>