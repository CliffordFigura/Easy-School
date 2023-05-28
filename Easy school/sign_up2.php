<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Criar conta</title>
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

    
    <?php

        if(isset($_POST['submit']))
        {

            include_once('config.php');

            $nome = $_POST['nome'];
            $email = $_POST['email'];
            $telefone = $_POST['telefone'];
            $senha = $_POST['senha'];
            $genero = $_POST['genero'];
            $dataNasc = $_POST['dataNascimento'];
            $cidade = $_POST['cidade'];

            $result = mysqli_query($conexao, "INSERT INTO usuarios(nome,email,telefone,senha,genero) 
            VALUES ('$nome','$email','$telefone','$senha','$genero')");

            header('Location: login.php');
        }

    ?>

    <p id="aviso"></p>

        <br>

    <div id="marcaE">
        <div id="gira" style="margin: 10px 10px;">
            <i class="mdi mdi-hexagon-multiple" id="processe1"></i>
            <i class="mdi mdi-hexagon-multiple-outline" id="processe2"></i>
        </div>
    </div>

    <div class="coleta">
        <div id="alfa">
    
            <div id="b">
                <div id="passo2">
                    <form action="sign_up2.php" method="POST">
                        <h3 style="color: rgb(20, 80, 255); text-transform: uppercase;">Sign up</h3>
                        <br>
                    <input type="text" class="input" name="nome" id="nome" placeholder="Nome completo" autocomplete="off" autofocus required minlength="10">
                    <br>
                    <input type="text" class="input" name="email" id="email" placeholder="Email" autocomplete="off" required minlength="12">
                    <br>
                    <input type="text" class="input" name="telefone" id="telefone" placeholder="Número de telefone" autocomplete="off" required minlength="9">
                    <br>
                    <input type="password" class="input" name="senha" id="senha" placeholder="Senha" autocomplete="off" required minlength="8">
                    <button type="button" id="comecar2">Seguinte</button>
                </div>
            </div>

            <div id="c">
                <div id="passo3">
                    <h3>Escolha o seu genero</h3>
                    <br>
                    <br>
                    <input type="radio" name="genero" id="Masculino" value="Masculino" required>
                    <label for="Masculino">Masculino</label>
                    <br>
                    <br>
                    <input type="radio" name="genero" id="Femenino" value="Femenino" required>
                    <label for="Femenino">Femenino</label>
                    <br>
                    <br>
                    <input type="radio" name="genero" id="Personalizado"  value="Personalizado" required>
                    <label for="Personalizado">Personalizado</label>
                    <br>
                    <br>
                    <br>
                    <button type="button" id="comecar3">Seguinte</button>
                </div>
            </div>

            <div id="d">
                <div id="passo4">
                    <br><br>
                    <h3>Easy school</h3>
                    <p>Para criar sua conta clique no botão "Criar"</p>
                    <input type="submit" name="submit" id="comecar4" value="Criar">
                </form>
                </div>
            </div>

            </div>
    
        </div>
    </div>


    <script src="index.js"></script>
    <script src="sign_up.js"></script>
</body>
</html>