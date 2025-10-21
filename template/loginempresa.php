<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Login - Freetecs</title>

  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet" />
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

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
              <a class="nav-link" href="#sobre">Sobre</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="contato.html">Contato</a>
            </li>
          </ul>

          <div class="user_option">
            <a href="registro.html" class="order_online">Cadastrar</a>
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

              <form id="loginForm" novalidate>
                <!-- Campo CNPJ -->
                <div class="form-group">
                  <label for="cnpj">CNPJ</label>
                  <input type="text" class="form-control" id="cnpj" placeholder="00.000.000/0000-00" required>
                  <div class="invalid-feedback">
                    Digite um CNPJ válido com 14 números.
                  </div>
                </div>

                <!-- Campo Senha -->
                <div class="form-group">
                  <label for="password">Senha</label>
                  <input type="password" class="form-control" id="password" name="password" placeholder="Senha"
                    minlength="6" required>
                  <div class="invalid-feedback">
                    A senha precisa ter pelo menos 6 caracteres.
                  </div>
                </div>

                <div class="d-flex justify-content-between align-items-center mb-3">
                  <a href="recuperar-senha.html">Esqueci a senha</a>
                  <a href="cadastro.html">Criar conta</a>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                </div>
              </form>

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

  <!-- footer -->
  <footer class="footer_section mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>Contato</h4>
            <div class="contact_link_box">
              <a href="tel:+5511940028922"><i class="fa fa-phone"></i><span>+55 (11) 94002-8922</span></a>
              <a href="mailto:suporte_freetecs@gmail.com"><i
                  class="fa fa-envelope"></i><span>suporte_freetecs@gmail.com</span></a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col text-center">
          <a href="index.html" class="footer-logo">Freetecs</a>
        </div>
        <div class="col-md-4 footer-col">
          <h4>Horário</h4>
          <p>Todos os dias<br>10:00 - 22:00</p>
        </div>
      </div>
    </div>
  </footer>

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
          window.location.href = "empresa.php";
        } else {
          $('#loginErrorModal').modal('show');
        }
      });
    })();
  </script>

</body>
</html>
