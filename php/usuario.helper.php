<?php
//abm usuario
function getUsers ()
{
    global $CONFIG;
    $users = @file_get_contents($CONFIG['include'].'usuarios.json');
    return (!$users)?[]:json_decode($users, true);
}

function getUserByEmail($email)
{
    $usuarios = getUsers();
    foreach ($usuarios as $usuario) {
       if ($usuario['email'] == $email) {
            return $usuario;
       }
    }
    return false;
}

function crearUsuario()
{
    //newUser es un array del tipo usuario
    $newUser = [
        'nombre' => $_POST['nombre'],
        'email' => $_POST['email'],
        'edad' => $_POST['edad'],
        'password' => password_hash($_POST['password'], PASSWORD_DEFAULT)
    ];

    return $newUser;
}

function guardarUsuario($usuario)
{
    global $CONFIG;
    //users es un array de arrays usuarios
    $users = getUsers();
    //guardo newUser dentro del array de usuarios
    $users[] = $usuario;
    //lo codifico a json
    $users = json_encode($users);
    //guardarlo en el archivo json
    file_put_contents($CONFIG['include'].'usuarios.json', $users);
}

function guardarImagenUsuario()
{
    global $CONFIG;
    global $usuario;

    $errores = '';
    $file = $_FILES['avatar'];
    $path = $CONFIG['include'].'content/usuarios/';

    $tiposPermitidos = ['png', 'jpg', 'jpeg', 'gif'];

    if ($file["error"] == UPLOAD_ERR_OK) {
        $nombre = $file["name"];
        $archivo = $file["tmp_name"];
        $ext = pathinfo($nombre, PATHINFO_EXTENSION);
        if (!in_array($ext, $tiposPermitidos)) {
            $errores = "No acepto la extensión";
        } else {
            $nombre = str_replace('@', '-', $_POST['email']);
            $nombre = str_replace('.', '-', $nombre);
            $usuario['avatar'] = $nombre.'.'.$ext;
            move_uploaded_file($archivo, $path.$nombre.'.'.$ext);
        }
    } else {
        $errores = "Hubo un problema en la carga de la imagen";
    }
    return $errores;
}
//----------
