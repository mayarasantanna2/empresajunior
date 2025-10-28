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
            <a href="login.php" class="order_online">Login</a>
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
              <h3 class="card-title text-center mb-3">Cadastre-Se
              </h3>
              <p class="text-center text-muted mb-4">Preencha os dados abaixo para criar sua conta na Freetecs</p>

              <form id="cadastroForm" novalidate>

                <div class="form-group">
                  <label for="nome">Nome Completo</label>
                  <input type="text" class="form-control" name="nomealuno" id="nome" placeholder="Nome Completo" required>
                  <div class="invalid-feedback">
                    Por favor, digite seu nome.
                  </div>
                </div>

                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="email" class="form-control" name="emailaluno" id="emailaluno" placeholder="email@empresa.com" required>
                  <div class="invalid-feedback">
                    Digite um email válido.
                  </div>
                </div>

                <div class="form-group">
                  <label for="cpf">CPF</label>
                  <input type="text" class="form-control" name="cpf" id="cpf" placeholder="000.000.000-00" required>
                  <div class="invalid-feedback">
                    Digite um CPF válido.
                  </div>
                </div>

                <div class="form-group">
                  <label for="datanasc">Data de Nascimento</label>
                  <input type="date" class="form-control" name="dataaluno"id="datanasc" required>
                  <div class="invalid-feedback">
                    Idade Mínima de 15 anos.
                  </div>
                </div>

                <div class="form-group">
                  <label for="curso">Curso</label>
                  <input type="text" class="form-control" name="cursoaluno" id="curso" placeholder="Informática Para Internet" required>
                  <div class="invalid-feedback">
                    Digite seu curso.
                  </div>
                </div>

                <div class="form-group">
                  <label for="descricao">Descrição Pessoal</label>
                  <input type="descricao" class="form-control" name="descaluno" id="descricao" placeholder="Olá, meu nome é..." required>
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
                  <input type="password" class="form-control" name="senhaaluno" id="password" placeholder="Senha" minlength="6" required>
                  <div class="invalid-feedback">
                    A senha precisa ter pelo menos 6 caracteres.
                  </div>
                </div>


                <div class="form-group">
                  <label for="confirmPassword">Confirmar Senha</label>
                  <input type="password" class="form-control" name="confsenhaaluno" id="confirmPassword" placeholder="Confirme a senha"
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

              <p class="text-center text-muted small mb-0">Cadastro para empresas? <a href="cadastroempresa.php">Clique Aqui</a></p>

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
  <!-- footer -->
  <footer class="footer_section">
    <div class="container">
      <div class="row">
        <div class="col-md-4 footer-col">
          <div class="footer_contact">
            <h4>
              Contato
            </h4>
            <div class="contact_link_box">

              <a href="">
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span>
                  Tel +55 (11)97398-3920
                </span>
              </a>
              <a href="">
                <i class="fa fa-envelope" aria-hidden="true"></i>
                <span>
                  freetecs@gmail.com
                </span>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <div class="footer_detail">
            <a href="" class="footer-logo">
              Freetecs
            </a>
            <p>
              Transforme aprendizado em experiência e conquiste seu certificado.
            </p>
            <div class="footer_social">
              <a href="">
                <i class="fa fa-facebook" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-twitter" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-linkedin" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-instagram" aria-hidden="true"></i>
              </a>
              <a href="">
                <i class="fa fa-pinterest" aria-hidden="true"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="col-md-4 footer-col">
          <h4>
            Horário de funcionamento
          </h4>
          <p>
            Seg-Sex: 7:00-19:00
          </p>
          <p> Sábado: 9:00-16:00</p>

        </div>
      </div>
      <div class="footer-info">
        <p>@2025 Todos os direitos reservados à FreeTecs</p> <br>
          
        <p>Distribuído por ETEC MCM</p>
        </p>
      </div>
    </div>
  </footer>
  <!-- scripts -->
  <script src="js/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="js/bootstrap.js"></script>

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


    // Máscara e validação CPF
    document.addEventListener("DOMContentLoaded", () => {
      const cpfInput = document.getElementById('cpf');

      cpfInput.addEventListener('input', function (e) {
        let v = e.target.value.replace(/\D/g, ''); // remove tudo que não for número

        // aplica a máscara: 000.000.000-00
        v = v.replace(/(\d{3})(\d)/, '$1.$2');
        v = v.replace(/(\d{3})\.(\d{3})(\d)/, '$1.$2.$3');
        v = v.replace(/(\d{3})\.(\d{3})\.(\d{3})(\d)/, '$1.$2.$3-$4');

        e.target.value = v.substring(0, 14);

        // valida se tem 11 números
        const apenasNumeros = v.replace(/\D/g, '');
        if (apenasNumeros.length < 11) {
          cpfInput.setCustomValidity('CPF inválido');
        } else {
          cpfInput.setCustomValidity('');
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
      });
    })();
  </script>

</body>

</html>