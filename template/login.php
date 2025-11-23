<!DOCTYPE html>
<html lang="pt-BR">

<body>
  <!-- header -->
  <header class="header_section">
    <div class="container">
      <nav class="navbar navbar-expand-lg custom_nav-container">
        <a class="navbar-brand" href="index.php">
          <span><img class="imglogo" src="images/logo.png" alt="Freetecs"></span>
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarMenu"
          aria-controls="navbarMenu" aria-expanded="false" aria-label="Toggle navigation">
          <span class=""> </span>
        </button>

        <div class="collapse navbar-collapse" id="navbarMenu">
          <ul class="navbar-nav  mx-auto ">
            <li class="nav-item">
              <a class="nav-link" href="index.php">Início</a>
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

              <form id="loginForm" METHOD="POST" action="processaloginaluno.php"novalidate>
                <div class="form-group">
                  <label for="email">E-mail</label>
                  <input type="email" class="form-control" id="email_aluno" name="email_aluno" placeholder="seu@exemplo.com"
                    required>
                  <div class="invalid-feedback">
                    Informe um e-mail válido.
                  </div>
                </div>

                <div class="form-group">
                  <label for="password">Senha</label>
                  <input type="password" class="form-control" id="password" name="senha_aluno" placeholder="Senha"
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
    // Validação geral do formulário (AGORA COM A LÓGICA CORRETA)
    (function () {
        const form = document.getElementById('loginForm');

        form.addEventListener('submit', function (e) {
            // 1. Verifica se o formulário é válido (HTML5 validation)
            if (!form.checkValidity()) {
                e.preventDefault(); // Impede o envio se for inválido
                e.stopPropagation();
                form.classList.add('was-validated');
                return;
            }

         
        });
    })();
</script>
</body>

</html>