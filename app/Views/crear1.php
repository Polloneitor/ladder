
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
        <div class="container" style="background-color:white">
           

              <img src="<?php echo base_url()?>/images/blanco.jpg"width="100" height="50">

              <div class="row">
                <div class="col-3">

                </div>

                <div class="col-7">
                  <h1 style="color: rgb(21, 6, 54);">Elige el nombre de tu personaje</h1> 

                </div>
                <div class="col-5">
                 
                </div>

              </div>
               

               
            <img src="<?php echo base_url()?>/images/blanco.jpg" height="50">



            <div class="row">
                    <div class="col-3">
                    </div>
                    <div class="col-7">
                        <form method="POST" action="<?php echo base_url(); ?>/Home/crear_personaje">
                        <label for="nombre">Nombre Personaje</label>
                            <input type="text" name="nombre" id="nombre" class="form-control">
                    </div>
            <img src="<?php echo base_url()?>/images/blanco.jpg"width="200" height="100">

            <div class="row">
              <div class="col-3">
                      </div>



                <div class="col-7">
                <div class="form-group">
                            <label for="especie">Seleccione una especie</label>
                            <select class="form-control" id="especieID" name="especie">
                            <?php foreach($listaEspecie as $item):?>
                                <tr>


                                    <option value="<?php echo $item['especieID'];?>"><?php echo $item['nombre'];?> </option>


                            </tr>
                            <?php endforeach;?>

                            </select>
                            </div>  





                </div>
                
            </div>
            <div class="row">
                <div class="col-3">
                  </div>
                  <div class="col-6">
                  <img src="<?php echo base_url()?>/images/1.jpg"width="100" height="100">
                  <img src="<?php echo base_url()?>/images/2.jpg"width="100" height="100">
                  <img src="<?php echo base_url()?>/images/3.jpg"width="100" height="100">
                  <img src="<?php echo base_url()?>/images/4.jpg"width="100" height="100">
                  <img src="<?php echo base_url()?>/images/5.jpg"width="100" height="100">
                  </div>
            </div>

            
            <img src="<?php echo base_url()?>/images/blanco.jpg"width="200" height="100">

            <div class="row">
              <div class="col-5">
              </div>
              <div class="col-5">
              <button class="btn btn-primary">Guardar</button>
              </div>
            
        
    </div>
    
    
    
  </body>
</html>