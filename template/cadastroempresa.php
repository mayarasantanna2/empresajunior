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
              <a class="nav-link" href="contato.html">Contato</a>
            </li>
          </ul>

          <div class="user_option">
            <a href="loginempresa.php" class="order_online">Login</a>
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

                <div class="form-group">
                  <label for="nome">Nome da Empresa</label>
                  <input type="text" class="form-control" id="nome" placeholder="Nome da empresa" required>
                  <div class="invalid-feedback">
                    Por favor, digite o nome da empresa.
                  </div>
                </div>

                <div class="form-group">
                  <label for="cnpj">CNPJ</label>
                  <input type="text" class="form-control" id="cnpj" placeholder="00.000.000/0000-00" required>
                  <div class="invalid-feedback">
                    Digite um CNPJ válido com 14 números.
                  </div>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" placeholder="email@empresa.com" required>
                  <div class="invalid-feedback">
                    Digite um email válido.
                  </div>
                </div>

                <div class="form-group">
                  <label for="telefone">Telefone</label>
                  <input type="tel" class="form-control" id="telefone" placeholder="(00)00000-0000" required>
                  <div class="invalid-feedback">
                    Digite o número de telefone.
                  </div>
                </div>

                <div class="form-group">
                  <label for="area">Área de Atuação</label>
                  <input type="text" class="form-control" id="atuacao" placeholder="Ex: Saúde, Educação, Tecnologia..."
                    required>
                  <div class="invalid-feedback">
                    Digite a área de atuação da empresa.
                  </div>
                </div>

                <div class="form-group">
                  <label for="descricao">Descrição Institucional</label>
                  <input type="text" class="form-control" id="descricao"
                    placeholder="Descrição Institucional da empresa." required>
                  <div class="invalid-feedback">
                    Digite a descrição Institucional da empresa.
                  </div>
                </div>

                <div class="form-group">
                  <label for="ano">Ano de Fundação</label>
                  <input type="number" class="form-control" id="ano" placeholder="Ex: 2020" required>
                  <div class="invalid-feedback">
                    O ano deve ter 4 dígitos.
                  </div>
                </div>

                <div class="form-group">
                  <label for="password">Senha</label>
                  <input type="password" class="form-control" id="password" placeholder="Senha" minlength="6" required>
                  <div class="invalid-feedback">
                    A senha precisa ter pelo menos 6 caracteres.
                  </div>
                </div>

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
              <hr>

              <p class="text-center text-muted small mb-0">Cadastro para alunos? <a href="cadastro.php">Clique
                  Aqui</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- modal de sucesso -->
  <div class="modal fade" id="cadastroSucessoModal" tabindex="-1" role="dialog"
    aria-labelledby="cadastroSucessoModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
      <div class="modal-content">
        <div class="modal-header bg-success text-white">
          <h5 class="modal-title">Cadastro concluído!</h5>
          <button type="button" class="close text-white" data-dismiss="modal" aria-label="Fechar">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <div class="modal-body">
          Sua empresa foi cadastrada com sucesso! Realize login para acessar a sua página.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
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
    const telefone = document.getElementById('telefone');

    telefone.addEventListener('input', function (e) {
      let value = e.target.value.replace(/\D/g, '');
      if (value.length > 11) value = value.slice(0, 11);
      let formatted = value;

      if (value.length > 0) formatted = '(' + value.substring(0, 2);
      if (value.length >= 3) formatted += ') ' + value.substring(2, 7);
      if (value.length >= 8) formatted += '-' + value.substring(7, 11);

      e.target.value = formatted;
    });

    // Máscara e validação CNPJ
    document.addEventListener("DOMContentLoaded", () => {
      const cnpjInput = document.getElementById('cnpj');

      cnpjInput.addEventListener('input', function (e) {
        let v = e.target.value.replace(/\D/g, '');
        v = v.replace(/^(\d{2})(\d)/, '$1.$2');
        v = v.replace(/^(\d{2})\.(\d{3})(\d)/, '$1.$2.$3');
        v = v.replace(/\.(\d{3})(\d)/, '.$1/$2');
        v = v.replace(/(\d{4})(\d)/, '$1-$2');
        e.target.value = v.substring(0, 18);

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

        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;
        const ano = document.getElementById('ano');

        // valida ano com 4 dígitos
        if (!/^\d{4}$/.test(ano.value)) {
          ano.setCustomValidity('Ano inválido');
        } else {
          ano.setCustomValidity('');
        }

        if (password !== confirmPassword) {
          document.getElementById('confirmPassword').setCustomValidity('Senhas não coincidem');
        } else {
          document.getElementById('confirmPassword').setCustomValidity('');
        }

        if (!form.checkValidity()) {
          form.classList.add('was-validated');
          return;
        }

        $('#cadastroSucessoModal').modal('show');

        $('#cadastroSucessoModal').on('hidden.bs.modal', function () {
          form.reset();
          form.classList.remove('was-validated');
        });
      });
    })();
  </script>

</body>

</html>