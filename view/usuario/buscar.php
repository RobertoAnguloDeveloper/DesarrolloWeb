<?php
    session_start();
    var_dump($_SESSION);

    if(count($_SESSION)!=0){
        header("Location: ../../controller/ControladorUsuario.php?buscar=active");
    }