<?php
	function verifica_dados($pdo){
		if(isset($_POST['env']) && $_POST['env'] == "form"){
			$email = addslashes($_POST['email']);
			$stmt = $pdo->prepare("SELECT * FROM usuarios WHERE email = ?");
			$stmt->bind_param("s", $email);
			$stmt->execute();
			$result = $stmt->get_result();
			$total = $result->num_rows;

			if($total > 0){
				$dados = $result->fetch_assoc();
				add_dados_recover($pdo, $email);
			}else{
				// Trate o caso em que nenhum usuário com o email fornecido foi encontrado
			}
		}
	}

	function add_dados_recover($pdo, $email){
		$rash = md5(rand());
		$stmt = $pdo->prepare("INSERT INTO recover_solicitation (email, rash) VALUES (?, ?)");
		$stmt->bind_param("ss", $email, $rash);
		$stmt->execute();

		if($stmt->affected_rows > 0){
			enviar_email($pdo, $email, $rash);
		}
	}

	function enviar_email($pdo, $email, $rash){
		$destinatario = $email;

		$subject = "RECUPERAR SENHA";
		$headers = "MIME-Version: 1.0\r\n";
		$headers .= "Content-Type: text/html; charset=UTF-8\r\n";
		$message = "<html><head>";
		$message .= "
			<h2>Você solicitou uma nova senha?</h2>
			<hr>
			<h3>Se sim, aqui está o link para você recuperar a sua senha:</h3>
			<p>Para recuperar sua senha, acesse este link: <a href='".sitedir."?pagina=alterar&rash={$rash}'>".sitedir."?pagina=alterar&rash={$rash}</a></p>
			<hr>
		";

		$message .="</head></html>";

		if(mail($destinatario, $subject, $message, $headers)){
			echo "<div class='alert alert-success'>Os dados foram enviados para o seu email. Acesse para recuperar.</div>";
		}else{
			echo "<div class='alert alert-danger'>Erro ao enviar</div>". $pdo->error;
		}
	}

	function verifica_rash($pdo, $rash){
		$stmt = $pdo->prepare("SELECT * FROM recover_solicitation WHERE rash = ? AND status = 0");
		$stmt->bind_param("s", $rash);
		$stmt->execute();
		$result = $stmt->get_result();
		$total = $result->num_rows;

		if($total > 0){
			if(isset($_POST['env']) && $_POST['env'] == "upd"){
				$nsenha = addslashes(md5($_POST['senha']));
				
				$dados = $result->fetch_assoc();
				atualiza_senha($pdo, $dados['email'], $nsenha);
				deleta_rashs($pdo, $dados['email']);
				echo "<br><div class='alert alert-success'>Senha alterada com sucesso.</div>";
				redireciona("?pagina=inicio");
			}
		}else{
			echo "<br><div class='alert alert-danger'>Rash inválida.</div>";
		}
	}

	function atualiza_senha($pdo, $email, $senha){
		$stmt = $pdo->prepare("UPDATE usuarios SET senha = ? WHERE email = ?");
		$stmt->bind_param("ss", $senha, $email);
		$stmt->execute();

		if($stmt->affected_rows > 0){
			return true;
		}else{
			return false;
		}
	}

	function deleta_rashs($pdo, $email){
		$stmt = $pdo->prepare("DELETE FROM recover_solicitation WHERE email = ?");
		$stmt->bind_param("s", $email);
		$stmt->execute();

		if($stmt->affected_rows > 0){
			return true;
		}else{
			echo $stmt->error;
		}
	}

	function redireciona($dir){
		echo "<meta http-equiv='refresh' content='3; url={$dir}'>";
	}
?>