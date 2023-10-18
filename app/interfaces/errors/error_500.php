<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="shortcut icon" type="imagex/png" href="/public/img/error.png">
  <title>500 - Erro interno do servidor</title>
  <link rel="stylesheet" href="/vendor/bootstrap/bootstrap-5.3.0-alpha3/css/bootstrap.min.css">
  <style>
    body {
      background-color: #f8f9fa;
    }

    .container {
      height: 100vh;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .error-container {
      text-align: center;
    }

    .error-code {
      font-size: 6rem;
      color: #dc3545;
      margin-bottom: 0;
    }

    .error-message {
      font-size: 2rem;
      margin-top: 0;
      color: #333;
    }

    .btn-back {
      margin-top: 20px;
    }
  </style>
</head>

<body>
<div class="container">
    <div class="error-container">
      <h1 class="error-code">500</h1>
      <p class="error-message">Erro interno</p>
      <p>Temos um problema! Entre em contato com o Administrador</p>
      <a href="/" class="btn btn-primary btn-back">Voltar</a>
    </div>
  </div>

  <script src="/vendor/bootstrap/bootstrap-5.3.0-alpha3/js/bootstrap.bundle.min.js"></script>
</body>

</html>
