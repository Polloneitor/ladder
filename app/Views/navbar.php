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
<?php
  if($estadoLog){?> 

<div class="container" style="background-color:white">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid"style="background-color:orange ;border-radius:30px">
                  <a class="navbar-brand" href="/ladder/Home/index">
                    <img src="<?php echo base_url()?>/images/logo.png"width="60" height="60"style="border-radius: 30px;">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/ladder/Home/ver_perfil"><h3 style="color: white;">Perfil</h3></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/ladder/Home/ver_rutinas"><h3 style="color: white;">Rutinas</h3></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/ladder/DiagramaGraph/initChart"><h3 style="color: white;">Estadisticas</h3></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/ladder/Home/ver_codigo"><h3 style="color: white;">Codigo </h3></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>

                     
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      
                      
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      
                      
                      <li class="nav-item">
                        <a class="nav-link" href="/ladder/Home/logout">
                            <button type="button" class="btn btn-info"href="iniciar.html">Logout</button>
                        </a>
                      </li>
                    </ul> 
                  </div>
                </div>
              </nav>
</div>
  <?php }
  else{?>
    <div class="container" style="background-color:white">
<nav class="navbar navbar-expand-lg navbar-light bg-light">
                <div class="container-fluid"style="background-color:orange ;border-radius:30px">
                  <a class="navbar-brand" href="/ladder/Home/index">
                    <img src="<?php echo base_url()?>/images/logo.png"width="60" height="60"style="border-radius: 30px;">
                  </a>
                  <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                  </button>
                  <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                      
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>

                     
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="#"></a>
                      </li>
                      
                      <li class="nav-item">
                        <a class="nav-link" href="/ladder/SignupController/index">
                            <button type="button" class="btn btn-danger" href="/ladder/SignupController/index">Registrarse</button>
                        </a>
                       
                      </li>
                      <li class="nav-item">
                        <a class="nav-link" href="/ladder/SigninController/index">
                            <button type="button" class="btn btn-success"href="iniciar.html">Login</button>
                        </a>
                      </li>
                    </ul> 
                  </div>
                </div>
              </nav>
</div>
  <?php }?>

