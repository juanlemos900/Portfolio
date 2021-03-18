<?php
if (isset($_POST['BTEnvia'])) {

    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];
 
 $email_remetente = "juanlemos.dev@gmail.com"; 

 $email_destinatario = "juan900.lemos@gmail.com";
 $email_reply = "$email"; 
 $email_assunto = "Contato portifólio";

 $email_conteudo = "Nome = $name \n"; 
 $email_conteudo .= "Email = $email \n";
 $email_conteudo .= "Mensagem = $message \n"; 

 $email_headers = implode ( "\n",array ( "From: $email_remetente", "Reply-To: $email_reply", "Return-Path: $email_remetente","MIME-Version: 1.0","X-Priority: 3","Content-Type: text/html; charset=UTF-8" ) );
 
 if (mail ($email_destinatario, $email_assunto, nl2br($email_conteudo), $email_headers)){ 
    echo "</b>E-Mail enviado com sucesso!</b>"; 
 } 
 
 else{ 
 echo "</b>Falha no envio do E-Mail!</b>"; } 
 
} 
?>