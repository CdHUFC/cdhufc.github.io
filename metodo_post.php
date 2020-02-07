<?php

if(isset($_POST['email']) && !empty($_POST['email']) {

$nome = addslashes($_POST['name'])
$email = addslashes($_POST['email'])

$to = "brendonrsb@hotmail.com";
$subject = "Contato - Formulario html teste";
$body = "Nome: " . $nome. "\r\n".
		"Email: " . $email. "\r\n";
$header = "From:brendonrsb@alu.ufc.br"."\r\n"."Reply-To:".$email."\r\n"."X=Mailer:PHP/".phpversion();

if(mail($to,$subject,$body,$header)){
		echo("Email enviado com sucesso!");
} else{
	echo("O Email não pode ser enviado");
}

	//var_dump($_GET);

	//if(count($_GET)){
		//echo "Nome: " . ($_POST["nome"] ?? '') . "<br>";
		//echo "E-mail: " . ($_POST["email"] ?? '') . "<br>";
	//}
	
}
?>