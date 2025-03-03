<?php

    include_once("config/url.php");
    include_once("config/process.php");

    //limpa a msg
    if(isset($_SESSION['msg'])) {
        $printMsg = $_SESSION['msg'];
        $_SESSION['msg'] = '';
    }
    
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda de contatos</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.3/css/bootstrap.min.css" integrity="sha512-jnSuA4Ss2PkkikSOLtYs8BlYIeeIK1h99ty4YfvRPAlzr377vr3CXDb7sb7eEEBYjDtcYj+AjBH3FLv5uSJuXg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="<?= $BASE_URL ?>/css/style.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-lg navbar-dar bg-primary">
           <a class="navbar-brand" href="<?= $BASAE_URL ?>index.php">
            <img src="<?= $BASE_URL ?>img/logo.svg" alt="Agenda">
           </a> 
           <div>
            <div class="navbar-nav">
                <a class="nav-link active" id="home-link" href="<?= $BASE_URL ?>index.php">Agenda</a>
                <a class="nav-link active" href="<?= $BASE_URL ?>create.php">Adicionar contato</a>
            </div>
           </div>
        </nav>
    </header>