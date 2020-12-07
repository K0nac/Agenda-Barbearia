<?php
$servidor_bd='localhost';
$usuario_bd='root';
$senha_bd='';
$banco='bd_crudbarbearia';

$mysqli = new mysqli($servidor_bd, $usuario_bd, $senha_bd, $banco)

if($mysqli->connect_errno){
    echo "Falha ao conectar: (". $mysqli->connect_errno . ") ". $mysqli->connect_error;
}else{
    //Reconhecer caracteres especiais
    mysqli_set_charset($mysqli,"utf8")
}

?>