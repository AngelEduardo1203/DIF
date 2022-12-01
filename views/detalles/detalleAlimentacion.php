<div class="container text-center">
	<li class="list-group-item text-black">Comsumos de alimentos semanal</li>
 <div class="row align-items">
	<div class="col">
		<li class="list-group-item  text-black"><p>pollo       <?=$alimento[0]->pollo       ?></p></li>
		<li class="list-group-item  text-black"><p>res         <?=$alimento[0]->res         ?></p></li>
		<li class="list-group-item  text-black"><p>cerdo       <?=$alimento[0]->cerdo       ?></p></li>
		<li class="list-group-item  text-black"><p>pescado     <?=$alimento[0]->pescado     ?></p></li>
		<li class="list-group-item  text-black"><p>leche       <?=$alimento[0]->leche       ?></p></li>
		<li class="list-group-item  text-black"><p>huevo       <?=$alimento[0]->huevo       ?></p></li>
	</div>
	<div class="col"> 
		<li class="list-group-item  text-black"><p>cereales    <?=$alimento[0]->cereales    ?></p></li>
		<li class="list-group-item  text-black"><p>frutas      <?=$alimento[0]->frutas      ?></p></li>
		<li class="list-group-item  text-black"><p>verduras    <?=$alimento[0]->verduras    ?></p></li>
		<li class="list-group-item  text-black"><p>leguminosas <?=$alimento[0]->leguminosas ?></p></li>
		<li class="list-group-item  text-black"><p>otros       <?=$alimento[0]->otros       ?></p></li>
	</div>
	<div class="col">
		<?php foreach ($alimento as $key): ?>
	    <li><a class="btn btn-success" href="<?=base_url('index.php/AlimentacionC/updateAlimentacion/').$key->Id_Alimentacion?>">editar</a></li>
		<?php endforeach ?>
    </div>
  </div>
</div>