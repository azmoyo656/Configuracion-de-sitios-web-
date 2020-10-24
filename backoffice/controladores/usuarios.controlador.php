<?php

class ControladorUsuarios{


 public function ctrRegistrarUsuario(){

    if(isset($_POST["registroNombre"])){

        if(preg_match('/^[a-zA-Z0-9ñÑáéíóúÁÉÍÓÚ ]+$/', $_POST["registroNombre"]) &&
 preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["registroEmail"]) &&
  preg_match('/^[a-zA-Z0-9]+$/', $_POST["registroPassword"])){

$encriptar = crypt($_POST["registroPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');
          $encriptarEmail = md5($_POST["registroEmail"]);



            $tabla = "registrousuarios";
 $token = md5 ($_POST["registroNombre"]."+".$_POST["registroEmail"]);
            $datos = array("perfil" => "visitante",


              "nombre" => $_POST["registroNombre"],
                           "password" => $encriptar,
                     "token"=>$token,
                           "verificacion" => 1,
                            "email" => $_POST["registroEmail"],
                           
                            "email_encriptado" => $encriptarEmail
                        );


            $respuesta = ModeloUsuarios::mdlRegistroUsuario($tabla, $datos);

            if($respuesta == "ok"){

                echo'<script>

                    swal.fire({
                        title: "Buen Trabajo!",
                        text: "Ahora puede ingresar al sistema!",
                        icon: "success",
                        button: "Aceptar",
                          }).then(function(result){
                                    if (result.value) {

                                    window.location = "ingreso";

                                    }
                                })

                    </script>';

            }


        }else{

            echo'<script>

                swal.fire ({
                      icon: "error",
                      title: "¡ no puede ir con los campos vacíos o llevar caracteres especiales!",
                      showConfirmButton: true,
                      confirmButtonText: "Cerrar"
                      }).then(function(result){
                        if (result.value) {

                        window.location = "ingreso";

                        }
                    })

              </script>';
        }
    }

}

  /*=============================================
  Mostrar Usuarios
  =============================================*/

  static public function ctrMostrarUsuarios($item, $valor){
  
    $tabla = "registrousuarios";

    $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

    return $respuesta;

  }



/*=============================================
  Ingreso Usuario
  =============================================*/

  public function ctrIngresoUsuario(){

    if(isset($_POST["ingresoEmail"])){

       if(preg_match('/^[^0-9][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[@][a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{2,4}$/', $_POST["ingresoEmail"]) && preg_match('/^[a-zA-Z0-9]+$/', $_POST["ingresoPassword"])){

        $encriptar = crypt($_POST["ingresoPassword"], '$2a$07$asxx54ahjppf45sd87a5a4dDDGsystemdev$');

        $tabla = "registrousuarios";
        $item = "email";
        $valor = $_POST["ingresoEmail"];

        $respuesta = ModeloUsuarios::mdlMostrarUsuarios($tabla, $item, $valor);

        if($respuesta["email"] == $_POST["ingresoEmail"] && $respuesta["password"] == $encriptar){

    
          if($respuesta["verificacion"] == 0){

            echo'<script>

              swal.fire({
                  icon:"error",
                    title: "¡ERROR!",
                    text: "¡El correo electrónico aún no ha sido verificado, por favor revise la bandeja de entrada o la carpeta SPAM de su correo electrónico para verificar la cuenta, o contáctese con nuestro soporte a info@academyoflife.com!",
                    showConfirmButton: true,
                  confirmButtonText: "Cerrar"
                  
              }).then(function(result){

                  if(result.value){   
                      history.back();
                    } 
              });

            </script>';

            return;
            
          }else{

              $_SESSION["validarSesion"] = "ok";
            $_SESSION["id"] = $respuesta["id_usuario"];
                 $_SESSION["token"] = $respuesta["token"];
              $_SESSION["nombre"] = $respuesta["nombre"];
          
 $_SESSION["email"] = $respuesta["email"];
       
         $_SESSION["email_encriptado"] = $respuesta["email_encriptado"];
         $_SESSION["perfil"] = $respuesta["perfil"];
            $ruta = ControladorRuta::ctrRuta();

            echo '<script>
          
              window.location = "'.$ruta.'backoffice";        

            </script>';

          }

        }else{

          echo'<script>

            swal.fire({
                icon:"error",
                  title: "¡ERROR!",
                  text: "¡El email o contraseña no coinciden!",
                  showConfirmButton: true,
                confirmButtonText: "Cerrar"
                
            }).then(function(result){

                if(result.value){   
                    history.back();
                  } 
            });

          </script>';

        }


       }else{

        echo '<script>

          swal.fire({

            icon:"error",
            title: "¡CORREGIR!",
            text: "¡No se permiten caracteres especiales en ninguno de los campos!",
            showConfirmButton: true,
            confirmButtonText: "Cerrar"

          }).then(function(result){

            if(result.value){

              history.back();

            }

          }); 

        </script>';

       }

    }

  }
}
