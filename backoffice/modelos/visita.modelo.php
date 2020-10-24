<?php

require_once "conexion.php";

class ModeloVisitas{

	
	static public function mdlIngresarVisita($tabla, $datos){

		

		$stmt = Conexion::conectar()->prepare("INSERT INTO $tabla(nombre,bloque,piso,seleccionhora,apartamento,idusuario) 
VALUES (:nombre,:bloque,:piso,:seleccionhora,:apartamento,:idusuario)");


		$stmt->bindParam(":nombre", $datos["nombre"], PDO::PARAM_STR);
        $stmt->bindParam(":bloque", $datos["bloque"], PDO::PARAM_STR);     
        $stmt->bindParam(":piso", $datos["piso"], PDO::PARAM_STR);
        $stmt->bindParam(":seleccionhora", $datos["seleccionhora"], PDO::PARAM_STR);
       
 $stmt->bindParam(":apartamento", $datos["apartamento"], PDO::PARAM_STR);
   $stmt->bindParam(":idusuario", $datos["idusuario"], PDO::PARAM_STR);    

		if($stmt->execute()){

			return "ok";	

		}else{

			print_r(Conexion::conectar()->errorInfo());
		
		}

		$stmt->close();
		
		$stmt = null;

	}



	/*=============================================
	MOSTRAR LISTAR
	=============================================*/

	static public function mdlMostrarVisita($tabla, $item, $valor){

		if($item != null){

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE $item = :$item");

			$stmt -> bindParam(":".$item, $valor, PDO::PARAM_STR);

			$stmt -> execute();

			return $stmt -> fetch();

		}else{

			$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla");

			$stmt -> execute();

			return $stmt -> fetchAll();

		}

		$stmt -> close();

		$stmt = null;

	}


	/*=============================================
	MOSTRAR POR ID
	=============================================*/

	static public function mdlMostrarId1($tabla, $valor){

		$stmt = Conexion::conectar()->prepare("SELECT * FROM $tabla WHERE idusuario = :idusuario ORDER BY id DESC ");

		$stmt -> bindParam(":idusuario", $valor, PDO::PARAM_STR);

		$stmt -> execute();

		return $stmt -> fetchAll();

		$stmt -> close();

		$stmt = null;
		
	}
	

}