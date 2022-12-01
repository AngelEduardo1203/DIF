<div class="container text-center">
	    <li class="list-group-item">Egreso</li>
	    <div class="row align-items">
	    <div class="col">
	    <li class="list-group-item text-black"><p>agua<?=$Egresos[0]->agua  ?> </p></li>
		<li class="list-group-item text-black"><p>luz <?=$Egresos[0]->luz  ?> </p></li>
		<li class="list-group-item text-black"><p>gas  <?=$Egresos[0]->gas  ?> </p></li>
		<li class="list-group-item text-black"><p>salud <?=$Egresos[0]->salud ?> </p></li>
		<li class="list-group-item text-black"><p>alimentacion <?=$Egresos[0]->alimentacion ?> </p></li>
	    </div>
	    <div class="col">
		<li class="list-group-item text-black"><p>vestimenta <?=$Egresos[0]->vestimenta  ?> </p></li>	
		<li class="list-group-item text-black"><p>educacion <?=$Egresos[0]->educacion  ?> </p></li> 
		<li class="list-group-item text-black"><p>transporte <?=$Egresos[0]->transporte  ?> </p></li>   	
	    </div>
	    <div class="col">
		<li class="list-group-item text-black"><p>telefono_fijo <?=$Egresos[0]->telefono_fijo  ?> </p></li>
		<li class="list-group-item text-black"><p>telefono_celular<?=$Egresos[0]->telefono_celular ?> </p></li>
		<li class="list-group-item text-black"><p>internet <?=$Egresos[0]->internet  ?> </p></li>
		<li class="list-group-item text-black"><p>tv_Cable <?=$Egresos[0]->tv_Cable  ?> </p></li>
		</div>
		<div class="col">
		<li class="list-group-item text-black"><p>Id: <?=$Egresos[0]->Id_EgresosMensuales ?> </p></li>		
		<li><a class="btn btn-primary">Editar</a></li>
 		</div>
 	</div>
</div>