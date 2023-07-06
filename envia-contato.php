<?php
header('Content-Type: text/html; charset=UTF-8');
include("site-mod-include.php");
require_once('ferramenta/PHPMailer/PHPMailerAutoload.php');

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
        redireciona("confirma-contato/$status_envio/"."sucesso");
    } else {
        $status_envio = "erro";
        redireciona("confirma-contato/$status_envio/"."erro");
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
            redireciona("confirma-contato/$status_envio/"."sucesso");
        } else {
            $status_envio = "erro";
            redireciona("confirma-contato/$status_envio/"."erro");
        }
    
}else{

    redireciona("/index.php");

}
?>