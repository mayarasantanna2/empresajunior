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
            <a href="login.php" class="order_online">Login</a>
          </div>
        </div>
      </nav>
    </div>
  </header>

  <br><br><br>

  <!-- main cadastro content -->
  <section class="layout_padding-top"  style="padding-top:120px;">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
          <div class="card shadow-sm">
            <div class="card-body">
              <h3 class="card-title text-center mb-3">Cadastre-Se
              </h3>
              <p class="text-center text-muted mb-4">Preencha os dados abaixo para criar sua conta na Freetecs</p>

              <form id="cadastroForm" METHOD="POST"action="cadastroaluno.php" novalidate>

                <div class="form-group">
                  <label for="nome">Nome Completo</label>
                  <input type="text" class="form-control" name="nome_aluno" id="nome_aluno" placeholder="Nome Completo"
                    required>
                  <div class="invalid-feedback">
                    Por favor, digite seu nome.
                  </div>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="email_aluno" id="email_aluno"
                    placeholder="email@empresa.com" required>
                  <div class="invalid-feedback">
                    Digite um email válido.
                  </div>
                </div>
                <div class="form-group">
                  <label for="telefone">Telefone</label>
                  <input type="tel" class="form-control" name="telefone_aluno" id="telefone" placeholder="(00)00000-0000" required>
                  <div class="invalid-feedback">
                    Digite o número de telefone.
                  </div>
                </div>
                <div class="form-group">
                  <label for="rm">RM</label>
                  <input type="text" class="form-control" name="RM" id="RM" placeholder="00000" required>
                  <div class="invalid-feedback">
                    Digite um RM válido.
                  </div>
                </div>

                <div class="form-group">
                  <label for="datanasc">Data de Nascimento</label>
                  <input type="date" class="form-control" name="datanasc" id="datanasc" required>
                  <div class="invalid-feedback">
                    Idade Mínima de 15 anos.
                  </div>
                </div>


                <div class="form-group">
                  <label for="curso">Curso</label>
                  <input type="text" class="form-control" name="curso" id="curso"
                    placeholder="Informática Para Internet" required>
                  <div class="invalid-feedback">
                    Digite seu curso.
                  </div>
                </div>

                <div class="form-group">
                  <label for="descricao">Descrição Pessoal</label>
                  <input type="descricao" class="form-control" name="descricao" id="descricao"
                    placeholder="Olá, meu nome é..." required>
                  <div class="invalid-feedback">
                    Digite sua Descrição Pessoal.
                  </div>
                </div>

                <div class="form-group">
                  <label for="habilidades">Habilidades e Competências</label>
                  <input type="habilidades" class="form-control" name="habilidades" id="habilidades"
                    placeholder="Excel básico, PHP Intermediário..." required>
                  <div class="invalid-feedback">
                    Digite suas Habilidades e Competências.
                  </div>
                </div>

                <div class="form-group">
                  <label for="password">Senha</label>
                  <input type="password" class="form-control" name="senha_aluno" id="password" placeholder="Senha"
                    minlength="6" required>
                  <div class="invalid-feedback">
                    A senha precisa ter pelo menos 6 caracteres.
                  </div>
                </div>


                <div class="form-group">
                  <label for="confirmPassword">Confirmar Senha</label>
                  <input type="password" class="form-control" name="confsenhaaluno" id="confirmPassword"
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

              <p class="text-center text-muted small mb-0">Cadastro para empresas? <a href="cadastroempresa.php">Clique
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
          Seu cadastro foi realizado com sucesso!. Realize login para acessar a sua página.
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-success" data-dismiss="modal">Fechar</button>
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
  </script>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const nascimentoInput = document.getElementById('datanasc');

      nascimentoInput.addEventListener('change', function (e) {
        const hoje = new Date();
        const valor = new Date(e.target.value);

        if (isNaN(valor)) {
          nascimentoInput.setCustomValidity('Data inválida');
          return;
        }

        // Calcula a idade
        let idade = hoje.getFullYear() - valor.getFullYear();
        const m = hoje.getMonth() - valor.getMonth();
        if (m < 0 || (m === 0 && hoje.getDate() < valor.getDate())) {
          idade--;
        }

        if (idade < 15) {
          nascimentoInput.setCustomValidity('Você precisa ter pelo menos 15 anos');
        } else {
          nascimentoInput.setCustomValidity('');
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

        if (password !== confirmPassword) {
          document.getElementById('confirmPassword').setCustomValidity('Senhas não coincidem');
        } else {
          document.getElementById('confirmPassword').setCustomValidity('');
        }

        if (!form.checkValidity()) {
          form.classList.add('was-validated');
          return;
        }

        // Exibe o modal de sucesso
        $('#cadastroSucessoModal').modal('show');
        // Limpa o formulário após fechar o modal
        $('#cadastroSucessoModal').on('hidden.bs.modal', function () {
          form.reset();
          form.classList.remove('was-validated');
        });
  </script>

</body>

</html>