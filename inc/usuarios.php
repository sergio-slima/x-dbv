<?php 

class usuario {

	private $pdo;
	public $msgErro = "";

	public function conectar($nome, $host, $usuario, $senha) {
		global $pdo;
		global $msgErro;

		try {
			$pdo = new PDO("mysql:dbname=".$nome.";host=".$host,$usuario,$senha);
		} catch (PDOException $e) {
			$msgErro = $e -> getMessage();
		}
		
	}

	public function cadastrar($nome, $clube, $associacao, $email, $senha) {
		global $pdo;
		// Verificar se já existe email cadastrado
		$sql = $pdo -> prepare("SELECT id_usuario FROM usuarios WHERE email = :e");
		$sql -> bindValue(":e",$email);
		$sql -> execute();

		if ($sql -> rowCount() > 0) {
			return false; //Já está cadastrado
		} else {  // Caso não, cadastrar
			$sql = $pdo -> prepare("INSERT INTO usuarios (nome, clube, associacao, email, senha) VALUES (:n, :c, :a, :e, :s)");
			$sql -> bindValue(":n",$nome);
			$sql -> bindValue(":c",$clube);
			$sql -> bindValue(":a",$associacao);
			$sql -> bindValue(":e",$email);
			$sql -> bindValue(":s",md5($senha));
			$sql -> execute();
			return true;	
		}
		
	}

	public function logar($email, $senha) {
		global $pdo;
		// Verifica se email e senha estão cadastrados
		$sql = $pdo -> prepare("SELECT id_usuario FROM usuarios WHERE email = :e AND senha = :s");
		$sql -> bindValue(":e",$email);
		$sql -> bindValue(":s",md5($senha));
		$sql -> execute();

		if ($sql -> rowCount() > 0) {
			// Entrar no sistema
			$dado = $sql -> fetch();
			session_start();
			$_SESSION['id_usuario'] = $dado['id_usuario'];
			return true; // Logado com sucesso
		} else {
			return false; // Não foi possivel logar
		}
	}

}

?>