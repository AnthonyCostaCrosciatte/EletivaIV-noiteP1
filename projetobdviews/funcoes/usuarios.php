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