 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Registrar Visita</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
         
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title"></h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" data-toggle="tooltip" title="Collapse">
              <i class="fas fa-minus"></i></button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" data-toggle="tooltip" title="Remove">
              <i class="fas fa-times"></i></button>
          </div>
        </div>
        <div class="card-body">
          
               
     <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-md-3">

            <!-- Profile Image -->
            <div class="card card-primary card-outline">
              <div class="card-body box-profile">
                <div class="text-center">
                  <img class="profile-user-img img-fluid img-circle"
                       src="vistas/dist/img/user4-128x128.jpg"
                       alt="User profile picture">
                </div>

                <h3 class="profile-username text-center"><?php echo $_SESSION["nombre"] ?></h3>

                <p class="text-muted text-center"><?php echo $_SESSION["perfil"] ?></p>

            

                <a href="#" class="btn btn-primary btn-block"><b>Cambiar Contraseña</b></a>
                <a href="#" class="btn btn-primary btn-block"><b>Cambiar Foto</b></a>
                  <a href="#" class="btn btn-danger btn-block"><b>Eliminar Cuenta</b></a>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->

           
          </div>
          <!-- /.col -->
          <div class="col-md-9">
            <div class="card">
              <div class="card-header p-2">
                <ul class="nav nav-pills">
                  <li class="nav-item"><a class="nav-link active" href="#activity" data-toggle="tab">Registrar Visita</a></li>
                 
                </ul>
              </div>
              <div class="card-body">
                <div class="tab-content">
                  <div class="active tab-pane" id="activity">


<form class="form-horizontal" method="post">
              
                
                      <div class="form-group row d-none" >
                        <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10" >
        <input type="hidden"class="form-control"  value="<?php echo $_SESSION["nombre"] ?>"name="AgregarNombre" placeholder=""  readonly>
                        </div>
                      </div>


                      <div class="form-group row d-none" >
                        <label for="inputName" class="col-sm-2 col-form-label">Nombre</label>
                        <div class="col-sm-10" >
        <input type="hidden"class="form-control"  value="<?php echo $_SESSION["id"] ?>"name="AgregarId" placeholder=""  readonly>
                        </div>
                      </div>


                    
                      <div class="form-group row">
                      
                      </div>
                      <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Bloque</label>
                        <div class="col-sm-10">
                          


  <div class="input-group">
           
             <select class="form-control " name="AgregarBloque"required>
              
              <option value="">Selecionar</option>
              
          <option value="1">1</option>

              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>


            </select>

          </div>


                        </div>
                      </div>


                       <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Piso</label>
                        <div class="col-sm-10">
                          


  <div class="input-group">
           
             <select class="form-control " name="AgregarPiso"required>
              
              <option value="">Selecionar</option>
              
          <option value="1">1</option>

              <option value="2">2</option>
              <option value="3">3</option>
              <option value="4">4</option>
              <option value="5">5</option>


            </select>

          </div>


                        </div>
                      </div>



                       <div class="form-group row">
                        <label for="inputExperience" class="col-sm-2 col-form-label">Hora de Visita</label>
                        <div class="col-sm-10">
                          

     <div class="input-group date" id="timepicker" data-target-input="nearest">
                      <input type="text" class="form-control datetimepicker-input" name="AgregarHora" data-target="#timepicker"/ required>
                      <div class="input-group-append" data-target="#timepicker" data-toggle="datetimepicker">
                          <div class="input-group-text"><i class="far fa-clock"></i></div>
                      </div>
                      </div>


                        </div>
                      </div>



                      <div class="form-group row">
                        <label for="inputSkills" class="col-sm-2 col-form-label">Apartamento</label>
                        <div class="col-sm-10">
                          <input type="number" class="form-control" name="AgregarApartamento"id="inputSkills" placeholder="Numero de apartamento" required>
                        </div>
                      </div>
                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <div class="checkbox">
                            <label>
                             
                            </label>
                          </div>
                        </div>
                      </div>



                      <div class="form-group row">
                        <div class="offset-sm-2 col-sm-10">
                          <button type="submit" class="btn btn-danger">Registrar Visita</button>
                        </div>
                      </div>
                    </form>

                    <?php
$registrarvisita = new ControladorVisitas();
$registrarvisita ->  ctrCrearVisita();


                    ?>






                  </div>
               

                  


                </div>
                <!-- /.tab-content -->
              </div><!-- /.card-body -->
            </div>
            <!-- /.nav-tabs-custom -->
          </div>
          <!-- /.col -->
        </div>

</div>

   
      </div>
      

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->