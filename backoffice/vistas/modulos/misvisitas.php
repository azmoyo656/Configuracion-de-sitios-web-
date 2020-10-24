 
<?php




$valor = $_SESSION["id"];

$registros = ControladorVisitas::ctrMostrarId1($valor);

?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>MIS VISITAS</h1>
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

  
                     
                       <th>Bloque</th>
                   <th>Piso</th>
                   <th>Apartamento</th>
                   <th>Hora</th>
                     </tr>
                   </thead>
                   <tbody>

                 
                    <?php


                    foreach ($registros as $key => $value) {

                      echo'<tr>



                      <td><span class="text-uppercase badge badge-success">'.$value["bloque"].'</td></span>
                     <td><span class="text-uppercase badge badge-success">'.$value["piso"].'</td></span>
                        <td><span class="text-uppercase badge badge-success">'.$value["apartamento"].'</td></span>
                        <td><span class="text-uppercase badge badge-success">'.$value["seleccionhora"].'</td></span>
                      ';
                  
}


                 
                

                    ?>

                  </tbody>
                  <tfoot>
                    <tr>
                  
      
                       <th>Bloque</th>
                   <th>Piso</th>
                   <th>Apartamento</th>
                   <th>Hora</th>
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