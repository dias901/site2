<?php
    $nome=addslashes($_POST['nome']);
    $email=addslashes($_POST['email']);
    $telefone=addslashes($_POST['telefone']);

    $destino = "silvadiaslucas@gmail.com";
    $assunto = "Aprendendo a usar php";

    $corpo = "Nome: ".$nome."\n"."E-mail: ".$email."\n"."Telefone: ".$telefone;
    $cabeça = "From: teste@frommyPC.com"."\n"."Reply-to: ".$email."\n"."X-Mailer:PHP/".phpversion();

    if(mail($destino,$assunto,$corpo,$cabeça)){
        echo("E-mail enviado com sucesso");
    }else{
        echo("E-mail falhou");
    }
?>