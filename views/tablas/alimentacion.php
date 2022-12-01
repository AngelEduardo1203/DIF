
<div class = "conteiner">
    <table class="table table-striped">
        <thead >
            <th>id Ali mentacion</th>
            <th>Id de beneficiario</th>
            <th>pollo </th>
            <th>res </th>
            <th>cerdo </th>
            <th>pescado </th>
            <th>leche </th>
            <th>cereales </th>
            <th>huevo </th>
            <th>frutas </th>
            <th>verduras </th>
            <th>leguminosas</th>
            <th>otros </th>
        <tbody>
                <<?php foreach ($alimentacion as $key): ?>
                    <tr>
                        <td><?=$key->Id_Alimentacion ?></td>
                        <td><?=$key->Id_Beneficiario?></td>
                        <td><?=$key->pollo ?></td>
                        <td><?=$key->res ?></td>
                        <td><?=$key->cerdo ?></td>
                        <td><?=$key->pescado ?></td>
                        <td><?=$key->leche ?></td>
                        <td><?=$key->cereales ?></td>
                        <td><?=$key->huevo ?></td>
                        <td><?=$key->frutas ?></td>
                        <td><?=$key->verduras ?></td>
                        <td><?=$key->leguminosas?></td>
                        <td><?=$key->otros ?></td>
                    </tr>
                   <a class="btn btn-success" href="<?=base_url('index.php/BeneficiarioC/eliminarBeneficiario/').$key->Id_Beneficiario?>">Eliminar</a>
                   <a class="btn btn-success" href="<?=base_url('index.php/BeneficiarioC/updateBeneficiario/').$key->Id_Beneficiario ?>">Editar</a>
                <?php endforeach ?>
        </tbody>
    </table>
</div>