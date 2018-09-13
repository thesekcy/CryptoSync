<?php require_once 'class_DB.php';

class Log extends DB
{
	private $id;
	private $usuario;

	public function setId($id){
		$this->id = $id;
	}
	public function setUsuario($usuario){
		$this->usuario = $usuario;
	}

	public function insert(){
		try {
			$sql  = "INSERT INTO `log_acesso` VALUES (:id, :usuario, CURRENT_TIMESTAMP)";
			$stmt = DB::prepare($sql);
			return $stmt->execute(array(
				':id'       => $this->id,
				':usuario'  => $this->usuario
			));
		} catch (PDOException $e) {   
			echo "Erro: " . $e->getMessage();   
		}
	}
	public function update($id){
		try {
			$sql  = "DELETE FROM `log_acesso` WHERE TIMEDIFF(NOW(),`dtCadastro`) > '00:30:58' AND `iduser` = :id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			return $stmt->execute();
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	public function select($id){
		try {
			$sql  = "SELECT COUNT(`iduser`) as iduser FROM `log_acesso` where TIMEDIFF(NOW(),`dtCadastro`) < '00:31:00' AND `iduser` = :id GROUP BY iduser";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
	public function block($id, $valor){
		try {
			$sql  = "UPDATE `users` SET ativo = :ativo WHERE id = :id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			$stmt->bindParam(':ativo', $valor, PDO::PARAM_INT);
			return $stmt->execute();
		}catch(PDOException $e){
			echo $e->getMessage();
		}
	}
}