
        
        <div class="container" style="background-color:white">
        <?php
        $session = session();
        $estadoLog= false;
        if(isset($session)){
            if($session->has('isLoggedIn')){
            if($session->isLoggedIn){
                $estadoLog = true;
                }
            }
        }
        ?>
        
              <div class="row">                    
                <img src="<?php echo base_url()?>/images/blanco.jpg"width="10" height="100">
                <div class="col-3"style="background-color:white">
                    
                </div>
                <div class="col-7"style="background-color:white">
                <?php
                if($estadoLog){
                    ?> 

                            <h1>Bienvenido señor/a
                                <?php $session = session(); echo " : ".$session->get('name');?>
                            </h1>

                            
                    <?php }?>
                </div>
              </div>
              <div class="row">
                <div class="col-1"style="background-color:white">
                    <img src="<?php echo base_url()?>/images/blanco.jpg"width="10" height="10">
                </div>
                <div class="col"style="background-color:blue">
                    <div class="card" style="width: 13rem;">
                        <img src="<?php echo base_url()?>/images/space.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Crear Personaje</h5>
                          <p class="card-text">Inicia tu aventura creando a tu personaje</p>
                          <a href="/ladder/Home/crear_pj" class="btn btn-primary">Crear</a>
                        </div>
                      </div>
                </div>
                <div class="col"style="background-color:orange">
                    <div class="card" style="width: 13rem;">
                        <img src="<?php echo base_url()?>/images/space2.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Avances</h5>
                          <p class="card-text">Vigila tu progreso en esta aventura.</p>
                          <a href="#" class="btn btn-primary">Progreso</a>
                        </div>
                      </div>
                </div>
                <div class="col"style="background-color:purple">
                    <div class="card" style="width: 13rem;">
                        <img src="<?php echo base_url()?>/images/space4.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Customización</h5>
                          <p class="card-text">Edita el equipamiento de tu personaje.</p>
                          <a href="#" class="btn btn-primary">Inventario</a>
                        </div>
                      </div>
                </div>
               

                <div class="col"style="background-color:red">
                    <div class="card" style="width: 13rem;">
                        <img src="<?php echo base_url()?>/images/space3.gif" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Resultados</h5>
                          <p class="card-text">Observa los logros obtenidos.</p>
                          <a href="#" class="btn btn-primary">Logros</a>
                        </div>
                      </div>
                </div>
                <div class="col-1"style="background-color:white">
                    <img src="<?php echo base_url()?>/images/blanco.jpg"width="10" height="10">
                </div>
                


              </div>
            <img src="<?php echo base_url()?>/images/blanco.jpg"width="100" height="100">

        </div>
        
    
    
    
    
  </body>
</html>