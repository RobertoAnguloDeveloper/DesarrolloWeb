<?php
    var_dump($_POST);
    $datos = json_encode($_POST);
    file_put_contents('prueba.json', $datos);
?>