<?php

    // Variáveis recebem dados do POST (criptografados - ninguém vê)
    $n = $_POST["nome"];
    $e = $_POST["email"];
    $u = $_POST["usuario"];
    $s = $_POST["senha"];

    

    // Conectar o BD
    $conexao = new mysqli("localhost","root","","banco");

    // Verifica se está conectado
    if($conexao->error)
        die("Erro: " . $conexao->error);
    
    // Verifica LOGIN
    if(($n=="")||($e=="")||($u=="")||($s=="")){
        echo "Campo(s) Vazio(s)!!!";
    }else{
        $sql = "INSERT INTO usuarios(nome,email,usuario,senha) 
            VALUES ('{$n}','{$e}','{$u}','{$s}');";
        if($conexao->query($sql) === TRUE){
            echo "Cadastro Efetuado Com Sucesso!!!";
        }else{
            echo "Dados informados, Inválidos!!!";
            echo "Erro: " . $sql . "<br>" . $conexao->error;
        }
    }
    $conexao->close();
?>

