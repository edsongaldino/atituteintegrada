<?php
include("site-mod-include.php");

// Inclui o arquivo class.phpmailer.php localizado na pasta class
require_once("ferramenta/PHPmailer/class.phpmailer.php");

if($_POST["acao"] == "envia-form-contato"){

	// Dados formulário
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	$telefone = $_POST['telefone'];
	$assunto = $_POST['assunto'];
	$mensagem = $_POST['mensagem'];

    $status_contato = envia_contato($nome,$email,$telefone,$assunto,$mensagem);
    
    if($status_contato) {
        $status_envio = "sucesso";
        redireciona("confirma-contato/$status_envio/".codifica("Recebemos seu contato e você receberá uma resposta no prazo máximo de 24 horas"));
    } else {
        $status_envio = "erro";
        redireciona("confirma-contato/$status_envio/".codifica("Não foi possível enviar a mensagem. Tente novamente!"));
    }
    
}
elseif($_POST["acao"] == "envia-form-contato-rapido"){

        // Dados formulário
        $nome = $_POST['nome'];
        $email = $_POST['email'];
        $telefone = $_POST['telefone'];
        $assunto = "Solicitação de Reserva";
        $mensagem = 'E-mail enviado pelo site';
    
        $status_contato = envia_contato($nome,$email,$telefone,$assunto,$mensagem);
        
        if($status_contato) {
            $status_envio = "sucesso";
            redireciona("confirma-contato/$status_envio/".codifica("Recebemos seu contato e você receberá uma resposta no prazo máximo de 24 horas"));
        } else {
            $status_envio = "erro";
            redireciona("confirma-contato/$status_envio/".codifica("Não foi possível enviar a mensagem. Tente novamente!"));
        }
    
}else{

    redireciona("/index.php");

}
?>