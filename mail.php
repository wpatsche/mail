<?php

function contact(){
    $headers = "MIMI-Version: 1.0" . "\r\n";
    $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
    $headers .= 'From: <williampatschemachry@hotmail.com>' . "\r\n";

    $to  = "contato@exec.dev";
    $subject = "Teste envio e-mail";
    $message = "teste envio";

    mail($to, $subject, $message, $headers);
}

?>