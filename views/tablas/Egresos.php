<div class = "conteiner">
    <table class="table table-striped">
        <thead>
            <th> Id_EgresosMensuales </th>
            <th> alimentacion </th>
            <th> agua </th>
            <th> luz </th>
            <th> gas </th>
            <th> educacion </th>
            <th> telefono_fijo </th>
            <th> telefono_celular </th>
            <th> transporte </th>
            <th> vestimenta </th>
            <th> salud </th>
            <th> internet </th>
            <th> tv_Cable </th>
            <th> otros </th>
        </thead>
        <tbody>
            <?php foreach ($Egresos as $key): ?> 
                <tr>
                    <td><?=$key->Id_EgresosMensuales ?></td> 
                    <td><?=$key->alimentacion ?></td>
                    <td><?=$key->agua ?></td>
                    <td><?=$key->luz ?></td>
                    <td><?=$key->gas ?></td>
                    <td><?=$key->educacion ?></td>
                    <td><?=$key->telefono_fijo ?></td>
                    <td><?=$key->telefono_celular ?></td>
                    <td><?=$key->transporte ?></td>
                    <td><?=$key->vestimenta ?></td>
                    <td><?=$key->salud ?></td>
                    <td><?=$key->internet ?></td>
                    <td><?=$key->tv_Cable ?></td>
                    <td><?=$key->otros?></td>
                </tr>    
            <?php endforeach ?>
        </tbody>
    </table>
</div>