<?php

include_once("conexao.php");

$login = $_POST['login'];
$senha = md5($_POST['senha']);

$result = mysqli_query($conn,"SELECT senha FROM cliente
                                 WHERE cpf = '$login'");
        
$resultado = mysqli_fetch_row($result);

if($resultado != NULL){
    if($senha == $resultado[0]){
        echo json_encode(
            array(
                "message" => "1",
                "status" => "Acesso"
            )
        ); 
    }else{
        echo json_encode(
            array(
                "message" => "2",
                "status" => "Senha errada"
            )
        ); 
    }
}else{
    echo json_encode(
        array(
            "message" => "3",
            "status" => "Erro"
        )
    ); 
};

//mysqli_close($conn);

// header('location: form.php');

?>

