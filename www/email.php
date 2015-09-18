<?php 
// Dados de Envio
$email_enviar = "buscapet@outlook.com";
$assunto = "Perdeu seu pet";
$nomedopet = $_POST["nomedopet"];
$especie = $_POST["radio-choice-1"];
$racadopet = $_POST["racadopet"];
$cor = $_POST["select-native-2"];
$nomedodono = $_POST["nomedodono"];
$tel = $_POST["tel"];
$email = $_POST["email2"];
$descricao = $_POST["textarea-1"];
$imagem = $_POST["file2"];



// Cabeçalho do Email
$cabecalho = 'MIME-Version: 1.0' . "\r\n";
$cabecalho .= 'Content-type: text/html; charset=iso-8859-1;' . "\r\n";
$cabecalho .= "Return-Path: $email_enviar \r\n";
$cabecalho .= "From: $email_enviar \r\n";
$cabecalho .= "Reply-To: $email_enviar \r\n";

// Corpo do Email
$mensagem = "<h1>Dados Gerais</h1>";
$mensagem .= "<br>Nome do pet: $nomedopet</br>";
$mensagem .= "<br>Especie: $especie</br>";
$mensagem .= "<br>Raca do pet: $racadopet</br>";
$mensagem .= "<br>Cor: $cor</br>";
$mensagem .= "<br>Nome do dono: $nomedodono</br>";
$mensagem .= "<br>Teleone: $tel</br>";
$mensagem .= "<br>Email: $email</br>";
$mensagem .= "<br>Descricao: $descricao</br>";
$mensagem .= "<br>$imagem</br>";


// Envia o Email
if(mail($email_enviar, $assunto, $mensagem, $cabecalho))
{
echo "Mensagem enviada com sucesso.";
}

else
{
echo "Sua mensagem não pode ser enviada. Tente novamente.";
}
?>