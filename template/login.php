<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login - Freetecs</title>
  <link rel="stylesheet" href="css/bootstrap.css">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="hero_area">
    <header class="header_section">
      <div class="container">
        <nav class="navbar navbar-expand-lg custom_nav-container">
          <a class="navbar-brand" href="index.html">
            <img src="images/logo.png" alt="Logo" class="imglogo">
          </a>
        </nav>
      </div>
    </header>
  </div>

  <section class="book_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <br><br><br>
        <h2>Entrar na Freetecs</h2>
      </div>

      <div class="row justify-content-center">
        <div class="col-md-6">
          <div class="form_container">
            <form action="login.php" method="POST">
              <div class="mb-3">
                <input type="email" class="form-control" name="email" placeholder="Email" required>
              </div>
              <div class="mb-3">
                <input type="password" class="form-control" name="senha" placeholder="Senha" required>
              </div>

              <?php if (isset($_GET['erro'])): ?>
                <div class="alert alert-danger text-center">
                  Conta inexistente ou dados incorretos.
                </div>
              <?php endif; ?>

              <div class="btn_box text-center">
                <button type="submit" class="btn btn-primary">Entrar</button>
              </div>

              <div class="text-center mt-3">
                <p>Não tem uma conta? <a href="cadastro.html">Cadastre-se</a></p>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>

  <script src="js/bootstrap.js"></script>
</body>

</html>
