<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Iniciar sessão</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="MaterialDesign-Webfont-master/MaterialDesign-Webfont-master/css/materialdesignicons.min.css">
    <link rel="stylesheet" href="style.css">
</head>
<body onload="marcaE()">
    <div class="sta">
        <header id="header">
            <h3 align="left">Easy school</h3>
        </header>
    </div>

    <div id="volt" title="Voltar ao início">

        <a href="index.php"><button id="bt-voltar"><i class="mdi mdi-arrow-left-thin-circle-outline"></i></button></a>
        
    </div>

    <br>

    <div id="marcaE">
        <div id="gira" style="margin: 10px 10px;">
            <i class="mdi mdi-hexagon-multiple" id="processe1"></i>
            <i class="mdi mdi-hexagon-multiple-outline" id="processe2"></i>
        </div>
    </div>

    <div class="login">
        <h3 style="color: rgb(20, 80, 255); text-transform: uppercase;">Login</h3>
        <form action="test.php" method="POST">
            <input type="text" placeholder="E-mail" name="email" class="s" id="emailN" autofocus autocomplete="off">
            <br>
            <input type="password" placeholder="Palavra-passe" name="senha" class="s" id="senhaN" autocomplete="off">
            <br>
            <input type="submit" name="submit" id="entrarN" value="Iniciar sessão">
        </form>
        <br><br>
        <p align="right">Não tem uma conta? <a href="loadcreat.php" id="cc">Criar conta</a></p>
    </div>



    <script src="index.js"></script>
</body>
</html>