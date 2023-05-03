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

    if (isset($_POST["excluir"])){

        $comando = $pdo->prepare("DELETE FROM alunos WHERE cpf='$cpf' ");
        $resultado = $comando->execute();
        header("Location: index.html"); // Volta
    }

    if (isset($_POST["alterar"])){

        $comando = $pdo->prepare("UPDATE alunos SET nome='$nome', idade='$idade' WHERE cpf='$cpf' ");
        $resultado = $comando->execute();
        header("Location: index.html"); // Volta
    }

?>