<?php

require_once 'DB.php';

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
		$this-> password = $password;
	}

	public function save()
{
		$sql =($this->id)?$this->update():$this->insert();
		$stmt = DB::getConn()->prepare($sql)
		$stmt->bindValue(' :nombre', $this->nombre, PDO::PARAMSTR);
		$stmt->bindValue(' :email', $this->email, PDO::PARAMSTR);
		$stmt->bindValue(' :username', $this->username, PDO::PARAMSTR);
		$stmt->bindValue(' :password', $this->password, PDO::PARAMSTR);
		$stmt->execute();
}
	private function insert()
	{
		return ' INSERT INTO usuario (nombre, email, username, password) VALUES (:nombre, :usuario, :username, :password)';
	}

	private function update()
	{
		return ' UPDATE usuario SET nombre=:nombre, email=:email, username=:username,password=:password WHERE id = '.$this->id;
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
	public static function find($id)
	{
		$sql = 'SELECT * FROM usuario WHERE id = :id';
		$stmt = DB::getConn()->prepare($Sql);
		$stmt->bindValue(':id', $id, PDO::PARAM_INT);
		$stmt->execute();

		$result = $stmt->fetch(PDO::FETCH_ASSOC)

		$usuario = new Usuario('','','', 0);
		$usuario->toUser($result);
		return $usuario
	}

	public function toUser($data)
	{
		$this->id = $data['id'];
		$this->nombre = $data['nombre'];
		$this->email = $data['email'];
		$this->username = $data['username'];
		$this->password = $data['password'];
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
