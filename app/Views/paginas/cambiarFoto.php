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
        <div class="row">

            <div class="col-1">
           
            </div>
            <div class="col-5">
            
            </div>
            <div class="col-6">

            </div>
        </div>
        <div class="row">
        <div class="col-1">

         </div>
           <div class="col-5">
                <div class="container">
                <img src="<?php echo base_url(); ?>/images/load.jpg" alt="Michi" width="300" height="300"></div>
            </div>
            <div class="col-6">
                <?php $nombre=$session->get('name');?>
                <div class="row">Nombre: <?php $session = session(); echo $session->get('name');?> </div>
                <div class="row">Email: <?php $session = session(); echo $session->get('email');?>  </div>
                
                
                <div class="row"><img src="<?php echo base_url(); ?>/images/white.png" alt="Michi" width="100%" height="130"></div>
                <div class="row"> </div>
                <form action="<?= base_url()?>/Home/upload_image" enctype="multipart/form-data" method="post">
                <div class="row"><input class="form-comtrol" type="file" enctype="multipart/form-data" name='image'></div>
                <div class="row"><input type="submit" class="btn btn-primary mt-3 float-end" value="enviar"> </div>
                


           
            </div></div>
</div>