<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Painel Administrativo</title>
        <!-- CSS -->
	    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
    </head>
    <body>

    <section>
		<div style= "font-size: 30px; margin-top: 5em; text-align: center">
			<h1>Painel Administrativo</h1>
		</div>

		<div id="formAdm">
			<form class="form-contact" action="valida_login.php" method="POST">
				<input type="text" class="form-contact-input" name="login" placeholder="Login" required/>
                <input type="password" class="form-contact-input" name="psw" placeholder="Senha" required />  
                
                <?php
                if(isset($_GET['erro-login'])){ //verifica se a url está definida
                    echo '<p>Usuário ou senha inválidos!</p>'; //se a url está definida, apresenta essa msg
                    unset($_GET['erro-login']); // se apresentar a msg anterior, retira a definição da variável
                }
                ?>

     			<a href="index.php"><button class="form-contact-button-cancel">Cancelar</button></a>
     			<button type="submit" class="form-contact-button">Fazer login</button>  
			</form>
		</div>		
    </section>
    	
    </body>
</html> 
