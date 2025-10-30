<!DOCTYPE html>
<html lang="pt-BR">

<body>
  <!-- header -->
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.html">
          <span><img class="imglogo" src="images/logo.png" alt="Freetecs"></span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu"
          aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
          <ul class="navbar-nav  mx-auto ">
            <li class="nav-item">
              <a class="nav-link" href="index.html">Início</a>
            </li>
            
            <li class="nav-item">
              <a class="nav-link" href="contato.html">Contato</a>
            </li>
          </ul>

           <div class="user_option">
            <div class="dropdown">
              <a class="order_online dropdown-toggle" href="#" id="dropdownCadastro" data-toggle="dropdown">
                Cadastrar
              </a>
              <div class="dropdown-menu">
                <a class="dropdown-item" href="cadastro.php">Aluno</a>
                <a class="dropdown-item" href="cadastroempresa.php">Empresa</a>
              </div>
            </div>
          </div>
        </div>
      </nav>
    </div>
  </header>
  <br>
  <br>
  <br>
  <!-- main login content -->
  <section class="layout_padding-top" style="padding-top:120px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="card shadow-sm">
            <div class="card-body">
              <h3 class="card-title text-center mb-3">Acesse sua conta</h3>
              <p class="text-center text-muted mb-4">Entre com seu e-mail e senha para continuar na Freetecs</p>

              <form id="loginForm" novalidate>
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" id="email" name="email" placeholder="seu@exemplo.com"
                    required>
                  <div class="invalid-feedback">
                    Informe um e-mail válido.
                  </div>
                </div>

                <div class="form-group">
                  <label for="password">Senha</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Senha"
                    minlength="6" required>
                  <div class="invalid-feedback">
                    A senha precisa ter pelo menos 6 caracteres.
                  </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                  <a href="#">Esqueci a senha</a>
                  <a href="cadastro.php">Criar conta</a>
                </div>

                <div class="text-center">
                  <button id="modalOkBtn" type="submit" class="btn btn-primary btn-block">Entrar</button>
                </div>
              </form>

              <hr>

              <p class="text-center text-muted small mb-0">Login para empresas? <a href="loginempresa.php">Clique Aqui</a>
              </p>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- modal de erro -->
  <div class="modal fade" id="loginErrorModal" tabindex="-1" role="dialog" aria-labelledby="loginErrorModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-danger text-white">
          <h5 class="modal-title">Erro no login</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Email ou senha incorretos. Tente novamente.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
<br><br><br><br>
  
  <?php require 'head_footer.php' ?>

  <!-- scripts -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo"
    crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>

  <script>
    // validação e exibição do modal
    (function () {
      const form = document.getElementById('loginForm');

      form.addEventListener('submit', function (e) {
        e.preventDefault();
        e.stopPropagation();

        // HTML5 validity
        if (!form.checkValidity()) {
          form.classList.add('was-validated');
          return;
        }
      });
    });

    // validação geral e login falso
    (function () {
      const form = document.getElementById('loginForm');

      form.addEventListener('submit', function (e) {
        e.preventDefault();
        e.stopPropagation();

        if (!form.checkValidity()) {
          form.classList.add('was-validated');
          return;
        }

        const email = document.getElementById('email').value;
        const senha = document.getElementById('password').value;

        // falso
        const emailCorreto = "teste@gmail.com";
        const senhaCorreta = "123456";

        if (email === emailCorreto && senha === senhaCorreta) {
          window.location.href = "restritaaluno.php";
        } else {
          $('#loginErrorModal').modal('show');
        }
      });
    })();
  </script>
</body>

</html>