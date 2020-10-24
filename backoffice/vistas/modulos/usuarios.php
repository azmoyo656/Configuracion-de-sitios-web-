 

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Usuarios Registrados</h1>
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
          
            
   <table id="example4" class="table table-bordered  table-striped tablas">
                    <thead>
                      <tr>

  
                       <th>Nombre</th>
                       <th>Email</th>
                   <th>Fecha de registro</th>
                     </tr>
                   </thead>
                   <tbody>

                    <?php

  


$item = null;
$valor = null;

$registros = ControladorUsuarios::ctrMostrarUsuarios($item, $valor);

                    foreach ($registros as $key => $value) {

                      echo'<tr>

                      <td class="text-uppercase">'.$value["nombre"].'</td>
                      <td class="text-uppercase">'.$value["email"].'</td>
                      <td class="text-uppercase">'.$value["fecharegistro"].'</td>
                      ';
                  
}


                 
                

                    ?>

                  </tbody>
                  <tfoot>
                    <tr>
                  
             
                       <th>Nombre</th>
                       <th>Email</th>
                   <th>Fecha de registro</th>

                   </tr>
                 </tfoot>
               </table>
             </div>
    
   
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->