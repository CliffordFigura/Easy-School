<?php
    session_start();    
    // print_r($_SESSION);
    if((!isset($_SESSION['email']) == true) and (!isset($_SESSION['senha']) == true))
    {
        unset($_SESSION['email']);
        unset($_SESSION['senha']);
        header('Location: login.php');
    }
    $logado = $_SESSION['email'];

?>
<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Easy schhol</title>
    <link rel="stylesheet" href="modelo.css">
    <link rel="stylesheet" href="MaterialDesign-Webfont-master/MaterialDesign-Webfont-master/css/materialdesignicons.min.css">
</head>
<body id="corpo">
    <nav id="top-bar">

    <?php echo "<h3> $logado </h3>" ?>

    <div id="acessos">

        <div class="page" id="page1" title="Pagina Inícial">
            <i class="mdi mdi-home" id="supage1"></i>
            <br>
            <label for="supge1">Início</label>
        </div>

        <div class="page" id="page2" title="Segurança">
            <i class="mdi mdi-shield" id="supage2"></></i>
            <br>
            <label for="supge2">Segurança</label>
        </div>

        <div class="page" id="page3" title="Chat de mensagens">
            <i class="mdi mdi-message-text" id="supage3"></></i>
            <br>
            <label for="supge3">Chat</label>
        </div>

        <div class="page" id="page4" title="Notificações">
            <i class="mdi mdi-bell" id="supage4"></></i>
            <br>
            <label for="supge4">Notificaçãoes</label>
        </div>

        <div class="page" id="page5"  title="Minha conta">
            <i class="mdi mdi-account-circle" id="supage5"></></i>
            <br>
            <label for="supge5">Conta</label>
        </div>

    </div>

        <div id="sair">
            <a href="sair.php">
                <button type="button"id="terminarS">Sair</button>
            </a>
        </div>

    </nav>
    
    <div id="geral">
        <br>
    </div>

    <div id="chataria">
        <a href=""><p>Novo Bate-papo</p></a>
        <a href=""><p>Histórico de mensagens</p></a>
    </div>

    <div id="notificaria">
        <a href=""><p>Notificaçãoes mais recentes</p></a>
        <a href=""><p>Notificaçãoes mais antigas</p></a>
    </div>

    <div id="contaria">
        <a href=""><p>Perfil</p></a>
        <a href=""><p>Opções</p></a>

        <div id="mode">
            <div id="ball"></div>
            <input type="checkbox" name="dark" id="dark">
        </div>
    </div>

    <div id="plus">
        
    </div>

    <script src="sistema.js"></script>
</body>
</html>