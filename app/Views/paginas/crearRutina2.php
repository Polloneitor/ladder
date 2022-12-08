<div class="container" style="background-color:white">
<img src="<?php echo base_url()?>/images/blanco.jpg" height="50">

<div class="row">
<div class="col-2">
</div>
        <div class="col-4">
        <img src="<?php echo base_url()?>/images/ejercicio<?php echo ($listaID)?>.jpg"width="300" height="300">

        </div>
<div class="col-5">
        <form method="POST" action="<?php echo base_url(); ?>/Home/crear_rutina">
        <label for="duracion">Duración de la rutina (minutos)</label>
        <input type="text" name="duracion" id="duracion" class="form-control">

        <?php if ($listaID==='1' || $listaID==='4'){?> 
            <form method="POST" action="<?php echo base_url(); ?>/Home/crear_rutina">
            <label for="repeticiones">Cantidad de repeticiones</label>
            <input type="text" name="repeticiones" id="repeticiones" class="form-control">
            
        <?php } else{ ?> 
            <form method="POST" action="<?php echo base_url(); ?>/Home/crear_rutina">
            <label for="distancia">Distancia recorrida aprox. (metros)</label>
            <input type="text" name="distancia" id="distancia" class="form-control">
            
        <?php } ?>
<div class="invisible">
            <form method="POST" action="<?php echo base_url(); ?>/Home/crear_rutina">
                        <label for="tipoID">Distancia recorrida aprox. (metros)</label>
                        <input type="text" name="tipoID" id="tipoID" class="form-control" value=<?php echo $listaID?>>
</div>
        
        <img src="<?php echo base_url()?>/images/blanco.jpg" height="100">
       

        <button class="btn btn-primary">Finalizar</button>       

        


</div>
</div>

<img src="<?php echo base_url()?>/images/blanco.jpg" height="50">

</div>