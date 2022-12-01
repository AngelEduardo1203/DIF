<div class = "container">
    <a class="btn btn-success" href="<?=base_url('')?>">Agregar</a>
    <table class="table table-striped table-bordered">
        <thead>
            <p class="text-primary"></p>
            <th>Id_Ingresos</th>
            <th>Id_Familiares</th>
            <th>Salarios </th>
            <th>trabajo </th>
            <th>accciones </th>
        </thead>
        <tbody>
            <?php foreach ($ingresos as $key): ?>
                <tr>
                    <td><?=$key->Id_Ingresos ?></td>
                    <td><?=$key->Id_Familiares ?></td>
                    <td><?=$key->salarios ?></td>
                    <td><?=$key->trabajo ?></td>
                    <td><a class="btn btn-outline-primary" href="<?=base_url('index.php/IngresosC/detalleIn/').$key->Id_Ingresos?>"> mostrar informacion </a>
                    </td>
                </tr>
            <?php endforeach ?>
        </tbody>
    </table>
</div>