<?php
    session_start();
    $usuario = $_POST['login'];
    $senha = $_POST['psw'];

    //banco de usuários
    $usuarios = [
        array('login'=>'matheus', 'senha'=>'123')
    ];

    $autenticacao=false;

    //Verifica o usuário e senha em cada posição do vetor
    foreach($usuarios as $variavel){
        if($usuario == $variavel['login'] && $senha == $variavel['senha']){
            $autenticacao = true;
            break;
        }
    }

    if($autenticacao){
        $_SESSION['adm'] = $usuario; //adiciona usuário autenticado a uma seção
        header('Location: painel-adm.php'); //redireciona o usuário para painel-adm.php
    }
    else{
        header('Location: login-adm.php?erro-login=erro'); //redireciona para uma url personalizada no index
    }
?>