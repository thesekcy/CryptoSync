<?php require_once 'class_Crud.php';

class User extends crud
{
	protected $table = 'users';
	private $nome;
	private $usuario;
	private $senha;
	private $email;
	private $nivel;
	private $ativo;

	public function setNome($nome){
		$this->nome = $nome;
	}
	public function getNome(){
		return $this->nome;
	}
	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}
	public function getUsuario(){
		return $this->usuario;
	}
	public function setSenha($senha){
		$this->senha = $senha;
	}
	public function getSenhal(){
		return $this->senha;
	}
	public function setEmail($email){
		$this->email = $email;
	}
	public function getEmail(){
		return $this->email;
	}
	public function setNivel($nivel){
		$this->nivel = $nivel;
	}
	public function getNivel(){
		return $this->nivel;
	}
	public function setAtivol($ativo){
		$this->ativo = $ativo;
	}
	public function getAtivo(){
		return $this->ativo;
	}

	public function insert(){
		try {
			$sql  = "INSERT INTO $this->table VALUES (NULL,:nome, :usuario, :senha, :email, 1,1,CURRENT_TIMESTAMP)";
			$stmt = DB::prepare($sql);
			return $stmt->execute(array(
				':nome'     => $this->nome,
				':usuario'  => $this->usuario,
				':senha'    => $this->senha,
				':email'    => $this->email
			));
		} catch (PDOException $e) {   
			echo "Erro: " . $e->getMessage();   
		}
	}
	public function update($id){
		try {
			$sql  = "UPDATE $this->table SET nome = :nome, usuario = :usuario, senha = :senha, email = :email, nivel = :nivel, ativo = :ativo WHERE id = :id";
			$stmt = DB::prepare($sql);
			return $stmt->execute(array(
				':nome'     => $this->nome,
				':usuario'  => $this->usuario,
				':senha'    => $this->senha,
				':email'    => $this->email,
				':nivel'    => $this->nivel,
				':ativo'    => $this->ativo
			));
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	public function select($usuario){
		try {
			$sql  = "SELECT id, nome, usuario, senha, email, nivel, ativo FROM $this->table WHERE usuario = :usuario";
			//echo "<br><b>".$sql."</b><br>";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':usuario', $usuario, PDO::PARAM_STR);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
}