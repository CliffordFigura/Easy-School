<!DOCTYPE html>
<html>
<head>
  <title>Easy school</title>
  <link rel="stylesheet" href="index.css">
  <link rel="stylesheet" href="MaterialDesign-Webfont-master/MaterialDesign-Webfont-master/css/materialdesignicons.min.css">
  <link rel="stylesheet" href="style.css">
  <style>

    #loading-animation {
    display: none;
    text-align: center;
    margin-top: 190px;
  } .loader {
    border: 16px solid #d4d4d4;
    border-top: 16px solid rgba(0, 60, 255, 0.842);
    border-radius: 50%;
    width: 100px;
    height: 100px;
    animation: spin 1s linear infinite;
    margin: 0 auto;
  }  @keyframes spin {
    0% { transform: rotate(0deg); }
    100% { transform: rotate(360deg); }
  }
  </style>
</head>
<body>
<div class="sta">
        <header id="header">
            <h3 align="left">Easy school</h3>
        </header>
    </div>

    <div class="termo">
        <a href="#" class="T">Termos de utlilização</a>
        <div style="background-color: rgb(1, 0, 70); width: 1px; height: 12px; margin-left: 1rem; margin-top: 2px;"></div>
        <a href="#" class="P">Privacidade e cokies</a>
    </div>

  <div id="loading-animation">
    <div class="loader"></div>
    <br>
    <p>Aguarde...</p>
  </div>

  <script>
      // seleciona o elemento HTML onde a animação será exibida
  const loading = document.querySelector('#loading-animation');

  // exibe a animação de "processando" por 3 segundos
  setTimeout(() => {
    loading.style.display = 'none'; // esconde a animação
    window.location.href = 'sign_up.php'; // redireciona para outra página
  }, 3000);

  // exibe a animação de "processando" imediatamente ao carregar a página
  window.addEventListener('load', () => {
    loading.style.display = 'block';
  });
  </script>
</body>
</html>
