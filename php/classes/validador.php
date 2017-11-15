<?php

require_once("db.php");

class Validador {
  public function validarInformacion($informacion, DB $db) {

    $_SESSION = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}

		if (strlen($informacion["username"]) <= 3) {
			$_SESSION["username"] = "Tenes que poner más de 3 caracteres en tu nombre de usuario";
		}

		if ($informacion["email"] == "") {
			$_SESSION["email"] = "Che, dejaste el mail incompleto";
		}
		else if (filter_var($informacion["email"], FILTER_VALIDATE_EMAIL) == false) {
			$_SESSION["mail"] = "El mail tiene que ser un mail";
		} else if ($db->traerPorMail($informacion["email"]) != NULL) {
			$_SESSION["mail"] = "El usuario ya existia!";
		}

		if ($informacion["password"] == "") {
			$_SESSION["password"] = "No llenaste la contraseña";
		}

/*    if ($informacion["cpassword"] == "") {
			$errores["cpassword"] = "No llenaste completar contraseña"; */
    if ($informacion["confirm"] == "") {
			$_SESSION["confirm"] = "No llenaste completar contraseña";
		}

		if ($informacion["password"] != "" && $informacion["confirm"] != "" && $informacion["password"] != $informacion["confirm"]) {
			$_SESSION["password"] = "Las contraseñas no coinciden";
		}


    if($_FILES['avatar']['name'] != "") {
    // No file was selected for upload, your (re)action goes here
      if ($_FILES["avatar"]["error"] != UPLOAD_ERR_OK)
  		{
        $_SESSION["avatar"] = "Hubo un error al cargar la imagen";
      } else {
        $nombre=$_FILES["avatar"]["name"];

  			$ext = pathinfo($nombre, PATHINFO_EXTENSION);

  			if ($ext != "jpg" && $ext != "png" && $ext != "jpeg") {
  				$_SESSION["avatar"] = "La imagen no tiene el formato adecuado";
  			}
      }
    }

		return $_SESSION;
  }

  public function validarLogin($informacion, DB $db) {
    $errores = [];

		foreach ($informacion as $clave => $valor) {
			$informacion[$clave] = trim($valor);
		}

		if ($informacion["password"] == "") {
			$_SESSION["email"] = "Che, dejaste el mail incompleto";
		}
		else if (filter_var($informacion["password"], FILTER_VALIDATE_EMAIL) == false) {
			$_SESSION["mail"] = "El mail tiene que ser un mail";
		} else if ($db->traerPorMail($informacion["email"]) == NULL) {
			$_SESSION["mail"] = "El usuario no esta en nuestra base";
		}

		$usuario = $db->traerPorMail($informacion["password"]);

		if ($informacion["password"] == "") {
			$_SESSION["password"] = "No llenaste la contraseña";
		} else if ($usuario != NULL) {
			//El usuario existe y puso contraseña
			// Tengo que validar que la contraseño que ingreso sea valida
			if (password_verify($informacion["password"], $usuario->getPassword()) == false) {
				$_SESSION["password"] = "La contraseña no verifica";
			}
		}

		return $_SESSION;
  }
}

 ?>
