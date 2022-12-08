
 <meta name="description" content="The small framework with powerful features">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" type="image/png" href="/favicon.ico"/>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

    <link href="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.css" rel="stylesheet" type="text/css">
    <script src="https://unpkg.com/vanilla-datatables@latest/dist/vanilla-dataTables.min.js" type="text/javascript"></script>

<div class="container" style="background-color:white">
<img src="<?php echo base_url()?>/images/blanco.jpg"width="10" height="50">

<table class="table table-dark table-striped" id="tablaRutina">
                        <thead>
                        <tr>
                            <th scope="col">Tipo rutina</th>
                            <th scope="col">Duración(minutos)</th>
                            <th scope="col">Repeticiones</th>
                            
                            <th scope="col">distancia recorrida(metros)</th>
                            <th scope="col">Experiencia obtenida</th>
                            <th scope="col">fecha de realización</th>

                            
                            
                            
                            
                        </tr>
                        </thead>
                        <tbody>
                        <?php $session = session();
                              $id=$session->get('id');
                        ?>
                        <?php foreach ($listaRutina as $item):?>
                            <?php if($item['userID']===$id){ ?>
                            <tr>   
                            <?php foreach ($listaTipo as $tipo):
                                if($item['tipoID']===$tipo['tipoID']){?>
                                    <td><?php echo $tipo['nombreTipo'];?></td>

                            <?php }endforeach;?>
                            
                            <td><?php echo $item['duracion'];?></td>

                             <?php if($item['tipoID']==='1' || $item['tipoID']==='4'){ ?> 
                                <td><?php echo $item['repeticiones'];?></td>
                            <?php }
                            else{ ?>
                             <td>no aplica</td>

                            <?php } ?>

                            <?php if($item['tipoID']==='2' || $item['tipoID']==='3'){ ?> 
                                <td><?php echo $item['distancia'];?></td>
                            <?php }
                            else{ ?>
                             <td>no aplica</td>

                            <?php } ?>



                            
                            <td><?php echo $item['experiencia'];?></td>
                            <td><?php echo $item['created_at'];?></td>
                            </tr>
                            <?php }?>
                        <?php endforeach;?>
                        </tbody>
                    </table>
                    <img src="<?php echo base_url()?>/images/blanco.jpg"width="10" height="100">

                    <div class="row"> 
                        <div class="col-5">  
                            
                            </div> 
                            <div class="col-5">  
                                <a href="/ladder/Home/enviar_crear_rutina" class="btn btn-success"  >Realizar nueva rutina</a>
                            </div> 

                    </div>
                    <img src="<?php echo base_url()?>/images/blanco.jpg"width="10" height="100">




</div>
 
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.13.1/css/jquery.dataTables.min.css">
    <script src="//cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script> 
    <script>

        //var tabla= document.querySelector("#tablaLibro")

        //var dataTable = new DataTable(tablaLibro);
        //let table = new DataTable('#tablaLibro', {paging: false,
    //scrollY: 400
    // options
//});
    b =new DataTable( '#tablaRutina', {
    paging: false,
    scrollY:        200,
    deferRender:    true,
    scroller:       true
} );
    </script>