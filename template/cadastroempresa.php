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

              <form id="cadastroForm" METHOD="POST" action="processacadastroempresa.php" novalidate>

                <div class="form-group">
                  <label for="nome">Nome da Empresa</label>
                  <input type="text" class="form-control" id="nome" placeholder="Nome da empresa" name="nome_empresa"
                    required>
                  <div class="invalid-feedback">
                    Por favor, digite o nome da empresa.
                  </div>
                </div>

                <div class="form-group">
                  <label for="cnpj">CNPJ</label>
                  <input type="text" class="form-control" id="cnpj" name="cnpj" placeholder="00.000.000/0000-00"
                    required>
                  <div class="invalid-feedback">
                    Digite um CNPJ válido com 14 números.
                  </div>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" id="email" name="email_empresa"
                    placeholder="email@empresa.com" required>
                  <div class="invalid-feedback">
                    Digite um email válido.
                  </div>
                </div>

                <div class="form-group">
                  <label for="telefone">Telefone</label>
                  <input type="tel" class="form-control" id="telefone" name="telefone_empresa"
                    placeholder="(00)00000-0000" required>
                  <div class="invalid-feedback">
                    Digite o número de telefone.
                  </div>
                </div>

                <div class="form-group">
                  <label for="area">Área de Atuação</label>
                  <input type="text" class="form-control" id="atuacao" name="atuacao"
                    placeholder="Ex: Saúde, Educação, Tecnologia..." required>
                  <div class="invalid-feedback">
                    Digite a área de atuação da empresa.
                  </div>
                </div>

                <div class="form-group">
                  <label for="descricao">Descrição Institucional</label>
                  <input type="text" class="form-control" id="descricao" name="descricao_empresa"
                    placeholder="Descrição Institucional da empresa." required>
                  <div class="invalid-feedback">
                    Digite a descrição Institucional da empresa.
                  </div>
                </div>

                <div class="form-group">
                  <label for="ano">Ano de Fundação</label>
                  <input type="number" class="form-control" name="ano" id="ano" placeholder="Ex: 2020" required>
                  <div class="invalid-feedback">
                    O ano deve ter 4 dígitos.
                  </div>
                </div>

                <div class="form-group">
                  <label for="password">Senha</label>
                  <input type="password" class="form-control" name="senha_empresa" id="password" placeholder="Senha"
                    minlength="6" required>
                  <div class="invalid-feedback">
                    A senha precisa ter pelo menos 6 caracteres.
                  </div>
                </div>

                <div class="form-group">
                  <label for="confirmPassword">Confirmar Senha</label>
                  <input type="password" class="form-control" name="confsenha_empresa" id="confirmPassword"
                    placeholder="Confirme a senha" minlength="6" required>
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
  <br><br><br><br>

  <?php require 'head_footer.php' ?>

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
    // FUNÇÃO DE VALIDAÇÃO DO ANO (QUATRO DÍGITOS, NÃO PODE SER NO FUTURO)
    function validarAnoFundacao(ano) {
      const anoAtual = new Date().getFullYear();
      return ano && ano.length === 4 && parseInt(ano) <= anoAtual;
    }

    // Validação geral do formulário
    (function () {
      const form = document.getElementById('cadastroForm');
      const cnpjInput = document.getElementById('cnpj');
      const anoInput = document.getElementById('ano');

      form.addEventListener('submit', function (e) {
        const password = document.getElementById('password').value;
        const confirmPassword = document.getElementById('confirmPassword').value;
        const confirmPasswordInput = document.getElementById('confirmPassword');
        let validacaoCustomizada = true; // Flag para validar campos customizados

        if (password !== confirmPassword) {
          confirmPasswordInput.setCustomValidity('Senhas não coincidem');
          validacaoCustomizada = false;
        } else {
          confirmPasswordInput.setCustomValidity('');
        }

        if (!validarAnoFundacao(anoInput.value)) {
          anoInput.setCustomValidity('Ano de Fundação inválido');
          validacaoCustomizada = false;
        } else {
          anoInput.setCustomValidity('');
        }
      });
      });
  </script>

</body>

</html>