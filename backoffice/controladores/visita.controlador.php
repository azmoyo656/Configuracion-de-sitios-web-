<?php

class ControladorVisitas{


static public function ctrCrearVisita(){


 if(isset($_POST["AgregarBloque"])){

         if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ]+$/', $_POST["AgregarBloque"])
            
            ){



            $tabla = "visita";

        
            $datos = array("nombre" => $_POST["AgregarNombre"],
                           "bloque" => $_POST["AgregarBloque"],
                           "piso" => $_POST["AgregarPiso"],
                           "seleccionhora" => $_POST["AgregarHora"],
                            "idusuario" => $_POST["AgregarId"],
                           "apartamento" => $_POST["AgregarApartamento"]);


            $respuesta = ModeloVisitas::mdlIngresarVisita($tabla, $datos);


            
            if($respuesta == "ok"){

                echo'<script>

                    swal.fire({
                        title: "INFORMACIÓN GUARDADA EXITOSAMENTE!",
                        text: "DATO REGISTRADO",
                        icon: "success",
                        button: "Aceptar",
                          }).then(function(result){
                                    if (result.value) {

                                    window.location = "visita";

                                    }
                                })

                    </script>';

            }


        }else{

            echo'<script>

                swal.fire	({
                      icon: "error",
                      title: "¡ no puede ir con los campos vacíos o llevar caracteres especiales!",
                      showConfirmButton: true,
                      confirmButtonText: "Cerrar"
                      }).then(function(result){
                        if (result.value) {

                        window.location = "visita";

                        }
                    })

              </script>';
        }
    }

}



/*=============================================
  MOSTRAR LISTAR
  =============================================*/

  static public function ctrMostrarVisitas($item, $valor){

    $tabla = "visita";

    $respuesta = ModeloVisitas::mdlMostrarVisita($tabla, $item, $valor);

    return $respuesta;
  
  }


  /*=============================================
  MOSTRAR por id de usuario
  =============================================*/

  static public function ctrMostrarId1($valor){

    $tabla = "visita";

    $respuesta = ModeloVisitas::mdlMostrarId1($tabla, $valor);

    return $respuesta;
  
  }




/*=============================================
  DESCARGAR EXCEL TODOS
  =============================================*/

  public function ctrDescargarReporteTodos(){

    
    $tabla = "visita";
  
      

      $item = null;
      $valor = null;

      $regist = ModeloVisitas::mdlMostrarVisita($tabla, $item, $valor);

    /*=============================================
    CREAMOS EL ARCHIVO DE EXCEL
    =============================================*/

    $Name = $_GET["todos"].'.xls';

    header('Expires: 0');
    header('Cache-control: private');
    header("Content-type: application/vnd.ms-excel"); // Archivo de Excel
    header("Cache-Control: cache, must-revalidate"); 
    header('Content-Description: File Transfer');
    header('Last-Modified: '.date('D, d M Y H:i:s'));
    header("Pragma: public"); 
    header('Content-Disposition:; filename="'.$Name.'"');
    header("Content-Transfer-Encoding: binary");

    echo utf8_decode("<table border='0'> 

      <tr> 
      <td style='font-weight:bold; border:1px solid #eee;'>Laboratorio</td> 
      <td style='font-weight:bold; border:1px solid #eee;'>Nombre</td> 

      <td style='font-weight:bold; border:1px solid #eee;'>Cedula</td> 
      <td style='font-weight:bold; border:1px solid #eee;'>Fecha de registro</td> 
      <td style='font-weight:bold; border:1px solid #eee;'>Codigo del sitio</td> 
       
     

        </tr>");

    foreach ($regist as $row => $item){

   $regist = ControladorVisitas::ctrMostrarVisitas("id", $item["id"]);

  
     echo utf8_decode("<tr>
           <td style='border:1px solid #eee;'>".$item["laboratorio"]."</td> 

           <td style='border:1px solid #eee;'>".$item["nombre"]."</td> 
           <td style='border:1px solid #eee;'>".$item["departament"]."</td> 
           <td style='border:1px solid #eee;'>".$item["fechaingreso"]."</td> 
         <td style='border:1px solid #eee;'>".$item["codigo"]."</td> 
          
   

           <td style='border:1px solid #eee;'>");

}

    echo "</table>";

  }

}