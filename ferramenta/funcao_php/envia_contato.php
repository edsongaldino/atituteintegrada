<?php
// função para salvar contato
function envia_contato($nome,$email,$telefone,$assunto,$mensagem) {
	
		$corpo_mensagem = "
			
			<p>Ola,<br/> ".$nome." esteve visitando seu site e lhe enviou uma mensagem.</p>
			<p>
			<b>Nome</b>: ".$nome."<br>
			<b>E-mail</b>: ".$email."<br>
			<b>Telefone</b>: ".$telefone."<br>
			<b>Assunto</b>: ".$assunto."<br>
			<b>Mensagem</b>: ".$mensagem."<br>
			</p>
			<p>Este e um e-mail enviado pelo site www.atitudeintegrada.com.br.</p>
			<p>Atitude Integrada</p>
						
			";

		$mailer = new PHPMailer();
		$mailer->IsSMTP();
		$mailer->SMTPDebug = 0;
		$mailer->CharSet = 'UTF-8';
		$mailer->Port = 587; //Indica a porta de conexão 
		$mailer->Host = 'email-ssl.com.br';//Endereço do Host do SMTP 
		$mailer->SMTPAuth = true; //define se haverá ou não autenticação 
		$mailer->Username = 'formulario@atitudeintegrada.com.br'; //Login de autenticação do SMTP
		$mailer->Password = 'A=gY*6d([M@L'; //Senha de autenticação do SMTP
		$mailer->FromName = 'Atitude Integrada'; //Nome que será exibido
		$mailer->From = 'atendimento@atitudeintegrada.com.br'; //Obrigatório ser 
		$mailer->AddAddress("atendimento@atitudeintegrada.com.br", "Atitude Integrada");
		$mailer->AddCC($email, $nome);
		$mailer->Subject = "Contato - Atitude Integrada";
		$mailer->MsgHTML($corpo_mensagem);   

		if($mailer->send()) {
			return true;
		} else {
			return false;
		}

}
?>