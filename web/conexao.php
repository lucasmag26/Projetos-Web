<?php

    $servidor = "localhost";
    $usuario = "root";
    $senha ="";
    $dbname = "biblioteca";

    //CRIANDO VARIAVEL DE CONEXAO

    $conn = mysqli_connect($servidor, $usuario, $senha, $dbname);
/*
    if($conn){
        echo 'conexao';
    }else{
        echo 'erro';
    }*/
    
    ?>