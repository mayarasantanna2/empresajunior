<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <title>Cadastro - Freetecs</title>

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
            <a href="login.html" class="order_online">Login</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <br><br><br>

  <!-- main cadastro content -->
  <section class="layout_padding-top" style="padding-top:120px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="card shadow-sm">
            <div class="card-body">
              <h3 class="card-title text-center mb-3">Cadastre sua empresa</h3>
              <p class="text-center text-muted mb-4">Preencha os dados abaixo para criar sua conta na Freetecs</p>

              <form id="cadastroForm" novalidate>
                <!-- Nome da Empresa -->
                <div class="form-group">
                  <label for="nome">Nome da Empresa</label>
                  <input type="text" class="form-control" id="nome" placeholder="Nome da empresa" required>
                  <div class="invalid-feedback">
                    Por favor, digite o nome da empresa.
                  </div>
                </div>

                <!-- CNPJ -->
                <div class="form-group">
                  <label for="cnpj">CNPJ</label>
                  <input type="text" class="form-control" id="cnpj" placeholder="00.000.000/0000-00" required>
                  <div class="invalid-feedback">
                    Digite um CNPJ válido com 14 números.
                  </div>
                </div>

                <!-- Email -->
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="email@empresa.com" required>
                  <div class="invalid-feedback">
                    Digite um email válido.
                  </div>
                </div>

                <!-- Senha -->
                <div class="form-group">
                  <label for="password">Senha</label>
                  <input type="password" class="form-control" id="password" placeholder="Senha" minlength="6" required>
                  <div class="invalid-feedback">
                    A senha precisa ter pelo menos 6 caracteres.
                  </div>
                </div>

                <!-- Confirmar Senha -->
                <div class="form-group">
                  <label for="confirmPassword">Confirmar Senha</label>
                  <input type="password" class="form-control" id="confirmPassword" placeholder="Confirme a senha"
                    minlength="6" required>
                  <div class="invalid-feedback">
                    As senhas não coincidem.
                  </div>
                </div>

                <div class="text-center">
                  <button type="submit" class="btn btn-primary btn-block">Cadastrar</button>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- footer -->
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
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>

  <script>
    // Máscara e validação do CNPJ
    document.addEventListener("DOMContentLoaded", () => {
      const cnpjInput = document.getElementById('cnpj');

      cnpjInput.addEventListener('input', function (e) {
        let v = e.target.value.replace(/\D/g, '');
        v = v.replace(/^(\d{2})(\d)/, '$1.$2');
        v = v.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3');
        v = v.replace(/\.(\d{3})(\d)/, '.$1/$2');
        v = v.replace(/(\d{4})(\d)/, '$1-$2');
        e.target.value = v.substring(0, 18);

        // valida se tem 14 números
        const apenasNumeros = e.target.value.replace(/\D/g, '');
        if (apenasNumeros.length < 14) {
          cnpjInput.setCustomValidity('CNPJ inválido');
        } else {
          cnpjInput.setCustomValidity('');
        }
      });
    });

    // Validação geral do formulário
    (function () {
      const form = document.getElementById('cadastroForm');

      form.addEventListener('submit', function (e) {
        e.preventDefault();
        e.stopPropagation();

        // Validação de senhas iguais
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;

        if (password !== confirmPassword) {
          document.getElementById('confirmPassword').setCustomValidity('Senhas não coincidem');
        } else {
          document.getElementById('confirmPassword').setCustomValidity('');
        }

        if (!form.checkValidity()) {
          form.classList.add('was-validated');
          return;
        }

        // Aqui você pode adicionar envio real para o servidor
        alert('Cadastro realizado com sucesso!');
        form.reset();
        form.classList.remove('was-validated');
      });
    })();
  </script>

</body>
</html>
