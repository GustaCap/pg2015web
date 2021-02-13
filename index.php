<?php
    $notarjeta =  '123456';
    $key = 'delsur';
    $h = password_hash($notarjeta, PASSWORD_BCRYPT, ['cost' => 12,]);
    echo $h;
    // $hash = '$2y$12$bFE8tPV6pWX7MoqUz6sSDuEeaB2LiteVMlavCFvgdJzlXQ3PB/6cu';
    // // El que tenemos en nuestro post o base de datos
    // if (password_verify($notarjeta, $hash)) {
    //     echo '¡La verificación es válida!';
    //     echo $h;
    // } else {
    //     echo 'La verificación no es válida.';
    //     echo $h;
    // }
    // ?>