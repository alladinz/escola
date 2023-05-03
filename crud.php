<?php
    include("conecta.php"); // Conexão com o banco de dados

    $cpf = $_POST["cpf"];       // Pega input CPF
    $nome = $_POST["nome"];     // Pega input nome
    $idade = $_POST["idade"];   // Pega input idade

    // Botão pressionado pelo usuário:
    if (isset($_POST["inserir"])){

        $comando = $pdo->prepare("INSERT INTO alunos VALUES('$cpf', '$nome', $idade)");
        $resultado = $comando->execute();
        header("Location: index.html"); // Volta
    }

?>