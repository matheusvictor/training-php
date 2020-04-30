<?php
    session_start();

    $nome = $_POST['nome'];
    $emailAdress = $_POST['email'];
    $mensagem = $_POST['conteudoMsg'];


    /*
     O vetor dadosForm irá guardar um array que receberá os dados preenchido no form do index
    */
    $dadosForm = array(
        'nome' => $nome,
        'email' => $emailAdress,
        'conteudoMsg' => $mensagem
    );

    /*

    */
    function enviarDados($dadosMsg){
        $amazenamento = [];
        $arquivo = './mensagens.json';

        //Envia os dados recebidos para a última posição do vetor $armazenamento
        array_push($amazenamento, $dadosMsg);    

        // Tranforma o array $armazenamento em JSON
       $converte = json_encode($amazenamento, JSON_PRETTY_PRINT);
        
        $fp = fopen($arquivo, 'a+');

        // Escreve o conteúdo JSON no arquivo
        fwrite($fp, $converte);
        
        // Fecha o arquivo
        fclose($fp);
    }
    
    if($nome != null && $emailAdress != null && $mensagem != null){
        enviarDados($dadosForm);
    }else{
        $_SESSION['vazio'] = '';
    }
    header('Location: index.html#contact');
?>