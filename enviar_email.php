<?php
session_start();

$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$mensagem = $_POST['mensagem'];
$headers = "From: ". $nome;

$corpoemail = 'Fale Conosco - Nutricionista Caroline
              Nome: '     .$nome.'
              Email:'     .$email.'
              Telefone:'  .$telefone.' 
              Mensagem:'  .$mensagem.' ';

if(mail("contato@carolinevallinhos.com.br", "WebSite Nutricionista Caroline Vallinhos",$corpoemail,$headers)){
    $_SESSION['msg3'] = "<h4 class='center green-text wow heartBeat'><b>".'Mensagem enviada com sucesso!'."</b></h4><br>";
    header("Location: contato.php");

} else{
    $_SESSION['msg3'] = "<h4 class='center red-text wow heartBeat'><b>".'Erro ao enviar, tente diretamente pelo email: contato@carolinevallinhos.com.br'."</b></h4><br>";
    header("Location: contato.php");
}

