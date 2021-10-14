<?php

//variável da conexao
$conexao = new mysqli("localhost", "coxa314", "x6ALSnhqE67RrthO", "test1");
    if($conexao->connect_error){
        echo "Erro ao conectar no banco de dados";
    }else{
        echo "Conectado ao banco de dados \n<br><br>";
    }
