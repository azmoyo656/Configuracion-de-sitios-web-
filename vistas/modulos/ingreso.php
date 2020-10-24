<!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">  <small></small></h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
             
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
   
    <div class="content">
      <div class="container">

        <div class="row">
          <div class="col-lg-6">
            <div class="card">

              <div class="card-body">
                <h5 class="card-title"></h5>

          
            
             
      
                <p class="card-text">
            
<div class="card-body clearfix">
                <blockquote class="quote-secondary">

                 <p> Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum</p>
                  <br>

                  <p>Registrate</p>
                   <p>Inicia Sesion</p>
                   <p>Registra una nueva visita</p>

                  <small>Asi de sencillo puedes registrar tu visita a la unidad residencial <cite title="Source Title"></cite></small>
                </blockquote>
              </div>
      
       

                </p>

                <a href="#" class="card-link"></a>
                <a href="#" class="card-link"></a>
              </div>
            </div>

          
         
          </div>
          <!-- /.col-md-6 -->
          <div class="col-lg-6">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title m-0"></h5>
              </div>
              <div class="card-body">
                <h6 class="card-title"></h6>

                <div class="col-md-12 text-center">

                <img src="vistas/img/plantilla/unnamed.png" class="img-thumbnail previsualizar" width="600">


                

                <p class="card-text"></p>
             
              </div>
            </div>

            <div class="card card-primary card-outline">
              <div class="card-header">
                <h5 class="card-title  text-center">INICIAR SESION</h5>
              </div>
              <div class="card-body">


              

       <form method="post">
        <div class="input-group mb-3">
          <input type="email" class="form-control" name="ingresoEmail" placeholder="Email"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control"name="ingresoPassword" placeholder="Password"required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
    
<div class="row">
          <div class="col-8">

           <div class="custom-control custom-checkbox">
                          <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                          <label for="customCheckbox1" class="custom-control-label">Recuerdame</label>
                        </div>
                          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block">INICIAR</button>
          </div>

             </form>

   <?php 

              $ingreso = new ControladorUsuarios();
              $ingreso -> ctrIngresoUsuario();

            ?>


         
 <div class="col-md-12 text-center">

         <p class="text-center pt-1"><a href="#"  data-toggle="modal" data-target="#modalAgregarRegistro">¿Crear Cuenta?</a></p>

       </div>

        </div>
   



 <!-- organizado 

    /*=============================================
    MODAL 5
    =============================================*/
  -->
 
  <div class="modal fade" id="modalAgregarRegistro">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                  <h4 class="modal-title"></h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
              

<form method="post">
      

  <div class="card-body register-card-body">
      <h2 class="login-box-msg">REGISTRARSE</h2>
      <br>

      <form  method="post">
        <div class="input-group mb-3">
          <input type="text" class="form-control"   name="registroNombre"   placeholder="Nombre Completo" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" class="form-control"   name="registroEmail"   placeholder="Email" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control"   name="registroPassword"   placeholder="Password" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
     


    
     
  

       
 <div class="row">
          <div class="col-8">
            <div class="icheck-primary">
              <input type="checkbox" id="remember" required>
              <label for="remember">
              <a href="https://www.usc.edu.co"> Aceptar Terminos</a>
              </label>
            </div>
          </div>
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-success btn-block">Unirme</button>
          </div>
      
        </div>

        <br>         

              </div>
                
                   </form>

 <?php

        $crearRegistro = new ControladorUsuarios();
        $crearRegistro -> ctrRegistrarUsuario();

        ?>





     
                  </div>
                </div>
              </div>



      
</div>

        
        </div>
            </div>
          </div>
          <!-- /.col-md-6 -->
        </div>
        <!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->