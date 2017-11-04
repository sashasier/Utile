<?php
/**
 *
 */
class Usuario {
	private $id;
	private $nombre;
	private $email;
	private $username;
	private $password;
	private $db;

	public function __construct($nombre, $email, $password, $username)
	{
		$this-> nombre = $nombre;
		$this-> email = $email;
		$this-> username = $username;
		$this-> password = $this->setPassword($password);

		$this->db = new PDO('mysql:host=localhost;dbname=utile', 'roor','root');
		$this->db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	}

	public function setPassword($value) {
		$this->password = password_hash($value, PASSWORD_DEFAULT);
	}
public function save()
{
	$sql = 'INSERT INTO usuarios (nombre,email,username,password) VALUES (:nombre,:email,:username,:password)';
	$stmt = $this->db->prepare($sql);
	$stmt->bindValue(' :nombre', $this->nombre, PDO::PARAMSTR);
	$stmt->bindValue(' :email', $this->email, PDO::PARAMSTR);
	$stmt->bindValue(' :username', $this->username, PDO::PARAMSTR);
	$stmt->bindValue(' :password', $this->password, PDO::PARAMSTR);
	$stmt->execute();
}

	$this->email = $datos["email"];
	$this->username = $datos["username"];

public function guardarImagen() {
	$nombre=$_FILES["avatar"]["name"];
	$archivo=$_FILES["avatar"]["tmp_name"];

	$ext = pathinfo($nombre, PATHINFO_EXTENSION);

	$miArchivo = "img/" . $this->getEmail() . "." . $ext;

	move_uploaded_file($archivo, $miArchivo);
}

public function setId($id) {
	$this->id = $id;
}

public function getId() {
	return $this->id;
}

public function setEmail($email) {
	$this->email = $email;
}

public function getEmail() {
	return $this->email;
}

public function setPassword($password) {
	$this->password = $password;
}

public function getPassword() {
	return $this->password;
}

public function setUsername($username) {
	$this->username = $username;
}

public function getUsername() {
	return $this->username;
}


}

?>

	}
	return $usuario;
}
