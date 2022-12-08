<div class="container" style="background-color:white">
<img src="<?php echo base_url()?>/images/blanco.jpg"width="200" height="100">

              <div class="row">
              <div class="col-3"></div>
              <div class="col-7">
              <form method="POST" action="<?php echo base_url(); ?>/Home/enviar_crear_rutina2">
              <div class="form-group"method="POST" action="<?php echo base_url(); ?>/Home/enviar_crear_rutina2">
                            <label for="tipo">Seleccione una especie</label>
                            <select class="form-control" id="tipoID" name="tipoID">
                            <?php foreach($listaTipo as $item):?>
                                <tr>


                                    <option value="<?php echo $item['tipoID'];?>"><?php echo $item['nombreTipo'];?> </option>

                            </tr>
                            <?php endforeach;?>

                            </select>
                            </div>  





                </div>



              </div>

             
                        
            <img src="<?php echo base_url()?>/images/blanco.jpg"width="200" height="100">
            <button class="btn btn-primary">Siguiente</button>       
            <img src="<?php echo base_url()?>/images/blanco.jpg"width="200" height="100">
            </div>
 </div>