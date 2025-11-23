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
    </div>
    </nav>
    </div>
  </header>

  <br><br><br>

  <!-- main login content -->
  <section class="layout_padding-top" style="padding-top:120px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="card shadow-sm">
            <div class="card-body">
              <h3 class="card-title text-center mb-3">Acesse sua conta para empresas</h3>
              <p class="text-center text-muted mb-4">Entre com seu CNPJ e senha para continuar na Freetecs</p>

              <form id="loginForm" method="POST" action="processaloginempresa.php" novalidate>
                <!-- Campo CNPJ -->
                <div class="form-group">
                  <label for="cnpj">CNPJ</label>
                  <input type="text" class="form-control" name="cnpj" id="cnpj" placeholder="00.000.000/0000-00" required>
                  <div class="invalid-feedback">
                    Digite um CNPJ válido com 14 números.
                  </div>
                </div>

                <!-- Campo Senha -->
                <div class="form-group">
                  <label for="password">Senha</label>
                  <input type="password" class="form-control" id="password" name="senha_empresa" placeholder="Senha"
                    minlength="6" required>
                  <div class="invalid-feedback">
                    A senha precisa ter pelo menos 6 caracteres.
                  </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                  <a href="#">Esqueci a senha</a>
                  <a href="cadastroempresa.php">Criar conta</a>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                </div>
              </form>
              <hr>

              <p class="text-center text-muted small mb-0">Login para alunos? <a href="login.php">Clique
                  Aqui</a>
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
          CNPJ ou senha incorretos. Tente novamente.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-dismiss="modal">Fechar</button>
        </div>
      </div>
    </div>
  </div>
<br><br><br>

  <?php require 'head_footer.php' ?>
  
  <!-- scripts -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>

  <script>
    // Máscara e validação do CNPJ
    document.addEventListener("DOMContentLoaded", () => {
      const cnpjInput = document.getElementById('cnpj');

      // forma cnpj
      cnpjInput.addEventListener('input', function (e) {
        let v = e.target.value.replace(/\D/g, '');
        v = v.replace(/^(\d{2})(\d)/, '$1.$2');
        v = v.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3');
        v = v.replace(/\.(\d{3})(\d)/, '.$1/$2');
        v = v.replace(/(\d{4})(\d)/, '$1-$2');
        e.target.value = v.substring(0, 18);

        // min 14 números
        const apenasnumeros = e.target.value.replace(/\D/g, '');
        if (apenasnumeros.length < 14) {
          cnpjInput.setCustomValidity('CNPJ inválido');
        } else {
          cnpjInput.setCustomValidity('');
        }
      });
    });

    // Validação geral do formulário + login simulado
    (function () {
      const form = document.getElementById('loginForm');

      form.addEventListener('submit', function (e) {
        e.preventDefault();
        e.stopPropagation();

        if (!form.checkValidity()) {
          form.classList.add('was-validated');
          return;
        }

        const cnpj = document.getElementById('cnpj').value;
        const senha = document.getElementById('password').value;

        // Simulação de login
        const cnpjCorreto = "00.000.000/0000-00";
        const senhaCorreta = "123456";

        if (cnpj === cnpjCorreto && senha === senhaCorreta) {
          window.location.href = "restritaempresa.php";
        } else {
          $('#loginErrorModal').modal('show');
        }
      });
    })();
  </script>

</body>

</html>