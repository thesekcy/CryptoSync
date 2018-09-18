<?php require_once 'class_DB.php';

abstract class crud extends DB{
	protected $table;

	abstract public function insert();
	abstract public function update($id);
	abstract public function select($email);

	public function find($id){
		try {
			$sql = "SELECT * FROM $this->table WHERE id = :id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			$stmt->execute();
			return $stmt->fetch(PDO::FETCH_ASSOC);
		} catch (PDOException $e) {   
			echo "Erro: " . $e->getMessage();   
		}
	}
	public function findALL(){
		try {
			$sql = "SELECT * FROM $this->table";
			$stmt = DB::prepare($sql);
			$stmt->execute();
			return 	$stmt->fetchAll();
		} catch (PDOException $e) {   
			echo "Erro: " . $e->getMessage();   
		}	
	}
	public function delete($id){
		try {
			$sql  = "UPDATE $this->table SET ativo = 0 WHERE id = :id";
			$stmt = DB::prepare($sql);
			$stmt->bindParam(':id', $id, PDO::PARAM_INT);
			return 	$stmt->execute();
		} catch (PDOException $e) {   
			echo "Erro: " . $e->getMessage();   
		}
	}
}