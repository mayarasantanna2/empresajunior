<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Login - Freetecs</title>

  <!-- bootstrap core css -->
  <link rel="stylesheet" type="text/css" href="css/bootstrap.css" />

  <!-- font awesome style -->
  <link href="css/font-awesome.min.css" rel="stylesheet" />

  <!-- Custom styles for this template -->
  <link href="css/style.css" rel="stylesheet" />
  <link href="css/responsive.css" rel="stylesheet" />
</head>

<body>
  <!-- header (mantive estilo parecido ao seu projeto) -->
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
  <br>
  <br>
  <br>
  <!-- main login content -->
  <section class="layout_padding-top" style="padding-top:120px;"> <!-- espaçamento para header fixo -->
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
                  <a href="recuperar-senha.html">Login para empresas</a>
                  <a href="registro.html">Criar conta</a>
                </div>

                <div class="text-center">
                  <button id="modalOkBtn"  type="submit" class="btn btn-primary btn-block">Entrar</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- modal de confirmação (aparece ao enviar com sucesso) -->
  <div class="modal fade" id="loginSuccessModal" tabindex="-1" role="dialog" aria-labelledby="loginSuccessModalLabel"
    aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title">Login realizado</h5>
          <button type="button" class="close" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body"> <!-- colocar nome -->
          Bem-vindo(a) à Freetecs! Você será redirecionado para a sua página página após confirmar. 
        </div>
        <div class="modal-footer">
          <button type="button" id="modalOkBtn" class="btn btn-primary" data-dismiss="modal">OK</button>
        </div>
      </div>
    </div>
  </div>

  <!-- footer (abreviado, igual ao seu) -->
  <footer class="footer_section mt-5">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>Contato</h4>
            <div class="contact_link_box">
              <a href="tel:+5511940028922"><i class="fa fa-phone"></i><span>+55 (11) 94002-8922</span></a>
              <a href="mailto:suporte_freetecs@gmail.com"><i class="fa fa-envelope"></i><span>suporte_freetecs@gmail.com</span></a>
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
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"
    integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="js/bootstrap.js"></script>

  <script>
    // Validação simples com Bootstrap styles + exibição do modal
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

        // Aqui você colocaria a chamada AJAX para o backend (autenticação).
        // Como exemplo, simulamos sucesso imediato:

        // abre o modal de sucesso
        $('#loginSuccessModal').modal('show');

        // ao clicar em OK no modal, redireciona p/ início (conforme pedido)
        document.getElementById('modalOkBtn').addEventListener('click', function () {
          window.location.href = 'cadastro.html';
        });

        // como alternativa: se o usuário fechar o modal via X, também redireciona
        $('#loginSuccessModal').on('hidden.bs.modal', function () {
          window.location.href = 'cadastro.html';
        });
      });
    })();
  </script>
</body>

</html>
