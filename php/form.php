<?php

if(isset($_POST['email'])) && !empty($_POST['email']){


$name = addcslashes($_POST['name']);
$email = addcslashes($_POST['email']);
$message = addcslashes($_POST['message']);



$to = "juan900.lemos@gmail.com";
$subject = " Contato - Portifólio";
$body = "Nome: ".$name. "r\n".
        "Email: "$email."\r\n".
        "Mensagem"$message;
$header = "From:juanlemos.dev@gmail.com"."\r\n".
        "Replay-To:".$email."\r\n".
        "X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){

    echo("Email enviado com sucesso!");

}else{
    echo("O email não pode ser enviado");
}


}

?>