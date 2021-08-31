<?php
if($_POST) {

    $to_Email = "edsongaldino@datapix.com.br"; // Write your email here
    //$to_Email = "atitudeintegrada@atitudeintegrada.com.br"; // Write your email here
   
    // Use PHP To Detect An Ajax Request
    if(!isset($_SERVER['HTTP_X_REQUESTED_WITH']) AND strtolower($_SERVER['HTTP_X_REQUESTED_WITH']) != 'xmlhttprequest') {
   
        // Exit script for the JSON data
        $output = json_encode(
        array(
            'type'=> 'error',
            'text' => 'Request must come from Ajax'
        ));
       
        die($output);
    }
   
    // Checking if the $_POST vars well provided, Exit if there is one missing
    if(!isset($_POST["nome"]) || !isset($_POST["email"]) || !isset($_POST["assunto"]) || !isset($_POST["telefone"]) || !isset($_POST["mensagem"])) {
        
        $output = json_encode(array('type'=>'error', 'text' => '<i class="icon ion-close-round"></i> Alguns campos estão vazios!'));
        die($output);
    }
   
    // PHP validation for the fields required
    if(empty($_POST["nome"])) {
        $output = json_encode(array('type'=>'error', 'text' => '<i class="icon ion-close-round"></i> Lamentamos, o campo nome está vazio ou com poucos caracteres!'));
        die($output);
    }
    
    if(!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL)) {
        $output = json_encode(array('type'=>'error', 'text' => '<i class="icon ion-close-round"></i> Por favor, insira um e-mail válido!.'));
        die($output);
    }

    // To avoid the spammy bots, you can change the value of the minimum characters required. Here it's <20
    if(strlen($_POST["mensagem"])<20) {
        $output = json_encode(array('type'=>'error', 'text' => '<i class="icon ion-close-round"></i> Escreva algo no campo mensagem!'));
        die($output);
    }
   
    // Proceed with PHP email
    $headers = 'MIME-Version: 1.0' . "\r\n";
    $headers .= 'Content-type:text/html;charset=UTF-8' . "\r\n";
    $headers .= 'From: My website' . "\r\n";
    $headers .= 'Reply-To: '.$_POST["email"]."\r\n";
    
    'X-Mailer: PHP/' . phpversion();
    
    // Body of the Email received in your Mailbox
    $emailcontent = 'Olá! Você recebeu uma mensagem de um visitante: <br/><br/> Nome: <strong>'.$_POST["nome"].'</strong><br/><br/>'. "\r\n" .
                'Mensagem: <br/> <em>'.$_POST["mensagem"].'</em><br/><br/>'. "\r\n" .
                'Telefone: <br/> <em>'.$_POST["telefone"].'</em><br/><br/>'. "\r\n" .
                '<strong>Enviado por '.$_POST["nome"].' pelo email: '.$_POST["email"].'</strong>' . "\r\n" ;
    
    $Mailsending = @mail($to_Email, $_POST["assunto"], $emailcontent, $headers);
   
    if(!$Mailsending) {
        
        //If mail couldn't be sent output error. Check your PHP email configuration (if it ever happens)
        $output = json_encode(array('type'=>'error', 'text' => '<i class="icon ion-close-round"></i> Oops! Algo deu errado no envio da mensagem. Tente novamente!'));
        die($output);
        
    } else {
        $output = json_encode(array('type'=>'message', 'text' => '<i class="icon ion-checkmark-round"></i> Olá '.$_POST["nome"] .', sua mensagem foi enviada com sucesso. Aguarde nosso contato!'));
        die($output);
    }
}
?>