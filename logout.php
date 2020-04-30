<?php

session_start();

    if(isset($_SESSION['adm'])){
        unset($_SESSION['adm']);
    }

header('Location: /login-adm.php');

?>