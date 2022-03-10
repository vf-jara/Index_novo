<?php

if(isset($_POST['contact-email']) && !empty($_POST['contact-email'])){

  $nome = addslashes($_POST['contact-name']);
  $email = addslashes($_POST['contact-email']);
  $phone = addslashes($_POST['contact-phone']);
  $mensagem = addslashes($_POST['contact-message']);

  $to = "atendimento@indexdc.com.br";
  $subject = "Novo Contato no site Index DC";
  $body = "Nome: ".$nome."\n".
		  "Telefone: ".$phone."\n".
          "Email: ".$email. "\n".
          "Mensagem: ".$mensagem;
  $header = "From: atendimento@indexdc.com.br"."\r\n"
            ."Reply-To:".$email."\r\n"
            ."X-Mailer:PHP/".phpversion();

  if(mail($to,$subject,$body,$header)){
     echo ('<script type="text/javascript"> alert("Mensagem enviada, entraremos em contato em breve!"); </script>');
  }else{
	echo ('<script type="text/javascript"> alert("Algo deu errado, tente novamente!"); </script>');
  }

}

?>
