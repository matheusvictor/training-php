<?php
session_start();
require_once('autentica.php'); //para que a página seja iniciada, é preciso que o usuário esteja autenticado, por isso, há um requimento da página autentica.php
?>

<!DOCTYPE html>

    <html lang="pt-br">
        <head>
            <meta charset="utf-8"> <!-- config de caracteres -->
            <meta name="viewport" content="width=device-width, initial-scale=1"> <!-- responsividade -->
            <meta http-equiv="X-UA-Compatible" content="ie=edge"> <!-- compatilidade com Internet Explorer mais atual -->
            <meta name="keywords" content="html5, css3, mobile first, responsive, portfolio, website, pluginfo, infojr"/>
            <meta name="author" content="Matheus Victor"/>
            <meta name="description" content="Portólio criado durante o #pluginfo2019.1">

            <!-- Favicon -->
            <link rel="shortcut icon" type="image/png" href="assets/img/favicon.png">

            <!-- CSS -->
            <link rel="stylesheet" type="text/css" href="assets/css/style.css">

            <!--Fonts & Icons -->
            <link href="https://fonts.googleapis.com/css?family=Oswald|Raleway" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Gugi" rel="stylesheet">
            <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">

            <title>Painel Administrativo</title>
        </head>

        <body>
            <header>
                <nav class="navbar">
                    <div class="nav-buttons-right">
                        <a class="nav-button glow" href="index.php">Início</a>
                        <a class="nav-button glow" href="logout.php">Sair</a>                        
                    </div>
                    <div class="nav-buttons-left nav-button glow">
                        <?php
                           echo "Seja bem-vindo(a), " . $_SESSION['adm'];
                        ?>
                    </div>
                </nav>
            </header>

            <section id="mensagens">
                <div class="mensagens">
                    <?php
                        if(isset($_SESSION['adm'])){

                            $arquivo = 'mensagens.json'; // $arquivo recebe arquivo mensagens.json
                            $lerArquivo = fopen($arquivo, 'r'); //fopen — Abre um arquivo ou URL; r = Abre somente para leitura
                            
                            $conteudo = fread ($lerArquivo, filesize($arquivo));

                            $item = str_replace('][',',',$conteudo);
                            $msg = json_decode($item);

                            foreach($msg as $item){
                                echo "Nome: $item->nome <br>";
                                echo "E-mail: $item->email <br>";
                                echo "Mensagem: $item->conteudoMsg <br><br>";
                            }

                            fclose ($lerArquivo);

                            /**
                             * Para saber mais sobre fopen: https://www.php.net/manual/pt_BR/function.fopen.php
                             */
                        }
                    ?>
                </div>
            </section>

        </body>


    </html>