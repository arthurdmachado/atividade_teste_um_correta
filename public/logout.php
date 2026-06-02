<?php

    // logout para destruir a sessão
    // Inicia a sessão do servidor
    session_start();
    // Destrói a sessão
    session_destroy();
    // leva devolta para aba login
    header("Location: ../index.php");
    exit();

?>