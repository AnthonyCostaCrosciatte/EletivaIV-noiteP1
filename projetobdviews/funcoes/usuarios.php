<?php

declare(strict_types = 1);

require_once('../config/bancodedados.php');

function login(string $email, string $senha){
    global $pdo;
    

    //Inserção do usuario adm
    $stament =
       $pdo->query("SELECT * FROM usuario WHERE email = 'adm@adm.com'");
    $usuario = $stament->fetchAll(PDO::FETCH_ASSOC);
    if (!$usuario){
        $pdo->beginTransaction();
        $senha = password_hash('adm', PASSWORD_BCRYPT);
        $stament = $pdo->prepare('INSERT INTO usuario (nome,email,senha,nivel) VALUES(?, ?, ?, ?)');
        $stament->execute(['Administrador','adm@adm.com',$senha,'adm']);
        $pdo->commit();
    }

    //verificar email e senha do usuário
    $stament = 
        $pdo -> prepare("SELECT * FROM usuario WHERE email = ?");
        //validar os valores com EXPRESSORES REGULARES - validar se é um email.
    $stament->execute([$email]);
    $usuario = $stament->fetch(PDO::FETCH_ASSOC);
    if($usuario && password_verify($senha, $usuario['senha'])){
        return $usuario;
    } else {
        return null;
    }
}



function novoUsuario(string $nome, string $email, string $senha, string $nivel):bool{
    global $pdo;
    $senha_criptografada = password_hash($senha, PASSWORD_BCRYPT);
    $stament = $pdo->query("INSERT INTO usuario (nome,email,senha,nível) VALUES (?,?,?,?)");
    return $stament->execute($nome, $email, $senha, $nivel);
}

function excluirUsuario (int $id): bool{
    global $pdo;
    $stament = $pdo->prepare("DELETE FROM usuario WHERE id = ?");
    return $stament->execute([$id]);
}

function todosUsuarios(): array{
    global $pdo;
    $stament = $pdo->query("SELECT * FROM usuario WHERE nivel <> 'adm");
    return $stament->fetchALL(PDO::FETCH_ASSOC);
}