<div class="container" style="background-color:white">
<?php // print_r($listaPersonaje);?>
<?php  //print_r($listaPersonaje[0]['nombre']);?>
<?php
        $session = session();
        
        ?>

              <img src="<?php echo base_url()?>/images/blanco.jpg"width="100" height="50">

              <div class="row">
                <div class="col-1">

                </div>

                <div class="col-4">
                  <img src="<?php echo base_url()?>/images/<?php $session = session(); echo $session->get('name');?>.jpg"width="350" height="300"style="border-radius: 30px;">

                </div>
                <div class="col-5">
                  <h3 style="color: rgb(21, 6, 54);">Nombre: <?php $session = session(); echo $session->get('name');?></h3>
                 
                  <h3 style="color: rgb(21, 6, 54);">Rutinas realizadas: </h3>
                  <h3 style="color: rgb(21, 6, 54);">Porcentaje de constancia:  </h3>
                  <img src="<?php echo base_url()?>/images/blanco.jpg"width="200" height="100">
                  <div class="row">           
                    <a type="button" class="btn btn-info" href="<?php echo base_url(); ?>/Home/cambiar_perfil"><h4 style="color:white">Cambiar foto de perfil</h4></a>
                </div>
                </div>

              </div>
              <?php $id=$session->get('id');
              ?>;

              <img src="<?php echo base_url()?>/images/blanco.jpg"width="100" height="100">
              <?php if($id===$listaPersonaje[$id-1]['userID']){ 
                
                ?>
                <div class="row">
                <div class="col-1">

                </div>

                <div class="col-4">
                  <img src="<?php echo base_url()?>/images/<?php echo $listaPersonaje[$id-1]['especieID']?>.jpg"width="300" height="300"style="border-radius: 30px;">

                </div>
                <div class="col-5">
                  <h3 style="color: rgb(21, 6, 54);">Nombre Personaje: <?php echo $listaPersonaje[$id-1]['nombre']?></h3>
                  <h3 style="color: rgb(21, 6, 54);">Nivel: <?php echo $listaPersonaje[$id-1]['nivel']?></h3>
                  <h3 style="color: rgb(21, 6, 54);">Vida: <?php echo $listaPersonaje[$id-1]['vida']?>hp</h3>
                  <img src="<?php echo base_url()?>/images/blanco.jpg"width="200" height="100">
                  <div class="row">           
                </div>
                </div>

              </div>

                <?php }?>

              
               

               
            <img src="<?php echo base_url()?>/images/blanco.jpg"width="100" height="100">
            <div class="row">
              <div class="col-3"></div>
              <div class="col-3">
                <h3 style="color: rgb(21, 6, 54);">Objetos obtenidos</h3>

              </div>
              <div class="col-3"></div>
            </div>
            <div class="row">
              <div class="col-3"></div>
              <div class="col-6">
                <img src="<?php echo base_url()?>/images/objetos.jpg"width="100%" height="310"style="border-radius: 30px;">
              </div>
              <div class="col-3"></div>

            </div>
            <img src="<?php echo base_url()?>/images/blanco.jpg"width="200" height="100">


        </div>
        
    
    
    
    
  </body>
</html>